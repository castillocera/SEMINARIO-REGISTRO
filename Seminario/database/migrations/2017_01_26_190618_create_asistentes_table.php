<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsistentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      //CREACION DE TABLAS EMPIEZA - CREATING TABLE EN LA DOCUMENTACION
      Schema::create('asistentes', function(Blueprint $table) {
        $table->increments('id');
        $table->string('dni');
        $table->string('nombre');
        $table->string('apellidos');
        $table->string('institucion');
        $table->string('telefono');
        $table->string('correo');
        $table->boolean('certificado')->default(false);
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
         Schema::drop('asistentes');
    }
}
