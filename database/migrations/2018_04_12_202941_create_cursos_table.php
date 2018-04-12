<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCursosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_seg')->unsigned()->default(0);
            $table->integer('id_area')->unsigned()->default(0);
            $table->integer('id_gru')->unsigned()->default(0);
            $table->string('nombre_cur');
            $table->string('descripcion_cur');
            $table->string('estado_seg');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('id_seg')->references('id')->on('seguimientos');
            $table->foreign('id_area')->references('id')->on('areas');
            $table->foreign('id_gru')->references('id')->on('grupos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cursos');
    }
}
