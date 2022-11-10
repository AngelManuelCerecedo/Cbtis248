<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfesoractcompTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividadcomp_profesor', function (Blueprint $table) {
            $table->unsignedBigInteger("actividadcomp_id");
            $table->foreign("actividadcomp_id")->references("id")->on("actividadcomps")->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger("profesor_id");
            $table->foreign("profesor_id")->references("id")->on("profesors")->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('profesoractcomp');
    }
}
