<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorarioprofesorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horarioprofesors', function (Blueprint $table) {
            $table->id();
            $table->integer("Horas_FG");
            $table->integer("Horas_Desc");
            $table->string("Clave_Pre",45);
            $table->unsignedBigInteger("ciclo_id");
            $table->foreign("ciclo_id")->references("id")->on("ciclo_escolars")->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('horarioprofesor');
    }
}
