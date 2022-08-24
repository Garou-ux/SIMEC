<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NewTblRequisicionesDetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TblRequisicionesDet', function (Blueprint $table) {
        //select RequisicionesDetId, RequisicionesId, ConceptoId, Unidad, Cantidad, PU, Total, Observacion;
            $table->increments('RequisicionesDetId');
            $table->integer('RequisicionesId');
            $table->integer('ConceptoId');
            $table->string('Unidad', 100);
            $table->decimal('Cantidad', $precision = 8, $scale = 2);
            $table->decimal('PU', $precision = 8, $scale = 2);
            $table->decimal('Total', $precision = 8, $scale = 2);
            $table->string('Observacion', 200);
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
        Schema::dropIfExists('TblRequisicionesDet');
    }
}
