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
        Schema::create('horarioalumno', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_Ciclo");
            $table->foreign("id_Ciclo")->references("id")->on("cicloescolar")->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger("id_Grupo");
            $table->foreign("id_Grupo")->references("id")->on("grupo")->onDelete('cascade')->onUpdate('cascade');
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
