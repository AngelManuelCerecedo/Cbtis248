<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('password2')->nullable();
            $table->rememberToken();

            $table->string("Curp",18)->unique();
            $table->string("Nombre",45);
            $table->string("ApPaterno",45);
            $table->string("ApMaterno",45);
            $table->string("Rfc",13)->unique();
            $table->string("Clave_Cobro",45);
            $table->string("Puesto",45);
            $table->string("Perfil",45);
            $table->date("Fecha_ingreso");
            $table->date("Fecha_ingreso_SEP");
            $table->date("Fecha_ingreso_DGETI");
            $table->string("Categoria",45);
            $table->string("Numero_Tarjeta",45);
            $table->integer("Horas_Nom");
            $table->string("Numero_Plaza",45);
            $table->text("Observaciones");
            $table->string("Estatus",45);

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
        Schema::dropIfExists('users');
    }
};
