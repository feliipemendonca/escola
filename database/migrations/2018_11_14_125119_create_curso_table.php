<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('cursos', function (Blueprint $table) {
        $table->increments('idtb_curso');
        $table->string('nome');
        $table->text('sobre');
        $table->string('alvo');
        $table->text('carga');
        $table->string('mercado');
        $table->float('valor');
        $table->integer('ativa');
        $table->string('img')->unique();
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
      Schema::dropIfExists('curso');
    }
  }
