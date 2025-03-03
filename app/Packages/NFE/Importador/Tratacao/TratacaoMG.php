<?php 
namespace App\Packages\NFE\Importador\Tratacao;

class TratacaoMG implements Tratacao {

    public function trataNomeProduto( string $text) :array
    {
        $texto = str_replace(')','',str_replace('(','+',$text));
        $produtoCodigo = explode('+',$texto);        
        return array(
            'nome'=>strval(trim($produtoCodigo[0])),
            'codigo'=>$this->trataNameDefault($produtoCodigo[1])
        );
    }

    public function trataQtde($text) :float
    {        
        $texto = $this->trataNameDefault($text);
        return floatval($texto);
    }

    public function trataValor($texto) :float
    {
		if(str_contains($texto,':')){
			$texto = $this->trataNameDefault($texto);
		}        
        $value = floatval(str_replace(',','.',trim(str_replace('R$','',$texto))));
        return $value;
    }

    public function trataNameDefault($text) :string
    {        
        $texto = explode(':',trim($text)); 
        if(!empty($texto[1])){
            return trim($texto[1]);
        }else{
            return trim($texto[0]);

        }       
    }
}