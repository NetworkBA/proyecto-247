<template>

    <div class="card">

            <div class="card-header">
              Lista de Jugadores
                <button class="btn btn-success btn-sm" type="button" data-toggle='modal' data-target='#modalCrear'>Nuevo Jugador</button>

                <!-- Modal -->
                  <div class="modal fade" id="modalCrear" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Crear Jugador</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                        <form>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputEmail4">Email</label>
                              <input type="email" class="form-control" id="inputEmail4">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputPassword4">Password</label>
                              <input type="password" class="form-control" id="inputPassword4">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputAddress">Address</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                          </div>
                          <div class="form-group">
                            <label for="inputAddress2">Address 2</label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputCity">City</label>
                              <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="form-group col-md-4">
                              <label for="inputState">State</label>
                              <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option>...</option>
                              </select>
                            </div>
                            <div class="form-group col-md-2">
                              <label for="inputZip">Zip</label>
                              <input type="text" class="form-control" id="inputZip">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="gridCheck">
                              <label class="form-check-label" for="gridCheck">
                                Check me out
                              </label>
                            </div>
                          </div>
                          <button type="submit" class="btn btn-primary">Sign in</button>
                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                          <button type="button" class="btn btn-primary">Crear Jugador</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Modal -->
            </div>

            <div class="card-body">
                <div class="row">


                </div>
                <div class="table-responsive" >
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Equipo</th>
                                <th>Liga</th>
                                <th>Acciones</th>

                            </tr>
                        </thead>
                        <tbody>
                              <tr v-for ="jugador in Jugadores" :key="jugador.id" >
                                  <td>{{jugador.name + ' ' + jugador.ApellidoP + ' '+ jugador.ApellidoM +  ''}}</td>
                                  <td></td>
                                  <td></td>
                                  <td>
                                    <button class="btn btn-info btn-sm" type="button">Detalles</button>
                                    <button class="btn btn-primary btn-sm" type="button">Editar</button>
                                    <button class="btn btn-danger btn-sm" type="button">Eliminar</button>
                                  </td>
                              </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td><strong>Nombre</strong></td>
                                <td><strong>Equipo</strong></td>
                                <td><strong>Liga</strong></td>
                                <td><strong>Acciones</strong></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-6 align-self-center">
                        <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
                    </div>

                </div>
            </div>
      </div>


</template>

<script>
    import datatable from 'datatables.net-bs4'
    export default {
        mounted() {
            console.log('Component Lista Jugadores Montada.')
            this.getListaJugadores()
            this.tabla()
        },
        data()
        {
          return{
          Jugadores: [],
          jugador:
          {
          id: '',
          name: '',
          ApellidoP: '',
          ApellidoM: '',
          email: '',
          FechaNacimiento: '',
          id_TipoUsuario: '',
          id_HistorialDeportivo: '',
          id_HistorialMedico: '',
          imagedeusuario: '',
          },
          }
        },
          methods:{
          tabla()
          {
            this.$nextTick(() => {
            $('#sampleTable').DataTable();
            });
          },
          getListaJugadores(){
        var urlEstud = "ListaJugadores";
        axios.get(urlEstud).then(response =>
        {
          this.Jugadores = response.data
        });
          }
    }
    }
</script>
