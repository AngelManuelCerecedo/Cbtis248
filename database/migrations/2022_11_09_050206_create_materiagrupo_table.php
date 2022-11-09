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
        Schema::create('materiagrupo', function (Blueprint $table) {
            $table->unsignedBigInteger("id_Grupo");
            $table->foreign("id_Grupo")->references("id")->on("grupo")->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('materiagrupo');
    }
}
