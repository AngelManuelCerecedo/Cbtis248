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
        Schema::create('actividadcomp_horariooficial', function (Blueprint $table) {
            $table->unsignedBigInteger("actividadcomp_id");
            $table->foreign("actividadcomp_id")->references("id")->on("act_comps")->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger("horariooficial_id");
            $table->foreign("horariooficial_id")->references("id")->on("horariooficials")->onDelete('cascade')->onUpdate('cascade');
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
