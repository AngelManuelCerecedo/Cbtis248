<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrupoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupos', function (Blueprint $table) {
            $table->id();
            $table->string("Clave_Grupo",45);
            $table->string("Salon",45);
            $table->integer("TotAL")->nullable();
            $table->integer("ALR")->nullable();
            $table->string("Estatus",45)->nullable();
            $table->unsignedBigInteger("grado_id")->nullable();
            $table->foreign("grado_id")->references("id")->on("grados")->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger("ciclo_id")->nullable();
            $table->foreign("ciclo_id")->references("id")->on("ciclo_escolars")->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger("especialidad_id")->nullable();
            $table->foreign("especialidad_id")->references("id")->on("especialidads")->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('grupos');
    }
}
