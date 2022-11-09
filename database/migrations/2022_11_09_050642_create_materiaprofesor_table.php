<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMateriaprofesorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materiaprofesor', function (Blueprint $table) {
            $table->unsignedBigInteger("id_Materia");
            $table->foreign("id_Materia")->references("id")->on("materia")->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger("id_Profesor");
            $table->foreign("id_Profesor")->references("id")->on("profesor")->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('materiaprofesor');
    }
}
