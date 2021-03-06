@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <h3 class="text-dark mb-4">Perfil</h3>
    <div class="row mb-3">
        <div class="col-lg-4">
            <div class="card mb-3">
                <div class="card-body text-center shadow"><img class="rounded-circle mb-3 mt-4" src="{{ Auth::user()->imagedeusuario }}" width="160" height="160" />
                    <div class="mb-3"><button class="btn btn-primary btn-sm" type="button">Cambiar Foto</button></div>
                </div>
            </div>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="text-primary font-weight-bold m-0">Habilidades</h6>
                </div>
                <div class="card-body">
                    <h4 class="small font-weight-bold">Dominación balon parado<span class="float-right">20%</span></h4>
                    <div class="progress progress-sm mb-3">
                        <div class="progress-bar bg-danger" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"><span class="sr-only">20%</span></div>
                    </div>
                    <h4 class="small font-weight-bold">Dominación balon en movimiento<span class="float-right">40%</span></h4>
                    <div class="progress progress-sm mb-3">
                        <div class="progress-bar bg-warning" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"><span class="sr-only">40%</span></div>
                    </div>
                    <h4 class="small font-weight-bold">Concentración<span class="float-right">60%</span></h4>
                    <div class="progress progress-sm mb-3">
                        <div class="progress-bar bg-primary" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"><span class="sr-only">60%</span></div>
                    </div>
                    <h4 class="small font-weight-bold">Actitud deportiva<span class="float-right">80%</span></h4>
                    <div class="progress progress-sm mb-3">
                        <div class="progress-bar bg-info" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"><span class="sr-only">80%</span></div>
                    </div>
                    <h4 class="small font-weight-bold">Velocidad<span class="float-right"></span></h4>
                    <div class="progress progress-sm mb-3">
                        <div class="progress-bar bg-success" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"><span class="sr-only">100%</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="row mb-3 d-none">
                <div class="col">
                    <div class="card text-white bg-primary shadow">
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col">
                                    <p class="m-0">Peformance</p>
                                    <p class="m-0"><strong>65.2%</strong></p>
                                </div>
                                <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                            </div>
                            <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i> 5% since last month</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-white bg-success shadow">
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col">
                                    <p class="m-0">Peformance</p>
                                    <p class="m-0"><strong>65.2%</strong></p>
                                </div>
                                <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                            </div>
                            <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i> 5% since last month</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card shadow mb-3">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 font-weight-bold">Datos Generales</p>
                        </div>
                        <div class="card-body">
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group">
                                          <label for="username"><strong>Nombre</strong></label>
                                          <input class="form-control" type="text" placeholder="{{Auth()->user()->name}}" name="username" disabled />
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                          <label for="email"><strong>Correo Electronico</strong>
                                        </label><input class="form-control" type="email" placeholder="{{Auth()->user()->email}}" name="email" disabled/>
                                      </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group"><label for="first_name"><strong>Apellido Paterno</strong>
                                        </label><input class="form-control" type="text" placeholder="{{Auth()->user()->ApellidoP}}" name="-ApellidoP" disabled/>
                                      </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group"><label for="last_name"><strong>Apellido Materno</strong>
                                        </label><input class="form-control" type="text" placeholder="{{Auth()->user()->ApellidoM}}" name="ApellidoM" disabled/>
                                      </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                  <button class="btn btn-primary btn-sm" type="submit" data-toggle="modal" data-target="#create" >Editar Datos Generales</button></div>
                        </div>
                        <div class="modal fade" id="create">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal">Cerrar
                                          <span>×</span>
                                      </button>

                                  </div>
                                  <div class="modal-body">
                                    <div class="card-body">
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group">
                                                      <label for="username"><strong>Nombre</strong></label>
                                                      <input class="form-control" type="text" placeholder="{{Auth()->user()->name}}" name="username"  />
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                      <label for="email"><strong>Correo Electronico</strong>
                                                    </label><input class="form-control" type="email" placeholder="{{Auth()->user()->email}}" name="email" disabled/>
                                                  </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group"><label for="first_name"><strong>Apellido Paterno</strong>
                                                    </label><input class="form-control" type="text" placeholder="{{Auth()->user()->ApellidoP}}" name="-ApellidoP" />
                                                  </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group"><label for="last_name"><strong>Apellido Materno</strong>
                                                    </label><input class="form-control" type="text" placeholder="{{Auth()->user()->ApellidoM}}" name="ApellidoM" />
                                                  </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group"><label for="first_name"><strong>Fecha Nacimiento</strong>
                                                    </label><input class="form-control" type="date" />
                                                  </div>
                                                </div>
                                            </div>

                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                      <input type="submit" class="btn btn-primary" value="Guardar">
                                  </div>
                              </div>
                          </div>
                      </div>

                    </div>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 font-weight-bold">Datos de Equipo</p>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                  <label for="address">
                                   <strong>Equipo</strong>
                                  </label>
                                  <input type="text" class="form-control" placeholder="" name="address" />
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group">
                                          <label for="city">
                                            <strong>Ciudad</strong>
                                          </label><input type="text" class="form-control" placeholder="" name="" />
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                          <label for="country">
                                            <strong>Estado</strong>
                                          </label>
                                          <input type="text" class="form-control" placeholder="" name="" />
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card shadow mb-5">
        <div class="card-header py-3"></div>
        <div class="card-body"></div>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</div>
@endsection
