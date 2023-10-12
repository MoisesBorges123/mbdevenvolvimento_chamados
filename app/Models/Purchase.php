<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;
    protected $table = 'purchases';
    public $fillable = [
        'supplier_id',
        'description',
        'value',
        'date_buy',
        'date_recive'
        
    ];
   
    public function supplier(){
        return $this->belongsTo(Supplier::class,'supplier_id','id');
    }
    public function lancamento()
    {
        return $this->morphMany(Lancamento::class, 'transactable');
    }
    public function listaProdutos()
    {
        return $this->belongsToMany(Product::class,'shopping_cart','purchase_id','product_id')->wherePivot('quant','value')->withTimestamps();
    }
}
