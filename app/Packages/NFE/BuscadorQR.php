<?php
namespace App\Packages\NFE;

use App\Packages\NFE\Importador\ImportadorMA;
use GuzzleHttp\Client;
use App\Packages\NFE\Tratacao;
use Symfony\Component\DomCrawler\Crawler;
use App\Packages\NFE\Importador\ImportadorMG;
use App\Packages\NFE\Importador\ImportadorMS;
use App\Packages\NFE\Importador\ImportadorMT;
use App\Packages\NFE\Importador\ImportadorPI;
use App\Packages\NFE\Importador\ImportadorRO;
use App\Packages\NFE\Importador\ImportadorRR;
use App\Packages\NFE\Importador\ImportadorRS;
use App\Packages\NFE\Importador\ImportadorSC;
use App\Packages\NFE\Importador\ImportadorSP;
use App\Packages\NFE\Importador\ImportadorTO;

Class BuscadorQR{

	public $link;
	public $estado;	
	public $importador;

	public function __construct($link, $estado)
	{
		$this->link = $link;
		
		switch ($estado) {
			case 'AC':
				$this->importador = new ImportadorAC($link);
				break;
			case 'AL':
				$this->importador = new ImportadorAL($link);
				break;
			case 'AP':
				$this->importador = new ImportadorAP($link);
				break;
			case 'AM':
				$this->importador = new ImportadorAM($link);
				break;
			case 'BA':
				$this->importador = new ImportadorBA($link);
				break;
			case 'CE':
				$this->importador = new ImportadorCE($link);
				break;
			case 'DF':
				$this->importador = new ImportadorDF($link);
				break;
			case 'ES':
				$this->importador = new ImportadorES($link);
				break;
			case 'GO':
				$this->importador = new ImportadorGO($link);
				break;
			case 'MA':
				$this->importador = new ImportadorMA($link);
				break;
			case 'MT':
				$this->importador = new ImportadorMT($link);
				break;
			case 'MS':
				$this->importador = new ImportadorMS($link);
				break;
			case 'MG':
				$this->importador = new ImportadorMG($link);
				break;
			case 'PA':
				$this->importador = new ImportadorPA($link);
				break;
			case 'PB':
				$this->importador = new ImportadorPB($link);
				break;
			case 'PR':
				$this->importador = new ImportadorPR($link);
				break;
			case 'PE':
				$this->importador = new ImportadorPE($link);
				break;
			case 'PI':
				$this->importador = new ImportadorPI($link);
				break;
			case 'RJ':
				$this->importador = new ImportadorRS($link);
				break;
			case 'RN':
				$this->importador = new ImportadorRN($link);
				break;
			case 'RS':
				$this->importador = new ImportadorRS($link);
				break;
			case 'RO':
				$this->importador = new ImportadorRO($link);
				break;
			case 'RR':
				$this->importador = new ImportadorRR($link);
				break;
			case 'SC':
				$this->importador = new ImportadorSC($link);
				break;
			case 'SP':
				$this->importador = new ImportadorSP($link);
				break;
			case 'SE':
				$this->importador = new ImportadorSE($link);
				break;
			case 'TO':
				$this->importador = new ImportadorTO($link);
				break;
			default:
				echo 'Estado inválido ou não reconhecido';
				break;
		}
	}
	
	public function getItensCupomQrCode(){
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


