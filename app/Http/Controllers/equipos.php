<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\equipo;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

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

    public function Crearequipo(Request $request)
    {
      $data = request()->validate([
          'name' => ['required', 'string', 'max:255'],
          'id_Liga' => ['required', 'numeric'],
          'id_Entrenador' => ['required', 'numeric' ],
      ]);

      $equipo = new equipo();
      $equipo->Nombre = $data['name'];
      $equipo->id_Entrenador = $data['id_Entrenador'];
      $equipo->id_Liga = $data['id_Liga'];
      $equipo->save();

      $entrendador = User::find($data['id_Entrenador']);
      $entrendador->id_Equipo = $equipo->id;
      $entrendador->save();

      return $equipo;


    }
}
