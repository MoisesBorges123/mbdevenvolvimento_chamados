<?php
namespace App\Packages\NFE\Importador;


interface Importador {

    public function __construct($link);
    public function getDadosCupom() :array;
    
}