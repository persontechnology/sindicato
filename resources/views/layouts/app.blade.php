<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ config('app.nameapp', 'ESCUELA S.J') }}</title>
    <link rel="shortcut icon" href="{{asset('plusCliente/images/logo.png')}}" type="image/x-icon">
    <!-- Scripts -->
    
    <script src="{{ asset('js/app.js') }}"></script>
    
    <link rel="stylesheet" type="text/css" href="{{asset('plusCliente/font/css/font-awesome.min.css')}}">

    <!-- Styles -->
    <link href="{{ asset('dist/MDB-Free_4.8.8/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- table -->
    <link rel="stylesheet" href="{{asset('dist/DataTables/datatables.min.css')}}">
    <script src="{{asset('dist/DataTables/datatables.min.js')}}"></script>
    
    <!-- alert -->
    <link rel="stylesheet" href="{{asset('dist/alert/sweetalert.css')}}">
    <script src="{{asset('dist/alert/sweetalert.min.js')}}"></script>
    
    <!-- notify -->
    <link rel="stylesheet" href="{{asset('dist/notify/lobibox.min.css')}}">
    <script src="{{asset('dist/notify/notifications.min.js')}}"></script>

    <!-- select -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{asset('dist/select/css/bootstrap-select.min.css')}}">

    <!-- Latest compiled and minified JavaScript -->
    <script src="{{asset('dist/select/js/bootstrap-select.min.js')}}"></script>

    <!-- (Optional) Latest compiled and minified JavaScript translation files -->
    <script src="{{asset('dist/select/js/i18n/defaults-es_ES.js')}}"></script>

    <link rel="stylesheet" href="{{ asset('dist/MDB-Free_4.8.8/css/mdb.min.css') }}">

    <script src="{{asset('js/soysoft.js')}}"></script>
    

    

</head>
<body>
   
    


    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark default-color">
            <div class="container-fluid">


                <a class="navbar-brand" href="{{ url('/') }}">
                  <img src="{{asset('plusCliente/images/a.png')}}" width="30" height="30" class="d-inline-block align-top img-thumbnail border-success" alt="">
                   {{ config('app.nameapp', 'ESCUELA S.J') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        @guest
                        @else
                        <li class="nav-item" id="menuInicio">
                            <a class="nav-link" href="{{route('home')}}">Inicio <span class="sr-only">(current)</span></a>
                        </li>

                        {{-- @if(Auth::user()->perfil->nombre=='Admin')
                            <li class="nav-item" id="menuSecretaria">
                                <a class="nav-link" href="{{route('secretarias')}}">Secretarias</a>
                            </li>
                        @endif --}}

                        @if(Auth::user()->perfil->nombre=='Admin' || Auth::user()->perfil->nombre=='Secre')
                            <li class="nav-item" id="menuNoticiasAdmin">
                                <a class="nav-link" href="{{route('noticiasAdmin')}}">Noticias</a>
                            </li>
{{-- 
                            <li class="nav-item" id="menuServicios">
                                <a class="nav-link" href="{{route('servicios')}}">Servicios</a>
                            </li>

                            <li class="nav-item" id="menuProfesores">
                                <a class="nav-link" href="{{route('profesores')}}">Profesores</a>
                            </li>

                            <li class="nav-item" id="menuMaterias">
                                <a class="nav-link" href="{{route('materias')}}">Materias</a>
                            </li>

                            <li class="nav-item" id="menuCursos">
                                <a class="nav-link" href="{{ route('cursos') }}">Cursos</a>
                            </li>

                            <li class="nav-item" id="menuMatricular">
                                <a class="nav-link" href="{{route('matricular')}}">Matricular</a>
                            </li>

                            <li class="nav-item" id="menuEstudiantes">
                                <a class="nav-link" href="{{route('estudiantes')}}">Estudiantes</a>
                            </li> --}}
                            <li class="nav-item" id="menuContactos">
                                <a class="nav-link" href="{{route('contactosAdmin')}}">Contactos</a>
                            </li>

                        @endif

                        {{-- @if(Auth::user()->perfil->nombre=='Profe')
                            <li class="nav-item" id="menuAulaDocente">
                                <a class="nav-link" href="{{route('aulasVirtaulDocente')}}">Aula virtual</a>
                            </li>
                        @endif

                        @if(Auth::user()->perfil->nombre=='Estudiante')
                            <li class="nav-item" id="aulaEstudiante">
                                <a class="nav-link" href="{{route('aulasVirtualEstudiante')}}">Mi aula virtual</a>
                            </li>
                        @endif --}}
                        

                        
                        @endguest

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item" id="menuLogin">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Ingresar') }}</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li> -->
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    
                                    <a class="dropdown-item" href="{{ url('/') }}" >
                                        {{ __('Inicio') }}
                                    </a>

                                    <a class="dropdown-item" href="{{ route('miPerfil') }}" >
                                        {{ __('Mi perfil') }}
                                    </a>
                                    
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}
                                    </a>
                                    
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <script>

            var sonido=false;
            Lobibox.notify.DEFAULTS = $.extend({}, Lobibox.notify.DEFAULTS, {
              iconSource: 'fontAwesome',
              pauseDelayOnHover: true,
              continueDelayOnInactiveTab: false,
            });
        </script>

        <main class="">
            @yield('breadcrumbs')
            @yield('content')
        </main>
    </div>
 
    
    @if ($errors->any())
        @foreach ($errors->all() as $error)
        <script>
                // default,success,error,warning,info
             Lobibox.notify('default', {
                title: 'Detalle',
                sound:sonido,
                msg: "{{ $error}}"
            });
        </script>
        @endforeach
    @endif
    

    <!-- notificaciones flash data -->
     @foreach (['default', 'success', 'error', 'warning','info'] as $msg)
        @if(Session::has($msg))
        
            <script>
                // default,success,error,warning,info
             Lobibox.notify('{{$msg}}', {
                title: 'Detalle',
                sound:sonido,
                msg: '{{ Session::get($msg) }}'
            });

            </script>
        @endif
    @endforeach


    <script>
        $(function () {
          $('[data-toggle="tooltip"]').tooltip()
        });
        $('table').on('draw.dt', function() {
            $('[data-toggle="tooltip"]').tooltip();
        });

        function eliminar(argument){
            swal({
              title: "¿Estás seguro?",
              text: "¡Tu no podrás recuperar esta información!",
              type: "info",
              showCancelButton: true,
              confirmButtonClass: "btn-outline-primary",
              cancelButtonClass: "btn-outline-danger",
              confirmButtonText: "Sí, eliminarlo!",
              cancelButtonText: "Cancelar!",
              closeOnConfirm: false
            },
            function(){
              window.location.href=$(argument).data("url");
            });
        }
    </script>

    <script src="{{ asset('dist/MDB-Free_4.8.8/js/mdb.min.js') }}"></script>
</body>
</html>
