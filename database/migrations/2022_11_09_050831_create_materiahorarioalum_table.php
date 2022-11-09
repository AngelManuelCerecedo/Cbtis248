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
        Schema::create('materiahorarioalum', function (Blueprint $table) {
            $table->string("Hora",45);
            $table->string("Dia",45);
            $table->unsignedBigInteger("id_Materia");
            $table->foreign("id_Materia")->references("id")->on("materia")->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger("id_HorarioAlum");
            $table->foreign("id_HorarioAlum")->references("id")->on("horarioalumno")->onDelete('cascade')->onUpdate('cascade');
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
