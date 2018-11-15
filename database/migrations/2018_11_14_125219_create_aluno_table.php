<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->increments('idtb_aluno');
            $table->string('nome');
            $table->string('cpf')->unique();
            $table->string('rg')->unique();
            $table->string('orgao');
            $table->string('profissao');
            $table->string('tipo_sangue');
            $table->date('data');
            $table->integer('idtb_curso')->unsigned();
            $table->integer('idtb_sexo')->unsigned();
            $table->integer('idtb_escol')->unsigned();
            $table->integer('idtb_contato')->unsigned();
            $table->integer('idtb_users')->unsigned();
            $table->timestamps();
            $table->foreign('idtb_curso')->references('idtb_curso')->on('cursos');
            $table->foreign('idtb_sexo')->references('idtb_sexo')->on('sexos');
            $table->foreign('idtb_escol')->references('idtb_escol')->on('escols');
            $table->foreign('idtb_users')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aluno');
    }
}
