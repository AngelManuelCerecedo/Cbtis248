<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumno', function (Blueprint $table) {
            $table->id();
            $table->string("Curp",18)->unique();
            $table->string("Nombre",45);
            $table->string("ApPaterno",45);
            $table->string("ApMaterno",45);
            $table->string("Correo_Electronico",45);
            $table->string("Estado_Civil",15);
            $table->string("Lugar_Nacimiento",45);
            $table->string("Lugar_Radica",45);
            $table->string("Localidad",45);
            $table->string("Codigo_Postal",45);
            $table->string("Calle_Num",45);
            $table->string("Colonia",45);
            $table->string("Telefono_Fijo",10);
            $table->string("Celular_Alum",10);
            $table->string("Numero_Seguro",11);
            $table->string("Tipo_Sangre",5);
            $table->date("Año_Fin");
            $table->string("Promedio",45);
            $table->unsignedBigInteger("Clave_Secu");
            $table->foreign("Clave_Secu")->references("id")->on("secundaria")->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger("id_Padre");
            $table->foreign("id_Padre")->references("id")->on("padre")->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger("Clave_Grupo");
            $table->foreign("Clave_Grupo")->references("id")->on("grupo")->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger("id_Esp");
            $table->foreign("id_Esp")->references("id")->on("especialidad")->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger("id_Grado");
            $table->foreign("id_grado")->references("id")->on("grado")->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('alumno');
    }
}
