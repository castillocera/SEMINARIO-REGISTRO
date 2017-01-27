<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('registros', function(Blueprint $table) {

                  $table->increments('idregistro');
                  $table->boolean('asistencia');
                  $table->timestamps();
                  $table->integer('asistente_id')->unsigned();
                  $table->foreign('asistente_id')->references('id')->on('asistentes');
          /*
           | En el video tutorial olvide agregar el Path de las imagenes xD
           */

          //para las llaves foraneas
          //estamos asignando un genero por eso usaremos la tabla genero - requiere hacer una relacion
          //el genre_id hara referencia al genero id de la tabla generos

    });
  }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::drop('registros');
    }
}
