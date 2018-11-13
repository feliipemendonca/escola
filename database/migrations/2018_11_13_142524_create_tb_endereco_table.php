<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbEnderecoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_endereco', function (Blueprint $table) {
            $table->increments('idtb_endereco');
            $table->string('endereco', 50);
            $table->string('bairro', 50);
            $table->string('cidade', 50);
            $table->string('numero', 50);
            $table->string('estado', 50);
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
        Schema::dropIfExists('tb_endereco');
    }
}
