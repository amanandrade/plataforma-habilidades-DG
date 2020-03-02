<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Mensagens extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensagens', function(Blueprint $table){
            $table->bigIncrements('id');
            // Remetente
            $table->foreign('remetente_user_id')->references('id')->on('users');
            // Destino
            $table->foreign('destino_user_id')->references('id')->on('users');
            $table->string('msgLida');
            $table->string('hora');
            $table->string('assunto');
            $table->text('texto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mensagens');
    }
}
