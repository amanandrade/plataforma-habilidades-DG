<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->unsignedBigInteger('telefone');
            $table->string('genero');
            $table->date('nascimento'); 
            $table->string('foto')->nullable();
            $table->integer('estado')->nullable();
            $table->unsignedBigInteger('curso_id');
            $table->unsignedBigInteger('status_id');
            $table->rememberToken();
            $table->timestamps(); 
            $table->foreign('curso_id')->references('id')->on('cursos');
            $table->foreign('status_id')->references('id')->on('status');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
