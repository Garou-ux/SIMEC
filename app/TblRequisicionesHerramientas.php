<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TblRequisicionesHerramientas extends Model
{
    //
    
    /*
             $table->increments('RequisicionesHerramientasId');
            $table->integer('RequisicionId');
            $table->integer('HerramientaId');
            $table->integer('Activo');
            $table->timestamps();
    */
    protected $table = "TblRequisicionesHerramientas";
    protected $fillable = [
    'RequisicionesHerramientasId',
    'RequisicionesId',
    'HerramientaId',
    'created_at',
    'updated_at',
    'Activo'];
}
