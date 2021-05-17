<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGaleriaNoticiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galeria_noticias', function (Blueprint $table) {
            $table->id();
            $table->string('gnot_nombre',250);
            $table->string('gnot_path',500);
            $table->integer('gnot_orden')->unique();
            $table->foreignId('gnot_noticias_id')->references('id')->on('noticias')->onDelete('cascade');
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
        Schema::dropIfExists('galeria_noticias');
    }
}
