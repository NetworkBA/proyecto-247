<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

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
      'id' => 0,
    ]);
    DB::table('HistorialMedico')->insert([
      'id' => 0,
    ]);
    DB::table('users')->insert([
     'name' => 'Ninguno', 'ApellidoP' => 'Ninguno','ApellidoM' => 'Ninguno','FechaNacimiento' => Carbon::parse('2000-01-01'),'id_TipoUsuario' => 2,
     'id_HistorialDeportivo' => 0,'id_HistorialMedico' => 0,'email' => 'ninguno@gmail.com','password' => 'patata12',
   ]);


    }
}
