<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typelan extends Model
{
    use HasFactory;
    protected $table = 'typelan';
    public $fillable =[
        'name',        
        'description'
    ];
}
