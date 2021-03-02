<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\equipo;
use App\Models\ligamodel;
use Illuminate\Support\Facades\Auth;


class equipos extends Controller
{
    public function ListaEquipos()
    {

        $data =  equipo::select('Equipos.id','Equipos.Nombre','users.name','users.ApellidoP','users.ApellidoM','Liga.Nombre as LigaNombre' )
        ->join('users','Equipos.id_Entrenador','=','users.id')->join('Liga','Equipos.id_Liga','=','Liga.id')->get();

        return $data;
    }

    public function ListaLigas()
    {
        return ligamodel::all();
    }
}
