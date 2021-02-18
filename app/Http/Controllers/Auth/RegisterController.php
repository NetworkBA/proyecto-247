<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\historial_deportivo;
use App\Models\historial_medico;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = 'perfil';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:5', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $historialdeportivo = new historial_deportivo;
        $historialdeportivo->save();
        $historialmedico = new historial_medico;
        $historialmedico->save();

        return User::create([
            'name' => $data['name'],
            'ApellidoP' => $data['ApellidoP'],
            'ApellidoM' => $data['ApellidoM'],
            'FechaNacimiento' =>$data['date'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'id_TipoUsuario' => 5,
            'id_HistorialDeportivo' => $historialdeportivo['id'],
            'id_HistorialMedico' => $historialmedico['id'],
        ]);
    }
}
