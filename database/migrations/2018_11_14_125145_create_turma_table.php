<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTurmaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turmas', function (Blueprint $table) {
            $table->increments('idtb_turma');
            $table->integer('vaga');
            $table->string('dia');
            $table->string('hora');
            $table->integer('idtb_endereco')->unsigned();
            $table->integer('idtb_curso')->unsigned();
            $table->integer('idtb_professor')->unsigned();
            $table->timestamps();
            $table->foreign('idtb_endereco')->references('idtb_endereco')->on('enderecos');
            $table->foreign('idtb_curso')->references('idtb_curso')->on('cursos');
            $table->foreign('idtb_professor')->references('idtb_professor')->on('professors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('turma');
    }
}
