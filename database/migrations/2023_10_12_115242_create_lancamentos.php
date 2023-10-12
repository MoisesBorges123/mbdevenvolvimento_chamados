<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLancamentos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lancamentos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('categorialan_id');
            $table->date("date_transaction");
            $table->double('value_transaction');
            $table->text('description');
            $table->string('nfe');
            $table->morphs('transactable'); // se foi uma compra ou pagamento de despesa
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lancamentos');
    }
}
