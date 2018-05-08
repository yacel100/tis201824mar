<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsignacionTribunalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignacion_tribunal', function (Blueprint $table) {
            $table->increments('id_asignacion_tribunal');
            $table->date('fecha_asignacion');

            $table->integer('id_proyecto')->unsigned();
            $table->foreign('id_proyecto')->references('id')->on('proyectos')->onDelete('cascade');
            $table->integer('id_proyectos')->unsigned();
            $table->foreign('id_proyectos')->references('id')->on('proyectos')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asignacion_tribunal');
    }
}
