<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class jugador extends Controller
{
    public  function ListaJugadores()
    {
        $Jugadores = User::where('id_TipoUsuario','5')->get();

        return $Jugadores;
    }
}
