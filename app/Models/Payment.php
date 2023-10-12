<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Payment extends Model
{
    use HasFactory;
    protected $table = 'payments';
    public $fillable =[
        'description',
        'service_id',
        'value',
        'date_payment',
        'expired_date'
    ];
    public function servicos()
    {
        return $this->belongsTo(Servico::class,'service_id','id');
    }
}
