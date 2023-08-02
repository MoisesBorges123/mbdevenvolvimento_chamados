<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Callings extends Migration
{
   
    public function up()
    {
        Schema::create('callings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->foreignId('user_id');
            $table->foreignId('department_id');
            $table->foreignId('urgency_id');
            $table->dateTime('readed')->nullable();
            $table->foreignId('readed_by')->nullable();
            $table->dateTime('answered')->nullable();        
            $table->foreignId('answered_by')->nullable();        
            $table->dateTime('opened')->nullable();                    
            $table->softDeletes();
            $table->timestamps();
        });
    }
   
    public function down()
    {
        Schema::dropIfExists('callings');
    }
}
