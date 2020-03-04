<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMensagensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensagens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->bigInteger('remetente_user_id')->unsigned();
            $table->bigInteger('destino_user_id')->unsigned();
            // Remetente
            $table->foreign('remetente_user_id')->references('id')->on('users');
            // Destino
            $table->foreign('destino_user_id')->references('id')->on('users');
            $table->string('assunto');
            $table->text('mensagem');
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
