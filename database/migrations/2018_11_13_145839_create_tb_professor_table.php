<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbProfessorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_professor', function (Blueprint $table) {
            $table->increments('idtb_professor');
            $table->string('nome', 45);
            $table->string('rg', 11);
            $table->string('cpf', 15);
            $table->string('formacao', 45);
            $table->string('instituicao', 45);
            $table->date('ano');
            $table->string('bio', 500);
            $table->string('img', 220)->unique();
            $table->integer('tb_endereco_idtb_endereco')->unsigned();
            $table->timestamps();

            $table->foreign('tb_endereco_idtb_endereco')->references('idtb_endereco')->on('tb_endereco');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_professor');
    }
}
