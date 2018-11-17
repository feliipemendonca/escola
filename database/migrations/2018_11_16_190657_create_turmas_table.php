<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTurmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turmas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('vaga');
            $table->string('dia');
            $table->string('hora');
            $table->string('endereco');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('numero');
            $table->string('estado');
            $table->integer('idtb_curso')->unsigned();
            $table->integer('idtb_professor')->unsigned();           
            $table->foreign('idtb_curso')->references('id')->on('cursos');
            $table->foreign('idtb_professor')->references('id')->on('professors');

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
        Schema::dropIfExists('turmas');
    }
}
