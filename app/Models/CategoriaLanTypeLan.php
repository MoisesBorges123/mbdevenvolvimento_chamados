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
        'naturelan_id',
        'description',
        'user_id'
    ];
    public function tipoLancamento()
    {
        return $this->belongsTo(Naturelan::class,'naturelan_id','id');
    }
}
