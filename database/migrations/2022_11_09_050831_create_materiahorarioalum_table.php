<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMateriahorarioalumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horarioalumno_materia', function (Blueprint $table) {
            $table->string("Hora",45);
            $table->string("Dia",45);
            $table->unsignedBigInteger("materia_id");
            $table->foreign("materia_id")->references("id")->on("materias")->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger("horarioalumno_id");
            $table->foreign("horarioalumno_id")->references("id")->on("horarioalumnos")->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('materiahorarioalum');
    }
}
