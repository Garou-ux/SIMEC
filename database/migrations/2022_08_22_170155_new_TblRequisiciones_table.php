<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NewTblRequisicionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TblRequisiciones', function (Blueprint $table) {
        //RequisicionesId, ClienteId, UsuarioId, Proyecto, Fecha, Servicio ,Deudas, Seguridad, Destino;
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
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TblRequisiciones');
    }
}
