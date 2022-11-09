<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMateriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materia', function (Blueprint $table) {
            $table->id();
            $table->string("Nombre",45);
            $table->integer("Horas_Sem");
            $table->unsignedBigInteger("id_Esp");
            $table->foreign("id_Esp")->references("id")->on("especialidad")->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger("id_Grado");
            $table->foreign("id_Grado")->references("id")->on("grado")->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('materia');
    }
}
