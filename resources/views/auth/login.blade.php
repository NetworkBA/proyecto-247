@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9 col-lg-12 col-xl-10">
            <div class="card shadow-lg o-hidden border-0 my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-flex">
                            <div class="flex-grow-1 bg-login-image" style="background-image: url(&quot;assets/img/dogs/image3.jpeg&quot;);"></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h4 class="text-dark mb-4">Bienvenido</h4>
                                </div>
                                <form method="POST" action="{{ route('login') }}">
                                  @csrf
                                    <div class="form-group">
                                      <input class="form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Correo Electronico" name="email">
                                    </div>
                                    <div class="form-group">
                                      <input class="form-control form-control-user" type="password" id="exampleInputPassword" placeholder="Contraseña" name="password">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <div class="form-check">
                                              <input class="form-check-input custom-control-input" type="checkbox" id="formCheck-1">
                                              <label class="form-check-label custom-control-label" for="formCheck-1">Recordarme</label></div>
                                        </div>
                                    </div><button class="btn btn-primary btn-block text-white btn-user" type="submit">Iniciar Sesión</button>

                                </form>
                                <div class="text-center"><a class="small" href="">¿Olvidaste tu Contraseña?</a></div>
                                <div class="text-center"><a class="small" href="register">Crear Cuenta</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/chart.min.js"></script>
<script src="assets/js/bs-init.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
<script src="assets/js/theme.js"></script>
@endsection
