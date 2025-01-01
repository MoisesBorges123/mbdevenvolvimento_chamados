<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Naturelan extends Model
{
    use HasFactory;
    protected $table = 'naturelan';
    public $fillable =[
        'name',
        'positive',
        'description'
    ];
}
