<?php
namespace App\Packages\NFE;
class Tratacao{
    public function trataNomeProduto($text){
        $texto = str_replace(')','',str_replace('(','+',$text));
        $produtoCodigo = explode('+',$texto);        
        return array(
            'nome'=>strval(trim($produtoCodigo[0])),
            'codigo'=>$this->trataNameDefault($produtoCodigo[1])
        );
    }
    public function trataQtde($text){        
        $texto = $this->trataNameDefault($text);
        return floatval($texto);
    }
    public function trataValor($texto){
		if(str_contains($texto,':')){
			$texto = $this->trataNameDefault($texto);
		}        
        $value = floatval(str_replace(',','.',trim(str_replace('R$','',$texto))));
        return $value;
    }
    public function trataNameDefault($text){        
        $texto = explode(':',trim($text)); 
        if(!empty($texto[1])){
            return trim($texto[1]);
        }else{
            return trim($texto[0]);

        }       
    }
}
