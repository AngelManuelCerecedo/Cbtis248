<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActividadcompTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('act_comps', function (Blueprint $table) {
            $table->id();
            $table->string("Nombre",45);
            $table->integer("HoraSem");
            $table->unsignedBigInteger("profesor_id")->nullable();
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
        Schema::dropIfExists('actividadcomp');
    }
}
