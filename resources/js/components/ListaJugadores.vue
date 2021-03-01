<template>

    <div class="container-fluid">
        <h3 class="text-dark mb-4">Jugadores</h3>

        <div class="card shadow">
            <div class="card-header py-3">
                <p class="text-primary m-0 font-weight-bold">Información de Jugadores</p>
                <a href="#" class="btn btn-primary float-right" >Agregar Jugador</a>

            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 text-nowrap">
                        <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label>Show <select class="form-control form-control-sm custom-select custom-select-sm">
                                    <option value="10" selected>10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select></label></div>
                    </div>
                    <div class="col-md-6">
                        <div class="text-md-right dataTables_filter" id="dataTable_filter"><label><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search" /></label></div>
                    </div>
                </div>
                <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                    <table class="table my-0" id="sampleTable">
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
                                <td><strong>Nombre</strong></td>
                                <td><strong>Equipo</strong></td>
                                <td><strong>Posición</strong></td>
                                <td><strong>Edad</strong></td>
                                <td><strong>Fecha de Inicio</strong></td>
                                <td><strong>Calificación</strong></td>
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
