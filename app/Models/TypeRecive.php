<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeRecive extends Model
{
    use HasFactory;
    protected $table = 'type_recives';
    public $fillable =[
        'name',        
        'description'
    ];
}
