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
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->string("Numero_Control",10)->unique();
            $table->string("Estatus",20);
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
            $table->unsignedBigInteger("secundaria_id");
            $table->foreign("secundaria_id")->references("id")->on("secundarias")->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger("padre_id");
            $table->foreign("padre_id")->references("id")->on("padres")->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger("grupo_id");
            $table->foreign("grupo_id")->references("id")->on("grupos")->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger("especialidad_id");
            $table->foreign("especialidad_id")->references("id")->on("especialidads")->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger("grado_id");
            $table->foreign("grado_id")->references("id")->on("grados")->onDelete('cascade')->onUpdate('cascade');
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
