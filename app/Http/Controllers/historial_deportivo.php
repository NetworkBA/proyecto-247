<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\historial_deportivo;


class historial_deportivo extends Controller
{
    public function create()
    {
      historial_deportivo::create();
    }
}
