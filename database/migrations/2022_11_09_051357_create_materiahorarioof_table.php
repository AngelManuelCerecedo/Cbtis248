<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMateriahorarioofTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horariooficial_materia', function (Blueprint $table) {
            $table->string("Hora",45);
            $table->string("Dia",45);
            $table->unsignedBigInteger("materia_id");
            $table->foreign("materia_id")->references("id")->on("materias")->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger("horariooficial_id");
            $table->foreign("horariooficial_id")->references("id")->on("horariooficials")->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('materiahorarioof');
    }
}
