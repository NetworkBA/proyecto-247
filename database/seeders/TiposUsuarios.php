<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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


    }
}
