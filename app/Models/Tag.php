<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Tag extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table= 'tags';
    public $fillable = [
        'name',
        'description',
        'user_id',
        'visible'
    ];

}
