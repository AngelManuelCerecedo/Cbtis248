<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorariooficialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horariooficials', function (Blueprint $table) {
            $table->id();
            $table->integer("Horas_Tot");
            $table->integer("Horas_Tota");
            $table->integer("Sub_tota");
            $table->integer("Horas_Totb");
            $table->integer("Sub_Totb");
            $table->integer("Total");
            $table->text("Observaciones");
            $table->date("Fecha");
            $table->unsignedBigInteger("ciclo_id");
            $table->foreign("ciclo_id")->references("id")->on("cicloescolars")->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('horariooficial');
    }
}
