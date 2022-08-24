<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TblHerramientas extends Model
{
       //Modelo para table TblHerramientas
       protected $table = "TblHerramientas";
       protected $fillable = ['HerramientaId','Nombre','created_at','updated_at','Activo'];
}
