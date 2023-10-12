<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Suppliers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers',function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('cnpj')->nullable();
            $table->string('cpf')->nullable();
            $table->string('endereco')->nullable();
            $table->string('telefone')->nullable();
            $table->string('site')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('cidade')->nullable();
            $table->foreignId('categoria_supplier_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
