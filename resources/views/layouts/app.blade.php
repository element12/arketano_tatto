<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'AKERONTE TATTOO STUDIO') }}</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link href="{{ asset('css/header.css') }}" rel="stylesheet">
        <script>
        jQuery(document).ready(function($){
            $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
            });
        })
        </script>
    </head>
    <body>
        <div class="d-flex" id="wrapper">
           
        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="sidebar-heading">{{ config('app.name', 'AKERONTE TATTOO STUDIO') }} </div>
        @if( Auth::user()->getRol()  == 'Administrador')
        <div class="list-group list-group-flush">
            <a href="#" class="list-group-item list-group-item-action bg-light">Ventas</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Clientes</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Cotizaciones</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Gastos</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Tarjeta Regalo</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Autorización procedimientos</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Sistemas de referidos</a>
        </div>
        @else
        <div class="list-group list-group-flush">
            <a href="#" class="list-group-item list-group-item-action bg-light">Mi perfil</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Mis puntos</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Recomendados</a>
        </div>
        @endif

        </div>
        <!-- /#sidebar-wrapper -->
        <!-- Page Content -->
        <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <button class="btn btn-primary" id="menu-toggle">Menu Lateral</button>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->getRol() }}  {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Mi perfil</a>
                    <a class="dropdown-item" href="#">Suscripciones</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Salir') }}
                    </a>
                    

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
                </li>
            </ul>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
        <main class="py-4">
            @yield('content2')
        </main>
        </div>
        <!-- /#page-content-wrapper -->
        </div>
        <!-- /#wrapper -->
    </body>
</html>