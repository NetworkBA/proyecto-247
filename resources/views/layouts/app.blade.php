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
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
            <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>

                <ul class="nav navbar-nav flex-nowrap ml-auto">
                    <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-search"></i></a>
                        <div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in" aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto navbar-search w-100">
                                <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                    <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                </div>
                            </form>
                        </div>
                    </li>
                    <li class="nav-item dropdown no-arrow mx-1">
                        <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="badge badge-danger badge-counter">3+</span><i class="fas fa-bell fa-fw"></i></a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in">
                                <h6 class="dropdown-header">alerts center</h6><a class="d-flex align-items-center dropdown-item" href="#">
                                    <div class="mr-3">
                                        <div class="bg-primary icon-circle"><i class="fas fa-file-alt text-white"></i></div>
                                    </div>
                                    <div><span class="small text-gray-500">December 12, 2019</span>
                                        <p>A new monthly report is ready to download!</p>
                                    </div>
                                </a><a class="d-flex align-items-center dropdown-item" href="#">
                                    <div class="mr-3">
                                        <div class="bg-success icon-circle"><i class="fas fa-donate text-white"></i></div>
                                    </div>
                                    <div><span class="small text-gray-500">December 7, 2019</span>
                                        <p>$290.29 has been deposited into your account!</p>
                                    </div>
                                </a><a class="d-flex align-items-center dropdown-item" href="#">
                                    <div class="mr-3">
                                        <div class="bg-warning icon-circle"><i class="fas fa-exclamation-triangle text-white"></i></div>
                                    </div>
                                    <div><span class="small text-gray-500">December 2, 2019</span>
                                        <p>Spending Alert: We've noticed unusually high spending for your account.</p>
                                    </div>
                                </a><a class="text-center dropdown-item small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown no-arrow mx-1">
                        <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-envelope fa-fw"></i><span class="badge badge-danger badge-counter">7</span></a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in">
                                <h6 class="dropdown-header">alerts center</h6><a class="d-flex align-items-center dropdown-item" href="#">
                                    <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="assets/img/avatars/avatar4.jpeg">
                                        <div class="bg-success status-indicator"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate"><span>Hi there! I am wondering if you can help me with a problem I've been having.</span></div>
                                        <p class="small text-gray-500 mb-0">Emily Fowler - 58m</p>
                                    </div>
                                </a><a class="d-flex align-items-center dropdown-item" href="#">
                                    <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="assets/img/avatars/avatar2.jpeg">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate"><span>I have the photos that you ordered last month!</span></div>
                                        <p class="small text-gray-500 mb-0">Jae Chun - 1d</p>
                                    </div>
                                </a><a class="d-flex align-items-center dropdown-item" href="#">
                                    <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="assets/img/avatars/avatar3.jpeg">
                                        <div class="bg-warning status-indicator"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate"><span>Last month's report looks great, I am very happy with the progress so far, keep up the good work!</span></div>
                                        <p class="small text-gray-500 mb-0">Morgan Alvarez - 2d</p>
                                    </div>
                                </a><a class="d-flex align-items-center dropdown-item" href="#">
                                    <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="assets/img/avatars/avatar5.jpeg">
                                        <div class="bg-success status-indicator"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate"><span>Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</span></div>
                                        <p class="small text-gray-500 mb-0">Chicken the Dog · 2w</p>
                                    </div>
                                </a><a class="text-center dropdown-item small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </div>
                        <div class="shadow dropdown-list dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown"></div>
                    </li>
                    <div class="d-none d-sm-block topbar-divider"></div>
                    <li class="nav-item dropdown no-arrow">
                        <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small">Valerie Luna</span><img class="border rounded-circle img-profile" src="assets/img/avatars/avatar1.jpeg"></a>
                            <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in"><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Settings</a><a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Activity log</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
