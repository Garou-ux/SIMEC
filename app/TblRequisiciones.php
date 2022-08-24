<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TblRequisiciones extends Model
{
         //Modelo para table TblRequisiciones
         /*
              $table->increments('RequisicionesId');
            $table->integer('ClienteId');
            $table->integer('UsuarioId');
            $table->string('Proyecto', 100)->nullable();
            $table->date('Fecha');
            $table->string('Servicio', 100)->nullable();
            $table->string('Deudas', 100)->nullable();
            $table->string('Seguridad', 100)->nullable();
            $table->string('Destino', 100)->nullable();
            $table->integer('Activo');
            $table->timestamps();       
         */
         protected $table = "TblRequisiciones";
         protected $fillable = [
         'RequisicionesId',
         'ClienteId',
         'UsuarioId',
         'Proyecto',
         'Fecha',
         'Servicio',
         'Deudas',
         'Seguridad',
         'Destino',
         'created_at',
         'updated_at',
         'Activo'];
    
}
