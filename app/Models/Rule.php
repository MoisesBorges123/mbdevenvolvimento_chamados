<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    use HasFactory;
    protected $table = 'rules';
    public $fillable = [
        'profile_id',
        'access'
    ];
    public function profile(){
        return $this->belongsTo(Profile::class,'profile_id','id');
    }
}
