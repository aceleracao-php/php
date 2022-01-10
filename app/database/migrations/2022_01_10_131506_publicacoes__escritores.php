<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PublicacoesEscritores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql')->create('publicacoes_de_escritores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('publi_id');
            $table->unsignedBigInteger('esc_id');
            $table->foreign('publi_id')->references('id')->on('publicacoes');
            $table->foreign('esc_id')->references('id')->on('escritores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('pgsql')->dropIfExists('publicacoes_de_escritores');
    }
}
