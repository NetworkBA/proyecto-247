<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class entrenadores_controller extends Controller
{
    public function ListaEntrenadores()
    {
      return User::where('users.id_TipoUsuario','=','2','AND','users.id_Equipo','=','','OR','users.id_Equipo','=','1')->get();

    }
}
