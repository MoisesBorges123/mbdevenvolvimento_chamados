<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoConsultaNfe extends Model
{
    
    protected $table = 'estado_consulta_nfe';
    public $fillable =[
        'estado',
        'link'        
    ];
}
