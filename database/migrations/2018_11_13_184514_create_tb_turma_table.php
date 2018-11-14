<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbTurmaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_turma', function (Blueprint $table) {
            $table->increments('idtb_turma');
            $table->integer('vaga');
            $table->string('dia');
            $table->string('hora');
            $table->integer('tb_endereco_idtb_endereco')->unsigned();
            $table->integer('tb_curso_idtb_curso')->unsigned();
            $table->integer('tb_professor_idtb_professor')->unsigned();
            $table->timestamps();

            $table->foreign('tb_endereco_idtb_endereco')->references('idtb_endereco')->on('tb_endereco');
            $table->foreign('tb_curso_idtb_curso')->references('idtb_curso')->on('tb_curso');
            $table->foreign('tb_professor_idtb_professor')->references('idtb_professor')->on('tb_professor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_turma');
    }
}
