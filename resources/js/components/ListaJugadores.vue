<template>

    <div class="container-fluid">
        <h3 class="text-dark mb-4">Jugadores</h3>
        <div class="card shadow">
            <div class="card-header py-3">
                <p class="text-primary m-0 font-weight-bold">Información de Jugadores</p>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 text-nowrap">

                    </div>
                    
                </div>
                <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                    <table class="table my-0" id="myTable">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Equipo</th>
                                <th>Posición</th>
                                <th>Edad</th>
                                <th>Fecha de Inicio</th>
                                <th>Calificación</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for ="jugador in Jugadores" :key="jugador.id" >
                                <td>{{jugador.name + ' ' + jugador.ApellidoP + ' '+ jugador.ApellidoM +  ''}}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td><strong>Name</strong></td>
                                <td><strong>Position</strong></td>
                                <td><strong>Office</strong></td>
                                <td><strong>Age</strong></td>
                                <td><strong>Start date</strong></td>
                                <td><strong>Salary</strong></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-6 align-self-center">
                        <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
                    </div>
                    <div class="col-md-6">
                        <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                            <ul class="pagination">
                                <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
  import datables from 'datatables'
    export default {
        mounted() {
            console.log('Component Lista Jugadores Montada.')
            this.getListaJugadores()

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

                  mytable(){
                    $(document).ready( function () {
                        $('#myTable').DataTable();
                    } );
                  },

                  getListaJugadores(){
                      this.mytable()
                      var urlEstud = "ListaJugadores";
                      axios.get(urlEstud).then(response =>  { this.Jugadores = response.data});
                  }
          }
    }
</script>
