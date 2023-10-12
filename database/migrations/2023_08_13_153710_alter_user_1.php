<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PhpParser\Node\Expr\FuncCall;

class AlterUser1 extends Migration
{

    public function up()
    {
        Schema::table('users',function(Blueprint $table){
            $table->foreignId('profile_id')->nullable();
            $table->string('avatar')->nullable();
        });
    }
 
    public function down()
    {
        //
    }
}
