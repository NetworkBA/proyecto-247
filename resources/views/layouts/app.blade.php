<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Proyecto-256</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body id="page-top">
    <div id="wrapper">

      <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
          <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                  <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
                  <div class="sidebar-brand-text mx-3"><span>Proyecto-256</span></div>
              </a>
              <hr class="sidebar-divider my-0" />


              <ul class="nav navbar-nav text-light" id="accordionSidebar">
                  <li class="nav-item"><a class="nav-link" href="">
                    <i class="fas fa-tachometer-alt"></i><span>Noticias</span></a>
                  </li>

                  @guest
                      @if (Route::has('login'))
                      @endif
                      @else
                      <li class="nav-item"><a class="nav-link active" href="perfil">
                        <i class="fas fa-user"></i><span>Perfil</span></a>
                      </li>
                      <li class="nav-item"><a class="nav-link" href="">
                        <i class="fas fa-table"></i><span>Equipos</span></a>
                      </li>

                      <?php if ( Auth::user()->id_TipoUsuario == 5): ?>
                        <li class="nav-item"><a class="nav-link" href="">
                          <i class="far fa-user-circle"></i><span>Historial Medico</span></a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="">
                          <i class="fas fa-user-circle"></i><span>Historial Deportivo</span></a>
                        </li>
                      <?php elseif (Auth::user()->id_TipoUsuario == 1):  ?>
                        <li class="nav-item"><a class="nav-link" href="">
                          <i class="fas fa-user-circle"></i><span>Jugadores</span></a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="">
                          <i class="fas fa-user-circle"></i><span>Personal</span></a>
                        </li>
                      <?php endif; ?>
                        @endguest


              </ul>

              <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
          </div>
      </nav>
      <div class="d-flex flex-column" id="content-wrapper">
          <div id="content">
            <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">

                <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>

                    <ul class="nav navbar-nav flex-nowrap ml-auto">

                      @guest
                          @if (Route::has('login'))
                              <li class="nav-item">
                                  <a class="nav-link" href="{{ route('login') }}">{{ __('Inicio de Sesión') }}</a>
                              </li>
                          @endif

                          @if (Route::has('register'))
                              <li class="nav-item">
                                  <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                              </li>
                          @endif
                      @else


                      <div class="d-none d-sm-block topbar-divider"></div>
                      <li class="nav-item dropdown no-arrow">
                          <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small">{{ Auth::user()->name }}</span><img class="border rounded-circle img-profile" src="{{ Auth::user()->imagedeusuario }}"></a>
                              <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in"><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Perfil</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Ajustes</a><a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Activity log</a>

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                      {{ __('Cerrar Sesión') }}
                                  </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                              </div>
                              </div>
                      </li>

                      @endguest




                    </ul>
                </div>
            </nav>
        </div>

      <main class="py-4">
          @yield('content')
      </main>

      <div class="d-flex flex-column" id="content-wrapper">
         <div id="content">
         </div>
         <footer class="bg-white sticky-footer">
             <div class="container my-auto">
                 <div class="text-center my-auto copyright"><span>Copyright © Proyecto-256 2021</span></div>
             </div>
         </footer>
     </div>
     <a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>


    </div>
</body>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/chart.min.js"></script>
<script src="assets/js/bs-init.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
<script src="assets/js/theme.js"></script>
</html>
