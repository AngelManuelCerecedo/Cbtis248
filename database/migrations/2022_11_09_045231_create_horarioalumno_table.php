<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorarioalumnoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horarioalumnos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("ciclo_id");
            $table->foreign("ciclo_id")->references("id")->on("cicloescolars")->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger("grupo_id");
            $table->foreign("grupo_id")->references("id")->on("grupos")->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('horarioalumno');
    }
}
