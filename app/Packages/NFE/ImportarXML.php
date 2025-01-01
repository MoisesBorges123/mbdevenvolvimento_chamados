<?php
namespace App\Packages\NFE;
use DOMDocument;
class ImportarXML{
    public $listaCompras, $dadosNFE, $destinatario, $fornecedor;
    public function __construct($arquivo)
    {
        if ( is_file($arquivo) ){
            $docxml = file_get_contents($arquivo);    
            $this->importaNFe($docxml);
        }else{

        }
    }   
    function importaNFe($xml){
        $doc = new DOMDocument();
       // $doc->preservWhiteSpace = FALSE; //elimina espaÃ§os em branco
        $doc->formatOutput = FALSE;
        $doc->loadXML($xml,LIBXML_NOBLANKS | LIBXML_NOEMPTYTAG);
        $node = $doc->getElementsByTagName('nfeProc')->item(0);    
        $produtos = $doc->getElementsByTagName('det');
        $nfe = $doc->getElementsByTagName('infProt');
        $nfeEmissao =  $doc->getElementsByTagName('ide');   
        $dest = $doc->getElementsByTagName('dest'); 
        $emit = $doc->getElementsByTagName('emit');
        $totaisNFE = $doc->getElementsByTagName('ICMSTot');
        $this->listaCompras =[];
        $this->dadosNFE=[];
        $this->destinatario=[];
        $this->fornecedor=[];
        foreach($nfe as $item){
            $this->dadosNFE['chaveAcesso']=$this->tagValue($item,'chNFe');
        }
        foreach($nfeEmissao as $item){
            $this->dadosNFE['emissao'] = $this->tagValue($item,'dhEmi');
            $this->dadosNFE['operacao'] = $this->tagValue($item,'natOp');        
        }
        foreach($totaisNFE as $item)
        {
            $this->dadosNFE['totalProdutos'] = $this->tagValue($item,'vProd');
            $this->dadosNFE['totalNota'] = $this->tagValue($item,'vNF');
            $this->dadosNFE['outrosValores'] = $this->tagValue($item,'vOutro');
            $this->dadosNFE['desconto'] = $this->tagValue($item,'vDesc');
        }
        foreach($dest as $item){
            $this->destinatario['nome'] = $this->tagValue($item,'xNome');
            $this->destinatario['nome_fantasia'] = $this->tagValue($item,'xFant');
            $this->destinatario['cnpj'] = $this->tagValue($item,'CNPJ');
            $this->destinatario['cpf'] = $this->tagValue($item,'CPF');
            $endereco = $item->getElementsByTagName('enderDest');
            foreach($endereco as $item){
                $this->destinatario['endereco']['uf'] = $this->tagValue($item,'UF');
                $this->destinatario['endereco']['pais'] = $this->tagValue($item,'xPais');
                $this->destinatario['endereco']['logradouro'] = $this->tagValue($item,'xLgr');
                $this->destinatario['endereco']['municipio'] = $this->tagValue($item,'xMun');
                $this->destinatario['endereco']['numero'] = $this->tagValue($item,'nro');
                $this->destinatario['endereco']['bairro'] = $this->tagValue($item,'xBairro');
                $this->destinatario['endereco']['cep']= $this->tagValue($item,'CEP');
            }
        }
        foreach($emit as $item){
            $this->fornecedor['nome'] = $this->tagValue($item,'xNome');
            $this->fornecedor['nome_fantasia'] = $this->tagValue($item,'xFant');
            $this->fornecedor['cnpj'] = $this->tagValue($item,'CNPJ');
            $this->fornecedor['cpf'] = $this->tagValue($item,'CPF');
            $endereco = $item->getElementsByTagName('enderEmit');
            foreach($endereco as $item){
                $this->fornecedor['endereco']['uf'] = $this->tagValue($item,'UF');
                $this->fornecedor['endereco']['pais'] = $this->tagValue($item,'xPais');
                $this->fornecedor['endereco']['logradouro'] = $this->tagValue($item,'xLgr');
                $this->fornecedor['endereco']['municipio'] = $this->tagValue($item,'xMun');
                $this->fornecedor['endereco']['numero'] = $this->tagValue($item,'nro');
                $this->fornecedor['endereco']['bairro'] = $this->tagValue($item,'xBairro');
                $this->fornecedor['endereco']['cep']= $this->tagValue($item,'CEP');
            }
        }
    
    
        foreach($produtos as $item){
            $id = $this->tagValue($item,'nItemPed');
            $this->listaCompras[$id]['codigo'] = $this->tagValue($item,'cProd');
            $this->listaCompras[$id]['produto'] = $this->tagValue($item,'xProd');
            $this->listaCompras[$id]['und'] = $this->tagValue($item,'uCom');
            $this->listaCompras[$id]['qtde'] = $this->tagValue($item,'qCom');
            $this->listaCompras[$id]['valor'] = $this->tagValue($item,'vUnTrib');
            $this->listaCompras[$id]['_total'] = $this->tagValue($item,'vProd');
            $this->listaCompras[$id]['_CFOP'] = $this->tagValue($item,'CFOP');
            $this->listaCompras[$id]['_CEST'] = $this->tagValue($item,'CEST');
            $this->listaCompras[$id]['_NumItemPed'] = $this->tagValue($item,'nItemPed');
            $imposto = $item->getElementsByTagName('imposto');
            
            //GET IMPOSTOS
            $list_impostos=[];
            foreach($imposto as $child){
                foreach($child->childNodes as $child){
                    array_push($list_impostos,$child->nodeName);
                }
            }
            /*
             * Para o futuro caso queira e entenda calcular cada imposto.         
            foreach($list_impostos as $itemImposto){
                $typeImposto = $imposto->getElementsByTagName($itemImposto);
                $quant = 
            }*/
            $this->listaCompras[$id]['impostos']=$list_impostos; 
            
        }
        /*echo"<pre>";
        print_r($this->listaCompras);
        print_r($this->dadosNFE);
        print_r($this->destinatario);
        print_r($this->fornecedor);
        echo"</pre>";*/
        
    
         
    }
    function tagValue($node,$tag){
        return $node->getElementsByTagName("$tag")->item(0)->nodeValue ?? null;
    }
}


    



?>