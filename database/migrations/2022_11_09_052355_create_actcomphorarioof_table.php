<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActcomphorarioofTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actcomphorarioof', function (Blueprint $table) {
            $table->unsignedBigInteger("id_ActComp");
            $table->foreign("id_ActComp")->references("id")->on("actividadcomp")->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger("id_HorarioAlum");
            $table->foreign("id_HorarioAlum")->references("id")->on("horarioalumno")->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('actcomphorarioof');
    }
}
