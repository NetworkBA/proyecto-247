<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function jugadores()
    {
      if (Auth::user()->id_TipoUsuario == 1) {

          $Jugadores = User::where('id_TipoUsuario','5')->get();
         return view('administrador.jugadores',$Jugadores);
      }
    }
}
