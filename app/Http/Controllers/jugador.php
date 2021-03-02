<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\historial_deportivo;
use App\Models\historial_medico;



class jugador extends Controller
{
    public  function ListaJugadores()
    {
        $Jugadores = User::where('id_TipoUsuario','5')->get();

        return $Jugadores;
    }

          public function Crearjugador(Request $request)
          {
            $data = request()->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'ApellidoP' => ['required', 'string' ],
                'FechaNacimiento' => ['required', 'date'],

            ]);

            $historialdeportivo = new historial_deportivo;
            $historialdeportivo->save();
            $historialmedico = new historial_medico;
            $historialmedico->save();

            return User::create([
                'name' => $data['name'],
                'ApellidoP' => $data['ApellidoP'],
                'ApellidoM' => $request->ApellidoM,
                'FechaNacimiento' =>$data['FechaNacimiento'],
                'email' => $data['email'],
                'password' => Hash::make('patata12345678'),
                'id_TipoUsuario' => 5,
                'id_HistorialDeportivo' => $historialdeportivo['id'],
                'id_HistorialMedico' => $historialmedico['id'],
                'imagedeusuario' => 'assets/img/avatars/avatar5.jpeg',
            ]);
         }
    }
