<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\equipo;


class equipos extends Controller
{
    public function ListaEquipos()
    {
        return equipo::all();
    }
}
