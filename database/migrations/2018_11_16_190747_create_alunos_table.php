<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('cpf')->unique();
            $table->string('rg')->unique();
            $table->string('orgao');
            $table->string('profissao');
            $table->string('tipo_sangue');
            $table->date('data');
            $table->integer('idtb_cursos')->unsigned();
            $table->integer('idtb_sexos')->unsigned();
            $table->integer('idtb_escols')->unsigned();
            $table->foreign('idtb_cursos')->references('id')->on('cursos');
            $table->foreign('idtb_sexos')->references('id')->on('sexos');
            $table->foreign('idtb_escols')->references('id')->on('escols');
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
        Schema::dropIfExists('slunos');
    }
}
