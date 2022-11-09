<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActividadcomphorarioprofTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividadcomphorarioprof', function (Blueprint $table) {
            $table->unsignedBigInteger("id_ActComp");
            $table->foreign("id_ActComp")->references("id")->on("actividadcomp")->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger("id_HorarioProf");
            $table->foreign("id_HorarioProf")->references("id")->on("horarioprofesor")->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('actividadcomphorarioprof');
    }
}
