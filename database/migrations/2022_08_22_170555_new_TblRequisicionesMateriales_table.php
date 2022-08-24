<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NewTblRequisicionesMaterialesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TblRequisicionesMateriales', function (Blueprint $table) {
        //select RequisicionesMaterialesId, RequisicionId, MaterialId; #relacionada con materiales y requisiciones
            $table->increments('RequisicionesMaterialesId');
            $table->integer('RequisicionesId');
            $table->integer('MaterialId');
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
        Schema::dropIfExists('TblRequisicionesMateriales');
    }
}
