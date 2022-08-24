<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TblRequisicionesMateriales extends Model
{
    //
    /*
            $table->increments('RequisicionesMaterialesId');
            $table->integer('RequisicionId');
            $table->integer('MaterialId');
            $table->integer('Activo');
            $table->timestamps();
    */
    protected $table = "TblRequisicionesMateriales";
    protected $fillable = [
    'RequisicionesMaterialesId',
    'RequisicionesId',
    'MaterialId',
    'created_at',
    'updated_at',
    'Activo'];
}
