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
        'bancaria',
        'empresarial',
    ];
    public function usersOwner()
    {
        return $this->belongsToMany(User::class,'users_counts','user_id','cont_id');
    }
}
