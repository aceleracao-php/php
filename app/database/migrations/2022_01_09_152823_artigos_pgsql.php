<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ArtigosPgsql extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql')->create('artigos', function (Blueprint $table) {
            $table->id();
            $table->string('title', 150);
            $table->text('resumo');
            $table->text('content');
            $table->unsignedBigInteger('id_revista');
            $table->timestamps();
            //referencia da chave estrangeira
            $table->foreign('id_revista')->references('id')->on('revistas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('pgsql')->dropIfExists('artigos');
    }
}
