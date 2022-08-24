<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TblConsumibles extends Model
{
    //Modelo para table TblConsumibles
    protected $table = "TblConsumibles";
    protected $fillable = ['ConsumibleId','Nombre','created_at','updated_at','Activo'];
}
