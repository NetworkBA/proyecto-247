<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class entrenadores_controller extends Controller
{
    public function ListaEntrenadores()
    {
      return User::select('users.id','users.name','users.ApellidoP','users.ApellidoM')
      ->where('users.id_TipoUsuario','=','2')->where('users.id','>',1)->whereNull('users.id_Equipo')->get();

    }
}
