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
        Schema::create('actividadcomp_horarioprofesor', function (Blueprint $table) {
            $table->unsignedBigInteger("actividadcomp_id");
            $table->foreign("actividadcomp_id")->references("id")->on("actividadcomps")->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger("horarioprofesor_id");
            $table->foreign("horarioprofesor_id")->references("id")->on("horarioprofesors")->onDelete('cascade')->onUpdate('cascade');
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
