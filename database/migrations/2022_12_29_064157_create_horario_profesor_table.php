<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorarioProfesorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horario__profesors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("dia_id");
            $table->foreign("dia_id")->references("id")->on("dias")->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger("hora_id");
            $table->foreign("hora_id")->references("id")->on("horas")->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger("materia_id")->nullable();
            $table->foreign("materia_id")->references("id")->on("materias")->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger("actividad_id")->nullable();
            $table->foreign("actividad_id")->references("id")->on("act_comps")->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger("profesor_id")->nullable();
            $table->foreign("profesor_id")->references("id")->on("profesors")->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('horario_profesor');
    }
}
