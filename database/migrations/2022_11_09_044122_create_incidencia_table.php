<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncidenciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incidencias', function (Blueprint $table) {
            $table->id();
            $table->date("Fecha");
            $table->text("Descripcion");
            $table->date("Fecha_C")->nullable();
            $table->text("Hora_C")->nullable();
            $table->unsignedBigInteger("ciclo_id");
            $table->foreign("ciclo_id")->references("id")->on("ciclo_escolars")->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger("alumno_id")->nullable();
            $table->foreign("alumno_id")->references("id")->on("alumnos")->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger("grupo_id")->nullable();
            $table->foreign("grupo_id")->references("id")->on("grupos")->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger("user_id");
            $table->foreign("user_id")->references("id")->on("users")->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('incidencia');
    }
}
