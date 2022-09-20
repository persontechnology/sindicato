<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Sindicato de Pastocalle">
    <meta name="keywords" content="Sindicato de Pastocalle,Escuela de conducción,Licencia tipo c,Licencia tipo d,Licencia tipo e">
    <meta name="author" content="Sindicato de Pastocalle">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{ config('app.nameapp', 'SINDICATO DE PASTOCALLE') }}</title>
    <link rel="shortcut icon" href="{{asset('plusCliente/images/logo.png')}}" type="image/x-icon">
    <link href="{{asset('plusCliente/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('plusCliente/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('plusCliente/css/style2.css')}}" rel="stylesheet">
    <link href="{{asset('plusCliente/css/vendors.css')}}" rel="stylesheet">
    <link href="{{asset('plusCliente/css/tables.css')}}" rel="stylesheet">
    <link href="{{asset('plusCliente/layerslider/css/layerslider.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('plusCliente/font/css/font-awesome.min.css')}}">
    <link href="{{asset('plusCliente/carrucel/docs/assets/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('plusCliente/carrucel/docs/assets/owlcarousel/assets/owl.theme.default.min.css')}}" rel="stylesheet">
    <script src="{{asset('plusCliente/js/jquery-2.2.4.min.js')}}"></script>
    <script src="{{asset('plusCliente/js/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{asset('plusCliente/carrucel/docs/assets/owlcarousel/owl.carousel.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('plusCliente/layerslider/skins/v5/skin.css')}}">

    <script type="text/javascript" src="{{ asset('plusCliente/floating-whatsapp/floating-wpp.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('plusCliente/floating-whatsapp/floating-wpp.min.css') }}">

</head>
<body>
<div id="myDivWastapp"></div>
    <div id="tt-header">
        <div class="tt-header-wrapper-top" style="height: 30px">
            <div class="container">
                <div class="tt-header-top">
                    <address class="tt-box-location"><a href="contact.html"><i class="fa fa-map-marker"></i> E-35 vía a quito km 323, sector el chasqui, junto a la fabrica POSTECOM</a></address>
                    <address class="tt-box-phone"><a href="#"><i class="fa fa-phone"></i> (03) 3048891</a></address>
                    
                    <address class="tt-box-email">
                        <a href="mailto:ecp_pastocalle@yahoo.com"><i class="fa fa-envelope-open"></i> ecp_pastocalle@yahoo.com</a>
                    </address>

                    <address class="tt-box-time"><i class="fa fa-clock-o"></i> 9:00 AM – 7:00 PM / 6 Días</address>
                </div>
            </div>
        </div>
    </div>
    <div id="page">
        <header class="header menu_fixed">
            <div id="preloader"><div data-loader="circle-side"></div></div>
            <div id="logo" >          
                <a href="{{url('/')}}" class=""> 
                    <img src="{{asset('plusCliente/images/a.png')}}" width="80px;" data-retina="true" alt="" class="logo_normal img-thumbnail mt-3 ml-5 border border-success">
                </a>
                
                <a href="{{url('/')}}" class="mt-3">
                    <img src="{{asset('plusCliente/images/a.png')}}" width="40px;" data-retina="complete" alt="" class="logo_sticky img-thumbnail ml-4 border border-success">
                    <strong id="escuelaname" class="text-success">{{config('app.name')}}</strong>
                </a>
            </div>
            <a href="#menu" class="btn_mobile">
                <div class="hamburger hamburger--spin" id="hamburger">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
            </a>
            <nav id="menu" class="main-menu">
                <ul>
                    <li><span><a id="ini" href="{{url('/')}}"><b>Inicio</b></a></span>
                    </li>
                    <li ><span><a id="about" href="#0"><b>Acerca de Nosotros</b></a></span>
                        <ul>
                            <li><a id="mV" href="{{route('misVision')}}"><b>Misión y Visión</b></a></li>
                            <li><a id="his" href="{{route('histor')}}"><b>Reseña Histórica</b></a></li>          
                            <li><a id="pA" href="{{route('personalAd')}}"><b>Personal Administrativo</b></a></li>
                        </ul>
                    </li>
                    <li>
                        <span>
                            <a id="ser" href="{{ route('infoLicencia') }}"><b>Servicios</b></a>
                        </span>
                        <ul>
                            <li><a id="tC" href="{{route('tipoC')}}"><b>Licencia Tipo C</b></a></li>
                            <li><a id="tD" href="{{route('tipoD')}}"><b>Licencia Tipo D</b></a></li>
                            <li><a id="tE" href="{{route('tipoE')}}"><b>Licencia Tipo E</b></a></li>
                            <li><a id="exPsi" href="{{route('examenPsico')}}"><b>Examen Psicosensométrico</b></a></li>
                            <li><a id="recPu" href="{{route('recPuntos')}}"><b>Recuperación de Puntos</b></a></li>
                            <li><a id="acCo" href="{{route('actualiz')}}"><b>Actualización de Conocimientos</b></a></li>    <li><a id="coDef" href="{{route('conDefen')}}"><b>Conducción a la Defensiva</b></a></li>
                        </ul>
                    </li>
                    <li><span><a id="blo" href="{{route('noticiasCliente')}}"><b>Noticias</b></a></span></li>
                    <li><span><a id="con" href="{{route('contacto')}}"><b>Contactos</b></a></span></li>

                    {{-- <li><span><a id="con" target="_blank" href="https://www.sindicatodepastocalle.com/webmail"><b>Web mail</b></a></span></li>
                    <li><span><a id="auv" href="{{route('home')}}"><b>Aula Virtual</b></a></span></li> --}}
                    @guest
                        <li>
                            <a href="{{route('home')}}" class="border-success" title="Ingresar">
                                <img style="width: 30px" src="{{asset('plusCliente/images/iconos/user.svg')}}" >
                            </a>
                        </li>
                    @else

                        <div class="btn-group ml-1 mt-1">
                            <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img style="width: 30px" src="{{asset('plusCliente/images/iconos/user.svg')}}" > {{ Auth::user()->name }}
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{route('home')}}">Administración</a>
                                <a class="dropdown-item" href="{{route('miPerfil')}}">Mi perfil</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" >Salir</a>
                            </div>
                        </div>
                    
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @endguest
                    
                </ul>
            </nav>
        </header>
        
        <!-- <div class="float1"> 
            <a href="{{route('contacto')}}" data-toggle="tooltip" data-placement="top" title="Escribenos">
                <img src="{{asset('/plusCliente/images/iconos/exam.svg')}}" class="img-fluid" width="50px" height="50px" >
            </a> 
            <div class="loader">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div> -->
        
        @yield('content')
        

        <footer class="tt-total-info-row">
            <div class="container margin_60_25">
                <div class="row">

                    <div class="col-lg-6 col-md-12">
                        <div class="row">
                            <div class="col-sm-4">
                                <img src="{{asset('plusCliente/images/a.png')}}" class="img-fluid img-thumbnail border-success mt-3" alt="">
                            </div>

                            <div class="col-sm-8 mt-3">
                                
                                <!-- <p align="justify">Nuestra institución garantiza su desempeño profesional en el área de conducción de vehículos comerciales, ya que contamos con el respaldo de entidades públicas como ala ANT y personal completamente capacitado para ejercer la buena práctica de saberes</p> -->
                                <p style="font-size: 15px">Formando Profesionales con Liderazgo y Conciencia Social</p>
                                <div class="follow_us">
                                    <ul>
                                        <li>Siguenos en facebook</li>
                                        <li><a target="_blank" href="https://www.facebook.com/profile.php?id=100009239601553"><i class="fa fa-facebook"></i></a></li>           
                                    </ul>
                                </div>  
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 ml-lg-auto">
                        <h5>Otros Enlaces</h5>
                        <ul class="">
                            <li>
                                <a target="_blank" href="https://www.ant.gob.ec/index.php/component/content/article/36-servicios/servicios-en-linea/1096-banco-de-preguntas#.VVyJvZNlw9V/"><img  src="{{asset('plusCliente/img/ant.png')}}" class="img-responsive img-fluid img-thumbnail border-success"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5>Contactos</h5>
                        <ul class="contacts">
                            <li><a href="#0"><i class="fa fa-phone"></i> (03)3048891</a></li>
                            <li><a href="mailto:ecp_pastocalle@yahoo.com"><i class="fa fa-envelope-o"></i> ecp_pastocalle@yahoo.com</a></li>
                            <li>
                                <a href="{{route('contacto')}}" class="btn btn-outline-light"><i class="fa fa-map-marker"></i> Contactarnos</a>
                            </li>
                        </ul>
                    </div>
                    
                </div>

                <div class="row">
                    <div class="col">
                        &copy; {{date('Y')}} {{config('app.name')}}
                    </div>
                    <div class="col">
                        <a target="_blank" href="https://persontechnology.com/" class="text-light pull-right">
                        DISEÑO Y DESARROLLO POR <strong>PERSON TECHNOLOGY<sup>&reg;</sup></strong> Todos los derechos reservados
                    </a>
                    </div>
                </div>
                <!--/row-->
            </div>
        </footer>
        
    </div>
    
    <div id="toTop"></div>

    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml            : true,
                version          : 'v6.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <!-- Your customer chat code -->
    
    <div class="fb-customerchat"
        attribution=setup_tool
        page_id="707887712735256">
    </div>



    <!-- COMMON SCRIPTS -->
    <script src="{{asset('plusCliente/js/common_scripts.js')}}"></script>
    <script src="{{asset('plusCliente/js/main.js')}}"></script>
    <!-- SPECIFIC SCRIPTS -->
    <script src="{{asset('plusCliente/js/modernizr_tables.js')}}"></script>
    <script src="{{asset('plusCliente/js/tables_func.js')}}"></script>
    <script src="{{asset('plusCliente/js/switcher.js')}}"></script>
    <script src="{{asset('plusCliente/layerslider/js/greensock.js')}}"></script>
    <script src="{{asset('plusCliente/layerslider/js/layerslider.transitions.js')}}"></script>
    <script src="{{asset('plusCliente/layerslider/js/layerslider.kreaturamedia.jquery.js')}}"></script>
    <script>
        'use strict';
        $('#layerslider').layerSlider({
            autoStart: true,
            navButtons: true,
            navStartStop: true,
            showCircleTimer: true,
            responsive: true,
            responsiveUnder: 1280,
            layersContainer: 1200,
            skinsPath: "{{asset('plusCliente/layerslider/skins')}}/"
                // Please make sure that you didn't forget to add a comma to the line endings
                // except the last line!
            });
         $(function () {
          $('[data-toggle="tooltip"]').tooltip()
        });

        $('#myDivWastapp').floatingWhatsApp({
            headerTitle:"SINDICATO DE PASTOCALLE",
            phone: '593984937377',
            popupMessage: 'Hola, como podemos ayudarte?',
            showPopup: true,
            size:'45pt',
            zIndex:'2'
            
        });
        </script>
    </body>
</html>