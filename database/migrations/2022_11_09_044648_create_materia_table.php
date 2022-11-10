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
        Schema::create('materias', function (Blueprint $table) {
            $table->id();
            $table->string("Nombre",45);
            $table->integer("Horas_Sem");
            $table->unsignedBigInteger("especialidad_id");
            $table->foreign("especialidad_id")->references("id")->on("especialidads")->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger("grado_id");
            $table->foreign("grado_id")->references("id")->on("grados")->onDelete('cascade')->onUpdate('cascade');
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
