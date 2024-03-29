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
            $table->string("Nombre",100);
            $table->integer("Horas_Sem");
            $table->string("Tipo",45)->nullable();
            $table->string("Horas_Reg",45)->nullable();
            $table->unsignedBigInteger("especialidad_id")->nullable();
            $table->foreign("especialidad_id")->references("id")->on("especialidads")->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger("grado_id")->nullable();
            $table->foreign("grado_id")->references("id")->on("grados")->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger("profesor_id")->nullable();
            $table->foreign("profesor_id")->references("id")->on("users")->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger("grupo_id")->nullable();
            $table->foreign("grupo_id")->references("id")->on("grupos")->onDelete('cascade')->onUpdate('cascade');
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
