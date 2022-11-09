<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrupoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupo', function (Blueprint $table) {
            $table->id();
            $table->string("Clave_Grupo",45);
            $table->string("Turno",45);
            $table->string("Especialidad",45);
            $table->string("Salon",45);
            $table->unsignedBigInteger("id_grado");
            $table->foreign("id_grado")->references("id")->on("grado")->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger("id_ciclo");
            $table->foreign("id_ciclo")->references("id")->on("cicloescolar")->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('grupo');
    }
}
