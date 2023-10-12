<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recive extends Model
{
    use HasFactory;
    protected $table = 'recives';
    public $fillable =[
        'value',
        'date_recive',
        'description',
        'type_recive_id'
    ];
    public function tiposRecebimento()
    {
        return $this->belongsTo(TypeRecive::class,'type_recive_id','id');
    }
}
