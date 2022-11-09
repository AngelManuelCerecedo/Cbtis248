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
        Schema::create('profesoractcomp', function (Blueprint $table) {
            $table->unsignedBigInteger("id_ActComp");
            $table->foreign("id_ActComp")->references("id")->on("actividadcomp")->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger("id_Profesor");
            $table->foreign("id_Profesor")->references("id")->on("profesor")->onDelete('cascade')->onUpdate('cascade');
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
