<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessorTable extends Migration
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
            $table->integer('idtb_endereco')->unsigned();
            $table->timestamps();
            $table->foreign('idtb_endereco')->references('id')->on('enderecos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('professor');
    }
}
