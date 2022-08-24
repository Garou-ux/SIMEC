<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TblRequisicionesConsumibles extends Model
{
    //Modelo para table  TblRequisicionesConsumibles}
    /*
        $table->increments('RequisicionesConsumiblesId');
            $table->integer('RequisicionId');
            $table->integer('ConsumibleId');
            $table->integer('Activo');
            $table->timestamps();    
    */
    protected $table = "TblRequisicionesConsumibles";
    protected $fillable = [
    'RequisicionesConsumiblesId',
    'RequisicionesId',
    'ConsumibleId',
    'created_at',
    'updated_at',
    'Activo'];
}
