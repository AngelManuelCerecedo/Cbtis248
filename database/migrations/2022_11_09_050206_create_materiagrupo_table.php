<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMateriagrupoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupo_materia', function (Blueprint $table) {
            $table->unsignedBigInteger("grupo_id");
            $table->foreign("grupo_id")->references("id")->on("grupos")->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger("materia_id");
            $table->foreign("materia_id")->references("id")->on("materias")->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('materiagrupo');
    }
}
