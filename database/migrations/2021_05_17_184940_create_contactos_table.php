<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactos', function (Blueprint $table) {
            $table->id();
            $table->string('contac_nombre');
            $table->unsignedBigInteger('contac_id_asunto');
            $table->string('contac_email',200);
            $table->integer('contac_telefono');
            $table->text('contac_mensaje');
            $table->string('contac_path_documento');
            $table->dateTime('contac_fecha');
            $table->foreignId('contac_id_comuna')->nullable()->references('id')->on('comunas')->ondelete('SET NULL');
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
        Schema::dropIfExists('contactos');
    }
}
