<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nota', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            $table->string('detalle');
            $table->string('descripcion');
            $table->integer('valor');
            $table->unsignedInteger('idPersona');
            $table->unsignedInteger('idPeriodo');

            $table->foreign('idPeriodo')->references('id')->on('perido');
            $table->foreign('idPersona')->references('id')->on('persona');
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
        Schema::dropIfExists('nota');
    }
}
