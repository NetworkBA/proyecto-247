@extends('layouts.app')

@section('content')
<body class="bg-gradient-primary">
    <div class="container" >
        <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-flex">
                        <div class="flex-grow-1 bg-register-image" style="background-image: url('assets/img/dogs/image2.jpeg');"></div>
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h4 class="text-dark mb-4">Crear Cuenta</h4>
                            </div>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                  <div class="form-group">
                                    <input class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="Apellido Paterno" name="ApellidoP" />
                                  </div>
                                  <div class="form-group">
                                    <input class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="Apellido Materno" name="ApellidoM" />
                                  </div>
                                  <div class="form-group">
                                    <input class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="Nombre" name="Nombre" />
                                  </div>
                                <div class="form-group">
                                  <input class="form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Correo Electronico" name="email" />
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                      <input class="form-control form-control-user" type="password" id="examplePasswordInput" placeholder="Contraseña" name="password" />
                                    </div>
                                    <div class="col-sm-6">
                                      <input class="form-control form-control-user" type="password" id="exampleRepeatPasswordInput" placeholder="Repetir Constraseña" name="password_confirmation" />
                                    </div>
                                </div>

                                <button class="btn btn-primary btn-block text-white btn-user" type="submit">Registrar Cuenta</button>


                            </form>
                            <div class="text-center"><a class="small" href="forgot-password.html">Recuperar Contraseña</a></div>
                            <div class="text-center"><a class="small" href="login.html">¿Usted ya esta registrado?</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

@endsection
