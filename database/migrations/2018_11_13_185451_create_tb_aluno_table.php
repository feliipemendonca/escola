<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbAlunoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_aluno', function (Blueprint $table) {
           $table->increments('idtb_aluno');
           $table->string('nome');
           $table->string('cpf')->unique();
           $table->string('rg')->unique();
           $table->string('orgao');
           $table->string('profissao');
           $table->string('tipo_sangue');
           $table->date('data');
           $table->integer('tb_curso_idtb_curso')->unsigned();
           $table->integer('tb_sexo_idtb_sexo')->unsigned();
           $table->integer('tb_escol_idtb_escol')->unsigned();
           $table->integer('tb_contato_idtb_contato')->unsigned();
           $table->integer('tb_users_idtb_users')->unsigned();
           $table->timestamps();

           $table->foreign('tb_curso_idtb_curso')->references('idtb_curso')->on('tb_curso');
           $table->foreign('tb_sexo_idtb_sexo')->references('idtb_sexo')->on('tb_sexo');
           $table->foreign('tb_escol_idtb_escol')->references('idtb_escol')->on('tb_escol');
           $table->foreign('tb_users_idtb_users')->references('id')->on('users');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_aluno');
    }
}
