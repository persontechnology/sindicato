@extends('layouts.menuNav')
@section('title', 'Inicio')
@section('content') 

<main>
    
    <div id="full-slider-wrapper">
        <div id="layerslider" style="width:100%;height:700px;">

            <div class="ls-slide" data-ls="slidedelay: 5000; transition2d:85;">
                <img src="{{asset('plusCliente/images/slider/1.png')}}" class="ls-bg" alt="Slide background">
                <h3 class="ls-l slide_typo" style="top: 33%; left: 50%;" data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;">“ESCUELA DE <strong>CAPACITACIÓN </strong>   </h3>
                <p class="ls-l slide_typo_2" style="top:43%; left:50%;" data-ls="durationin:2000;delayin:1000;easingin:easeOutElastic;">
                    DE CONDUCTORES PROFESIONALES DEL SINDICATO PARROQUIAL  DE
                </p>
                <h3 class="ls-l slide_typo" style="top: 53%; left: 50%;" data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;">SAN <strong>JUAN </strong> DE PASTOCALLE”</h3>

                <a class="ls-l btn_1 rounded" style="top:60%; left:50%;white-space: nowrap;" data-ls="durationin:2000;delayin:1400;easingin:easeOutElastic;" href="{{route('histor')}}">Leer Más</a>
            </div>
            <div class="ls-slide" data-ls="slidedelay:5000; transition2d:103;">
                <img src="{{asset('plusCliente/images/slider/2.png')}}" class="ls-bg" alt="Slide background">
                <h3 class="ls-l slide_typo" style="top: 40%; left: 50%;" data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;"><strong>“Formando</strong> Profesionales</h3>
                <p class="ls-l slide_typo_2" style="top:50%; left:50%;" data-ls="durationin:2000;delayin:1000;easingin:easeOutElastic;">
                    con liderazgo y conciencia social.
                </p>
                <h3 class="ls-l slide_typo" style="top: 60%; left: 50%;" data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;">SAN <strong>JUAN </strong> DE PASTOCALLE”</h3>

                <a class="ls-l btn_1 rounded" style="top:70%; left:50%;white-space: nowrap;" data-ls="durationin:2000;delayin:1400;easingin:easeOutElastic;" href="{{route('personalAd')}}">Leer Más</a>
            </div>
            <div class="ls-slide" data-ls="slidedelay: 5000; transition2d:5;">

                <img src="{{asset('plusCliente/images/slider/3.png')}}" class="ls-bg" alt="Slide background">

                <h3 class="ls-l slide_typo" style="top:47%; left: 50%;" data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;"><strong>Licencias </strong> Profesionales</h3>
                <p class="ls-l slide_typo_2" style="top:55%; left:50%;" data-ls="durationin:2000;delayin:1000;easingin:easeOutElastic;">
                    Tipo C,D,E
                </p>
                <a class="ls-l btn_1 rounded" style="top:65%; left:50%;" data-ls="durationin:2000;delayin:1400;easingin:easeOutElastic;" href="{{route('infoLicencia')}}">Leer Más</a>
            </div>
            
        </div>
    </div>

    <div class="tt-extra-total-indent">
        <div class="tt-total-info-row">
            <div class="tt-row ">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="tt-col1">
                            <div class="tt-total-info">
                                <div class="tt-icon">
                                    <i class="fa fa-users"></i>
                                </div>
                                <div class="tt-description">
                                    <div class="tt-nubers">28</div>
                                    Profesores
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="tt-col">
                            <div class="tt-total-info">
                                <div class="tt-icon">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                                <div class="tt-description">
                                    <div class="tt-nubers">1290</div>
                                    Horas de Entrenamiento
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="tt-col1">
                            <div class="tt-total-info">
                                <div class="tt-icon">
                                    <i class="fa fa-globe"></i>
                                </div>
                                <div class="tt-description">
                                    <div class="tt-nubers">6</div>

                                    Años de Trabajo
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="tt-col">
                            <div class="tt-total-info">
                                <div class="tt-icon">
                                    <i class="fa fa-address-card"></i>
                                </div>
                                <div class="tt-description">
                                    <div class="tt-nubers">5000+</div>
                                    Cursos Emitidos
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="item">
                        <div class="tt-col1">
                            <div class="tt-total-info">
                                <div class="tt-icon">
                                    <i class="fa fa-address-card"></i>
                                </div>
                                <div class="tt-description">
                                    <div class="tt-nubers">3</div>
                                    Tipos de Licencia
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        })
    </script>
    <div class="bg_color_1">
        <br>
        <div class="container margin_70_50">
            <div class="main_title_2">
                <span><em></em></span>
                <h2>Estás Listo?</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="tt-img2">                
                        <img src="{{asset('plusCliente/images/carroedi.png')}}" class="img-fluid " alt="">
                    </div>
                </div>
                <div class="col-md-6 p-xs " align="justify">
                    Como Sindicato fue constituida legalmente según el Registro  de la Dirección General del Trabajo.- Departamento de Organizaciones Laborales y Estadística.- Quito, 21 de enero de 1988, inscrito en el Registro 04, julio 14 con el número 260. Con domicilio la cabecera Parroquial de San Juan de Pastocalle, Cantón Latacunga, Provincia de Cotopaxi. Seguidamente fue reestructurada legalmente en el Ministerio de Trabajo y Recursos Humanos, Dirección General del Trabajo, Quito 25 de mayo de 1998, inscrito en el Registro 04, folio: 01, con el número: 454..
                    <ul class="offset-top">
                        <li> <i class="fa fa-check-circle"></i>  Sé parte de nosotros </li>
                        <li> <i class="fa fa-check-circle"></i>  Por la calidad de conductores profesionales que ofrece a la sociedad!</li>
                    </ul>
                    <div class="row-btn">
                        <a href="{{route('histor')}}" class="btn_1 rounded">Leer Más</a>
                    </div>
                </div>  
            </div>
        </div>
    </div>
 
    <div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
        <div class="small-dialog-header">
            <h3>GPS</h3>
        </div>
    </div>
    <div class="container-indent ">
        <div class="tt-promo-03">
            <div class="container">
                <div class="tt-description">
                    <h3 class="tt-title">Conocemos <span>Todas Las Diferentes</span> Rutas De Prueba!</h3>
                    <p>
                        Reserve nuestra lección de prueba y conozca a su instructor de manejo personal
                    </p>
                    <address>
                        (03) 3048891
                    </address>
                    <a href="#sign-in-dialog" id="sign-in" class="login" title="Ver más">
                        {{-- <img class="tt-icon"  src="{{asset('/plusCliente/images/iconos/seo.svg')}}" class="img-fluid" width="80px" height="80px" > --}}
                    </a> 
                </div>
            </div>
        </div>
    </div>

   @include('informacion.tipoLicencias')
    
    <div class="bg_color_1">
        <div class="container margin_70_55">
            <div class="main_title_2">
                <span><em></em></span>
                <h3>Noticias</h3>
                <p>Ultimas noticias de nuestra escuela a su disposición</p>
            </div>
            @if($noticias->count()>0)
            <div class="row">
                @foreach($noticias as $not)
                <div class="col-lg-6">
                    <a class="box_news" href="{{route('detalleNoticia',['id'=>$not->id])}}">
                        <figure><img src="{{asset('images/noticias').'/'.$not->foto}}" alt="">
                            <figcaption><strong>{{$not->updated_at->format('d')}}</strong>{{$not->updated_at->format('M')}}</figcaption>
                        </figure>
                        <ul>
                            <li>{{$not->usuario->nombres ?? "Escuela"}} {{$not->usuario->apellidos ?? ''}}</li>
                            <li>{{$not->updated_at}}</li>
                        </ul>
                        <h4>{{Str::limit($not->titulo, $limit = 62, $end = '...')}}</h4>
                        <p class="text-justify">{!!Str::limit($not->detalle, $limit = 150, $end = '...')!!}</p>
                        
                    </a>
                </div>
                @endforeach
            </div>
            <p class="btn_home_align"><a href="{{route('noticiasCliente')}}" class="btn_1 rounded">Ver todas las noticias</a></p>
            @else
            <div class="alert alert-primary" role="alert">
                <img src="{{asset('images/noticias/blog.svg')}}" alt="" width="75px;">
                <strong>No tenemos ninguna noticia por el momento.!</strong>
            </div>
            @endif
        </div>
    </div>
</main>


 <!-- Messenger plugin de chat Code -->
 <div id="fb-root"></div>
 <script>
   window.fbAsyncInit = function() {
     FB.init({
       xfbml            : true,
       version          : 'v10.0'
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

 <!-- Your plugin de chat code -->
 <div class="fb-customerchat"
   attribution="page_inbox"
   page_id="146923422570664">
 </div>


<script type="text/javascript">




    window.onload = function(){
        document.getElementById("ini").style.color='#A0C55C';
    }
    $('.modalPe').mouseover(function(){
        alert('estas dentro');
    });

    
</script>
@endsection