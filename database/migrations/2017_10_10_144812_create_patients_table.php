<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('cc');
            $table->string('telfijo');
            $table->string('cel');
            $table->string('cel2');
            $table->string('direccion');
            $table->string('gruposan');
            $table->string('rh');
            $table->string('alergias');
            $table->string('email');
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
        Schema::dropIfExists('patients');
    }
}
