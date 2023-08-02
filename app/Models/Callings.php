<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Callings extends Model
{
    use HasFactory;
    protected $table = 'callings';
    public $fillable = [        
        'title',
        'description',
        'user_id',
        'department_id',
        'readed',
        'answered',
        'confirmed',
        'readed_by',
        'answered_by',
        'urgency_id',
        'confirmed_by',
        'opened'
    ];
    public function department(){
        return $this->belongsTo(Department::class,'department_id','id');
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');        
    }
    public function urgency()
    {
        return $this->belongsTo(Urgency::class,'urgency_id','id');
    }
    public function userRead()
    {
        return $this->belongsTo(User::class,'readed_by','id');        
    }
    public function userAnswered()
    {
        return $this->belongsTo(User::class,'answered_by','id');        
    }
    public function userConfirmed()
    {
        return $this->belongsTo(User::class,'confirmed_by','id');        
    }
}
