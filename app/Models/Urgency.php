<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Urgency extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table ='urgencies';
    public $fillable = [
        'name',
        'description',
        'time_waiting'
    ];
}
