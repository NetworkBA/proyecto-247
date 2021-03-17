<template>

    <div class="card">

            <div class="card-header">
              Lista de Jugadores
                <button class="btn btn-success btn-sm" type="button" data-toggle='modal'  @click="abrirCrear">Nuevo Jugador</button>

                <!-- Modal -->
                  <div class="modal" id="modalCrear" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">{{titulo}}</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                        <form>

                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputEmail4">Correo Electronico</label>
                              <input type="email" class="form-control" id="inputEmail4" v-model="Crearjugador.email">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputPassword4">Contraseña</label>
                              <input type="password" class="form-control" id="inputPassword4" value="123456789" readonly>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="inputAddress">Nombre</label>
                            <input type="text" class="form-control" id="name" placeholder="Miguel Jesus" v-model="Crearjugador.name">
                          </div>

                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputEmail4">Apellido Paterno</label>
                              <input type="text" class="form-control" id="ApellidoP" v-model="Crearjugador.ApellidoP">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputPassword4">Apellido Materno</label>
                              <input type="text" class="form-control" id="ApellidoM" v-model="Crearjugador.ApellidoM">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="inputAddress">Fecha de Nacimiento</label>
                            <input class="form-control" type="date" value="2011-08-19" id="FechaNacimiento" v-model="Crearjugador.FechaNacimiento">
                          </div>

                          <div class="form-group">
                            <label for="exampleFormControlSelect1">Equipo</label>
                            <select class="form-control" id="exampleFormControlSelect1" v-model="Crearjugador.id_Equipo">
                                <option v-for="equipo in Equipos" :value="equipo.id">{{equipo.Nombre}}</option>
                            </select>
                          </div>

                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                          <button type="button" class="btn btn-primary" @click.prevent="crear" v-if="btnCrear">Crear Jugador</button>
                          <button type="button" class="btn btn-primary" @click.prevent="guardar" v-if="btnEditar">Guardar Jugador</button>

                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Modal -->

                  <!-- Modal -->
                    <div class="modal" id="modalBorrar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">{{titulo}}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                          <form>

                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="inputEmail4">Correo Electronico</label>
                                <input type="email" class="form-control" id="inputEmail4" v-model="Crearjugador.email" readonly>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputPassword4">Contraseña</label>
                                <input type="password" class="form-control" id="inputPassword4" value="123456789" readonly>
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="inputAddress">Nombre</label>
                              <input type="text" class="form-control" id="name" placeholder="Miguel Jesus" v-model="Crearjugador.name" readonly>
                            </div>

                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="inputEmail4">Apellido Paterno</label>
                                <input type="text" class="form-control" id="ApellidoP" v-model="Crearjugador.ApellidoP" readonly>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputPassword4">Apellido Materno</label>
                                <input type="text" class="form-control" id="ApellidoM" v-model="Crearjugador.ApellidoM" readonly>
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="inputAddress">Fecha de Nacimiento</label>
                              <input class="form-control" type="date" value="2011-08-19" id="FechaNacimiento" v-model="Crearjugador.FechaNacimiento" readonly>
                            </div>

                            <div class="form-group">
                              <label for="exampleFormControlSelect1">Equipo</label>
                              <select class="form-control" id="exampleFormControlSelect1" v-model="Crearjugador.id_Equipo" readonly>
                                  <option v-for="equipo in Equipos" :value="equipo.id">{{equipo.Nombre}}</option>
                              </select>
                            </div>

                            </form>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-danger" @click.prevent="borrar" v-if="btnBorrar">Borrar Jugador</button>
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
                                  <td>{{jugador.Nombre}}</td>
                                  <td>{{jugador.LigaNombre}}</td>
                                  <td>
                                    <button class="btn btn-info btn-sm" type="button" >Detalles</button>
                                    <button class="btn btn-primary btn-sm" type="button" @click="abrirDetalles(jugador)">Editar</button>
                                    <button class="btn btn-danger btn-sm" type="button" @click="abrirEliminar(jugador)">Eliminar</button>
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
    import swal from 'sweetalert';
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
          Equipos: [],
          titulo: '',
          id_jugador: '',
          btnCrear: false,
          btnEditar: false,
          btnBorrar: false,
          Crearjugador:
          {
            name: '',
            ApellidoP: '',
            ApellidoM: ' ',
            email: '',
            id_Equipo: '',
            FechaNacimiento: '',
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

          crear()
          {

            axios.post('CrearJugador',this.Crearjugador).then(response =>{
              this.getListaJugadores()
              $('#modalCrear').modal('hide')
              if ($('.modal-backdrop').is(':visible')) {
                    $('body').removeClass('modal-open');
                    $('.modal-backdrop').remove();
              };
              swal("Felicidades!","Nuevo Jugador Registrado","success");
            }).catch(function(error){
              swal("Error","Error Jugador No Registrado","danger");
            });
          },

          getEquipos()
          {
              axios.get('ListaEquipos2').then(response =>{
                this.Equipos = response.data
              });
          },
          getListaJugadores(){

              var urlEstud = "ListaJugadores";
              this.getEquipos()
              axios.get(urlEstud).then(response =>{
                this.Jugadores = response.data
                $('#sampleTable').DataTable().destroy()
                this.tabla()
              });
          },
          abrirCrear()
          {
              this.limpiar()
              this.titulo='Crear Jugador'

            $('#modalCrear').modal('show')
          },
          abrirDetalles(datos)
          {
              this.btnCrear= false,
              this.btnEditar= true,
              this.titulo='Editar Jugador'
              this.Crearjugador = {
              name: datos.name,
              ApellidoP: datos.ApellidoP,
              ApellidoM: datos.ApellidoM,
              email: datos.email,
              FechaNacimiento: datos.FechaNacimiento,
              id_Equipo: datos.id_Equipo,
              }
              this.id_jugador = datos.id,
              this.id_Equipo= datos.id_Equipo,

            $('#modalCrear').modal('show')
          },
          abrirEliminar(datos)
          {
              this.btnBorrar= true,
              this.titulo='Borrar Jugador'
              this.Crearjugador = {
              name: datos.name,
              ApellidoP: datos.ApellidoP,
              ApellidoM: datos.ApellidoM,
              email: datos.email,
              FechaNacimiento: datos.FechaNacimiento,
              id_Equipo: datos.id_Equipo,
              }
              this.id_jugador = datos.id,
              this.id_Equipo= datos.id_Equipo,

            $('#modalBorrar').modal('show')
          },
          limpiar()
          {
              this.btnCrear= false,
              this.btnEditar= false,
              this.btnBorrar = false,
              this.titulo=''
              this.Crearjugador = {
              name: '',
              ApellidoP: '',
              ApellidoM: '',
              email: '',
              FechaNacimiento: '',
              id_Equipo: '',
              }
              this.id_jugador = '',
              this.id_Equipo= ''
          },
          borrar()
          {
          $('#modalBorrar').modal('dismiss')

          },

    }
    }
</script>
