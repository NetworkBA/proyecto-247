<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TiposUsuarios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('TipodeUsuarios')->insert([
        'TipodeUsuarios' => 'Administrador',
    ]);

    DB::table('TipodeUsuarios')->insert([
      'TipodeUsuarios' => 'Entrenador',
    ]);
    DB::table('TipodeUsuarios')->insert([
      'TipodeUsuarios' => 'Auxiliar',
    ]);
    DB::table('TipodeUsuarios')->insert([
      'TipodeUsuarios' => 'Medico',
    ]);
    DB::table('TipodeUsuarios')->insert([
      'TipodeUsuarios' => 'Jugador',
    ]);
    DB::table('TipodeUsuarios')->insert([
      'TipodeUsuarios' => 'Jugador',
    ]);
    DB::table('HistorialDeportivo')->insert([
      'id' => 1,
    ]);
    DB::table('HistorialMedico')->insert([
      'id' => 1,
    ]);
    DB::table('HistorialDeportivo')->insert([
      'id' => 2,
    ]);
    DB::table('HistorialMedico')->insert([
      'id' => 2,
    ]);
    DB::table('Liga')->insert([
      'Nombre' => 'a',
    ]);
    DB::table('users')->insert([
     'name' => 'Ninguno', 'ApellidoP' => 'Ninguno','ApellidoM' => 'Ninguno','FechaNacimiento' => Carbon::parse('2000-01-01'),'id_TipoUsuario' => 2,
     'id_HistorialDeportivo' => 1,'id_HistorialMedico' => 1,'email' => 'ninguno@gmail.com','password' => Hash::make('patata12345678'),'imagedeusuario' => 'ninguno',
    ]);
    DB::table('users')->insert([
     'name' => 'Entrenador', 'ApellidoP' => 'Ninguno','ApellidoM' => 'Ninguno','FechaNacimiento' => Carbon::parse('2000-01-01'),'id_TipoUsuario' => 2,
     'id_HistorialDeportivo' => 2,'id_HistorialMedico' => 2,'email' => 'entrenador@gmail.com','password' => Hash::make('patata12345678'),'imagedeusuario' => 'ninguno',
    ]);
    DB::table('Equipos')->insert([
      'Nombre' => 'Ninguno','id_Entrenador' => 1,'id_Liga' => 1,
    ]);
    DB::table('users')->insert([
     'name' => 'admi', 'ApellidoP' => 'Ninguno','ApellidoM' => 'Ninguno','FechaNacimiento' => Carbon::parse('2000-01-01'),'id_TipoUsuario' => 1,
     'id_HistorialDeportivo' => 1,'id_HistorialMedico' => 1,'email' => 'admi@gmail.com','password' => Hash::make('patata12345678'),'imagedeusuario' => 'ninguno',
    ]);

    }
}
