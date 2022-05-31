<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Agencia</title>

        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <style>
            .carousel {
                height: 550px !important;
                width: 1000px !important;
                margin: 0 auto;
            }

            img {
                height: 550px !important;
                width: 1000px !important;
            }
            
        </style>
        
    </head>
    <body class="antialiased">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Agencia') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        @if (Auth::check()) 
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('sucursals.index') }}">{{ __('Sucursal') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('empleados.index') }}">{{ __('Empleados') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('clientes.index') }}">{{ __('Clientes') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('carros.index') }}">{{ __('Carros') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('rentas.index') }}">{{ __('Rentas') }}</a>
                            </li>
                        @endif
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesión') }}
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

        <div class="container-sm mt-5 mt-2">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('img/car1.jpg') }}" alt="tag">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>BMW</h5>
                                <p>La mejor calidad de veiculos</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/car2.jpg') }}" alt="tag">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Antiguos</h5>
                                <p>Carros coleccionables</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/car3.jpg') }}" alt="tag">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Lo mas nuevo</h5>
                                <p>Carros del año</p>
                            </div>
                        </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        </body>
</html>
