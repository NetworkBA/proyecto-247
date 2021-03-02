<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('ApellidoP');
            $table->string('ApellidoM')->nullable;
            $table->date('FechaNacimiento');
            $table->integer('id_TipoUsuario')->unsigned();
            $table->integer('id_HistorialDeportivo')->unsigned();
            $table->integer('id_HistorialMedico')->unsigned();
            $table->integer('id_Equipo')->unsigned()->nullable();;
            $table->string('imagedeusuario');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('equipo')->default(0)->change();
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('id_TipoUsuario')->references('id')->on('TipodeUsuarios')->onDelete('cascade');
            $table->foreign('id_HistorialDeportivo')->references('id')->on('HistorialDeportivo')->onDelete('cascade');
            $table->foreign('id_HistorialMedico')->references('id')->on('HistorialMedico')->onDelete('cascade');
            $table->foreign('id_Equipo')->references('id')->on('Equipos')->onDelete('set null');;
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
}
