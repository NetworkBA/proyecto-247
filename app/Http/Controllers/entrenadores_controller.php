<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class entrenadores_controller extends Controller
{
    public function ListaEntrenadores()
    {
      return User::select('users.id','users.name','users.ApellidoP','users.ApellidoM')->rightJoin('Equipos','users.id','=','Equipos.id_Entrenador')->where('users.id_TipoUsuario','=','2')->get();

    }
}
