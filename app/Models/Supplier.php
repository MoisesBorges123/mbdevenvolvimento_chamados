<?php

namespace App\Models;

use CategorSupplier;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $table='suppliers';
    public $fillable  = [
        'name',
        'cnpj',
        'cpf',
        'endereco',
        'telefone',
        'site',
        'whatsapp',
        'cidade',
        'categoria_supplier_id'
    ];

    public function categoria()
    {
        return $this->belongsTo(CategorSupplier::class,'categoria_supplier_id','id');
    }
    
}
