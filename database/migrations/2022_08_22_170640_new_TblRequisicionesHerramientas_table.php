<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NewTblRequisicionesHerramientasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TblRequisicionesHerramientas', function (Blueprint $table) {
            $table->increments('RequisicionesHerramientasId');
            $table->integer('RequisicionesId');
            $table->integer('HerramientaId');
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
        Schema::dropIfExists('TblRequisicionesHerramientas');
    }
}
