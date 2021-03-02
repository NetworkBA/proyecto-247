<template>

    <div class="card">

            <div class="card-header">
              Lista de Equipos
                <button class="btn btn-success btn-sm" type="button" data-toggle='modal' data-target='#modalCrear'>Nuevo Equipo</button>

                <!-- Modal -->
                  <div class="modal" id="modalCrear" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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



                          <div class="form-group">
                            <label for="inputAddress">Nombre</label>
                            <input type="text" class="form-control" id="name" placeholder="" v-model="Crearequipo.name">
                          </div>


                          <div class="form-group">
                            <label for="exampleFormControlSelect1">Liga</label>
                            <select class="form-control" id="exampleFormControlSelect1" v-model="Crearequipo.liga">
                                <option v-for="liga in Ligas" :value="liga.id">{{liga.Nombre}}</option>
                            </select>
                          </div>

                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                          <button type="button" class="btn btn-primary" @click.prevent="crear">Crear Equipo</button>
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
                                <th>Equipo</th>
                                <th>Liga</th>
                                <th>Entrendador</th>
                                <th>Acciones</th>

                            </tr>
                        </thead>
                        <tbody>
                              <tr v-for ="equipo in Equipos" :key="equipo.id" >
                                  <td>{{equipo.Nombre}}</td>
                                  <td>{{equipo.LigaNombre}}</td>
                                  <td>{{equipo.name +' '+ equipo.ApellidoP + ' ' + equipo.ApellidoM}}</td>
                                  <td>
                                    <button class="btn btn-info btn-sm" type="button">Detalles</button>
                                    <button class="btn btn-primary btn-sm" type="button">Editar</button>
                                    <button class="btn btn-danger btn-sm" type="button">Eliminar</button>
                                  </td>
                              </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td><strong>Equipo</strong></td>
                                <td><strong>Liga</strong></td>
                                <td><strong>Entrendador</strong></td>
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
            this.getEquipos()
            this.tabla()
        },
        data()
        {
          return{
          Equipos: [],
          Ligas: [],
          Crearequipo:
          {
            name: '',
            id_Liga: '',
            id_Entrenador: '',
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
              //
            });
          },
          getEquipos()
          {
              axios.get('ListaEquipos').then(response =>{
                this.Equipos = response.data
                $('#sampleTable').DataTable().destroy()
                this.tabla()
              });
              this.getLigas()
          },
          getLigas()
          {
            axios.get('ListaLigas').then(response =>{
              this.Ligas = response.data
            });
          },


    }
    }
</script>
