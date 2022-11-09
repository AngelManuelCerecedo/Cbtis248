<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncidenciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incidencia', function (Blueprint $table) {
            $table->id();
            $table->date("Fecha");
            $table->text("Descripcion");
            $table->unsignedBigInteger("id_Ciclo");
            $table->foreign("id_Ciclo")->references("id")->on("cicloescolar")->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger("id_Alumno");
            $table->foreign("id_Alumno")->references("id")->on("alumno")->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger("id_Admin");
            $table->foreign("id_Admin")->references("id")->on("administrativo")->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('incidencia');
    }
}
