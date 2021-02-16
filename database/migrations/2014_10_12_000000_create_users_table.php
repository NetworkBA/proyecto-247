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
            $table->id();
            $table->string('name');
            $table->string('ApellidoP');
            $table->string('ApellidoM')->nullable;
            $table->date('FechaNacimiento');
            $table->integer('id_TipoUsuario');
            $table->integer('id_HistorialDeportivo');
            $table->integer('id_HistorialMedico');
            $table->integer('id_Equipo');
            $table->string('imagedeusuario');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
}
