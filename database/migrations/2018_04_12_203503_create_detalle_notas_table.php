<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDetalleNotasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_notas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_cur')->unsigned()->default(0);
            $table->string('nombreCurso_cur_det');
            $table->string('codigoGrupo_gru_det');
            $table->string('nombreDocente_det');
            $table->string('codigoEstudiante_det');
            $table->string('nombreEstudiante_det');
            $table->decimal('nota1_det',8,2);
            $table->decimal('nota2_det',8,2);
            $table->decimal('nota3_det',8,2);
            $table->decimal('promedio_det',8,2);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('id_cur')->references('id')->on('cursos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('detalle_notas');
    }
}
