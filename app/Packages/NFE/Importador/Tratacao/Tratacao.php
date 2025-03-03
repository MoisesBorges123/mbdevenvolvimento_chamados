<?php 
namespace App\Packages\NFE\Importador\Tratacao;

interface Tratacao {
    public function trataNomeProduto (string $texto) :array;
    public function trataQtde (string $text) :float;
    public function trataValor (string $texto) :float;
    public function trataNameDefault ($text) :string;
}