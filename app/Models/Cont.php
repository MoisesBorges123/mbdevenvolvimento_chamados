<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cont extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'conts';
    public $fillable = [
        'name',
        'saldo',
        'banking_id',
        'agencia',
        'num_count',
        'empresarial'
    ];
    public function usersOwner()
    {
        return $this->belongsToMany(User::class,'users_counts','cont_id','user_id');
    }
    public function banco()
    {
        return $this->belongsTo(Banking::class,'banking_id','id');
    } 
}