<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    //Modelo para la tabla usuarios
    protected $table = "usuarios";
    protected $fillable = ['id','NombreUsuario','Pass','Correo','AreaId','created_at','updated_at','activo'];
}
