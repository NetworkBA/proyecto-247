<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Equipos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('Equipos', function (Blueprint $table) {
        $table->increments('id');
          $table->string('Nombre');
          $table->integer('id_Entrenador');
          $table->integer('id_Liga')->unsigned();
          $table->rememberToken();
          $table->timestamps();

          $table->foreign('id_Liga')->references('id')->on('Liga')->onDelete('cascade');

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('Equipo');

    }
}
