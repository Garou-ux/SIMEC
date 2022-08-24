<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TblRequisicionesDet extends Model
{
    //
    /*
                $table->increments('RequisicionesDetId');
            $table->integer('RequisicionesId');
            $table->integer('ConceptoId');
            $table->string('Unidad', 100);
            $table->decimal('Cantidad', $precision = 8, $scale = 2);
            $table->decimal('PU', $precision = 8, $scale = 2);
            $table->decimal('Total', $precision = 8, $scale = 2);
            $table->string('Observacion', 200);
            $table->timestamps();
    */
    
    protected $table = "TblRequisicionesDet";
    protected $fillable = [
    'RequisicionesDetId',
    'RequisicionesId',
    'ConceptoId',
    'Unidad',
    'Cantidad',
    'PU',
    'Total',
    'Observacion',
    'created_at',
    'updated_at'
    ];
    
}
