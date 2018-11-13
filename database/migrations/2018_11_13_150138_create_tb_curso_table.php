<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbCursoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_curso', function (Blueprint $table) {
            $table->increments('idtb_curso');
            $table->string('nome', 45);
            $table->text('sobre', 750);
            $table->string('alvo', 500);
            $table->text('carga', 10);
            $table->string('mercado', 1000);
            $table->flat('valor', 10,2);
            $table->boolean('ativa');
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
        Schema::dropIfExists('tb_curso');
    }
}
