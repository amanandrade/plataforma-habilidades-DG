<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMsgReceptorFeedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('msg_receptor_feeds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('mensagem');
            $table->unsignedBigInteger('usuario_id');
            $table->unsignedBigInteger('emissor_id');
            $table->timestamps();

            $table->foreign('usuario_id')->references('id')->on('users');
            $table->foreign('emissor_id')->references('id')->on('msg_emissor_feeds');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('msg_receptor_feeds');
    }
}
