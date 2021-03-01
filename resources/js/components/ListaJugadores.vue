<template>

    <div class="container-fluid">
        <h3 class="text-dark mb-4">Jugadores</h3>
        <div class="card shadow">
            <div class="card-header py-3">
                <p class="text-primary m-0 font-weight-bold">Información de Jugadores</p>
            </div>

            <div class="card-body">

                <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                    <table class="table my-0" id="dataTable">
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
              
            </div>
        </div>
    </div>

</template>

<script>
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
