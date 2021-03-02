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
        return equipo::all();
    }

    public function ListaLigas()
    {
        return ligamodel::all();
    }
}
