<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 45);
            $table->string('rg', 11);
            $table->string('cpf', 15);
            $table->string('formacao', 45);
            $table->string('instituicao', 45);
            $table->date('ano');
            $table->string('bio');
            $table->string('img')->unique();
            $table->string('endereco', 50);
            $table->string('bairro', 50);
            $table->string('cidade', 50);
            $table->string('numero', 50);
            $table->string('estado', 50);
            $table->timestamps();
            $table->integer('idtb_users')->unsigned();
            
            $table->foreign('id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('professors');
    }
}
