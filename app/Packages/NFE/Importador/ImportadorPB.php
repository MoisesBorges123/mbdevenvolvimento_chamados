<?php
namespace App\Packages\NFE\Importador;

use GuzzleHttp\Client;
use App\Packages\NFE\Importador\Tratacao\TratacaoMG;
use Symfony\Component\DomCrawler\Crawler;


class ImportadorPB implements Importador {

    public $link;
	public $trataDados;
	public $client;

    public function __construct($link)
	{
		$this->link = $link;
		$this->trataDados = new TratacaoMG();
		$this->client = new Client();
	}
	
	public function getDadosCupom() :array
    {
		$response = $this->client->request('GET', $this->link);
		$html = $response->getBody();
		$crawler = new Crawler();
		$crawler->addHtmlContent($html);
		$produtos = $crawler->filter('table > tbody#myTable > tr > td');
		$i = 0;
		$indiceArray=0;
		$lista_produtos=[];
		$dados_fornecedor=[];
		$dados_compra=[];
		foreach ($produtos as $produto){
			switch($i){
				case 0: //Insira o nome do produto 
					$produtoNome  = $this->trataDados->trataNomeProduto($produto->textContent);           
					$codigo=$produtoNome['codigo'];
					$produtoN=$produtoNome['nome'];            
					break;
		
				case 1://Insira a unidade de medida do produto
					$qtde=$this->trataDados->trataQtde($produto->textContent);            
					break;
		
				case 2: //Insira a quantidade
					$und = $this->trataDados->trataNameDefault($produto->textContent);            
					break;        
				case 3: //Insira a quantidade
					$valor = $this->trataDados->trataValor($produto->textContent);            
					break;        
		
			}
			 
			$i++;
			if($i==4){
				$i=0;
				$lista_produtos[]=[
					'codigo'=>$codigo,
					'produto'=>$produtoN,
					'und'=>$und,
					'qtde'=>$qtde,
					'valor'=>$valor
				];        
			}
		}
		$k = 0;
		
		$fornecedorDadosHTML = $crawler->filter('div#collapse4 > table > tbody > tr > td');
		
		foreach ($fornecedorDadosHTML as $dado){
			
			if($k<=3){ //Dados Fornecedor
				switch ($k){
					case 0:
						$dados_fornecedor['nome']=$dado->textContent;
					break;
					case 1:
						$dados_fornecedor['cnpj']=$dado->textContent;
					break;
					case 2:
						$dados_fornecedor['inscricao_estadual']=$dado->textContent;
					break;
					case 3:
						$dados_fornecedor['uf']=$dado->textContent;
					break;
					
				}
				
			}else{
				if(str_contains($dado->textContent,'/')){
					$metadata = explode('/',$dado->textContent);
					$metadata2 = explode(' ',$dado->textContent);
					$dia = trim($metadata[0]);
					$mes = trim($metadata[1]);
					$ano = substr(trim($metadata[2]),0,4);
					$data = "$ano-$mes-$dia";
					$horas= trim($metadata2[1]);
					$dados_compra['horario']['data'] = $data;
					$dados_compra['horario']['hora'] = $horas;
				}
				if(str_contains($dado->textContent,'R$')){			
					if(empty($dados_compra['valor_total']) && empty($dados_compra['icms_base']) && empty($dados_compra['valor_icms'])){				
						$dados_compra['valor_total'] = $this->trataDados->trataValor($dado->textContent);
					}elseif(!empty($dados_compra['valor_total']) && empty($dados_compra['icms_base']) && empty($dados_compra['valor_icms'])){
						$dados_compra['icms_base'] = $this->trataDados->trataValor($dado->textContent);
					}elseif(!empty($dados_compra['valor_total']) && !empty($dados_compra['icms_base']) && empty($dados_compra['valor_icms'])){
						$dados_compra['valor_icms'] = $this->trataDados->trataValor($dado->textContent);
					}
				}
			}
			
			
			$k++;
		}

		return array(
			'listaProdutos'=>$lista_produtos,
			'dadosFornecedor'=>$dados_fornecedor,
			'dadosCompra'=>$dados_compra
		);
	}
}