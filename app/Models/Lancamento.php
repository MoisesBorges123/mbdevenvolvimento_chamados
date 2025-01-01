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
        'link_nfe',
        'transact_type',
        'count_id',
        //'shopping_cart'
    ];
    public function tags()
    {
        
        return $this->belongsToMany(Tag::class,'tag_lancamentos','tag_id','lancamento_id');
    } 
    public function categoria()
    {
        return $this->belongsTo(CategoriaLanTypeLan::class,'categorialan_id','id');
    }
}
