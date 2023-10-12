<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaSupplier extends Model
{
    use HasFactory;
    protected $table= 'categor_supplier';
    public $fillable = [
        'name',
        'description'
    ];

}
