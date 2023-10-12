<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaLanTypeLan extends Model
{
    use HasFactory;
    protected $table = 'categorialantypelan';
    public $fillable = [
        'name',
        'typelan_id',
        'description'
    ];
    public function tipoLancamento()
    {
        return $this->belongsTo(TypeLan::class,'typelan_id','id');
    }
}
