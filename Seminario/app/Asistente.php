<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asistente extends Model
{
  protected $table = 'asistentes'; //hace referencia a la base de datos users no importa si se pone o no ya que viene por default
/**
 * The attributes that are mass assignable.
 *
 * @var array
 */
 //PARTES QUE SE NOS PERMITE SER RELLENADAS, se define los atributos que pueden ser llenados por el usuario
protected $fillable = [
    'dni', 'nombre', 'apellidos','institucion', 'telefono', 'correo','certificado'
];
}
