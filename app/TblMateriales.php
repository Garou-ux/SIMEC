<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TblMateriales extends Model
{
           //Modelo para table TblMateriales
           protected $table = "TblMateriales";
           protected $fillable = ['MaterialId','Nombre','created_at','updated_at','Activo'];
}
