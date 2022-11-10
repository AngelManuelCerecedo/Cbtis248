<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSecundariaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('secundarias', function (Blueprint $table) {
            $table->id();
            $table->string("ClaveSecu")->unique();
            $table->string("Nombre",45);
            $table->string("Modalidad",45);
            $table->string("Regimen",45);
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
        Schema::dropIfExists('secundaria');
    }
}
