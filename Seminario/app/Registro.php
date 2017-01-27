<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
  protected $table = 'registro'; //hace referencia a la base de datos users no importa si se pone o no ya que viene por default
/**
 * The attributes that are mass assignable.
 *
 * @var array
 */
 //PARTES QUE SE NOS PERMITE SER RELLENADAS, se define los atributos que pueden ser llenados por el usuario
protected $fillable = [
    'idregistro', 'asistencia', 'asistente_dni';
];
}
