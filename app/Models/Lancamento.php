<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lancamento extends Model
{
    use HasFactory;    
    protected $table = 'lancamentos';

    public $fillable = [
        'user_id',
        'categorialan_id',
        'date_transaction',
        'value_transaction',
        'description',
        'nfe',
       // 'supplier_id',
        //'shopping_cart'
    ];
    public function transactable()
    {
        return $this->morphTo();
    } 
    public function categoria()
    {
        return $this->belongsTo(CategoriaLanTypeLan::class,'categorialan_id','id');
    }
}
