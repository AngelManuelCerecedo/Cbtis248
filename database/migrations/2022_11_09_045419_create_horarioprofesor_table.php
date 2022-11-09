<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorarioprofesorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horarioprofesor', function (Blueprint $table) {
            $table->id();
            $table->integer("Horas_FG");
            $table->integer("Horas_Desc");
            $table->string("Clave_Pre",45);
            $table->unsignedBigInteger("id_Ciclo");
            $table->foreign("id_Ciclo")->references("id")->on("cicloescolar")->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger("id_Materia");
            $table->foreign("id_Materia")->references("id")->on("materia")->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('horarioprofesor');
    }
}
