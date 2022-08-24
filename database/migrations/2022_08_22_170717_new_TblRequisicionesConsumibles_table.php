<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NewTblRequisicionesConsumiblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TblRequisicionesConsumibles', function (Blueprint $table) {
            $table->increments('RequisicionesConsumiblesId');
            $table->integer('RequisicionesId');
            $table->integer('ConsumibleId');
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
        Schema::dropIfExists('TblRequisicionesConsumibles');
    }
}
