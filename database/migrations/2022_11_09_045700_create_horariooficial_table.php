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
        Schema::create('horariooficial', function (Blueprint $table) {
            $table->id();
            $table->integer("Horas_Tot");
            $table->integer("Horas_Tota");
            $table->integer("Sub_tota");
            $table->integer("Horas_Totb");
            $table->integer("Sub_Totb");
            $table->integer("Total");
            $table->text("Observaciones");
            $table->date("Fecha");
            $table->unsignedBigInteger("id_Ciclo");
            $table->foreign("id_Ciclo")->references("id")->on("cicloescolar")->onDelete('cascade')->onUpdate('cascade');
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
