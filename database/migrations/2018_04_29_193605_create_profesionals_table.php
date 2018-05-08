<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfesionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesionals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->string('surname');
            $table->string('phone');
            $table->string('invitado');
            $table->integer('nameare_id')->unsigned();
            $table->foreign('nameare_id')->references('id')->on('areas')->onDelete('cascade');
            $table->integer('namecarre_id')->unsigned();
            $table->foreign('namecarre_id')->references('id')->on('carreras')->onDelete('cascade');
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
        Schema::drop('profesionals');
    }
}
