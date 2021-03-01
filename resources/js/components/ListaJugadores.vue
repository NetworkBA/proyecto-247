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


                </div>
                <div class="table-responsive" id="dataTable" role="grid" aria-describedby="dataTable_info">
                    <table class="table my-0" id="sampleTable">
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
                                  <td></td>
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
