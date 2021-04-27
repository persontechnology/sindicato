@extends('layouts.menuNav')
@section('title', 'Contactos')
@section('content')
  <style type="text/css">
        #map {
          height: 458px;
          width: 100%;
        }
        /* Optional: Makes the sample page fill the window. */
      /* The location pointed to by the popup tip. */
        .popup-tip-anchor {
          height: 0;
          position: absolute;
          /* The max width of the info window. */
          width: 200px;
        }
        /* The bubble is anchored above the tip. */
        .popup-bubble-anchor {
          position: absolute;
          width: 100%;
          bottom: /* TIP_HEIGHT= */ 8px;
          left: 0;
        }
        /* Draw the tip. */
        .popup-bubble-anchor::after {
          content: "";
          position: absolute;
          top: 0;
          left: 0;
          /* Center the tip horizontally. */
          transform: translate(-50%, 0);
          /* The tip is a https://css-tricks.com/snippets/css/css-triangle/ */
          width: 0;
          height: 0;
          /* The tip is 8px high, and 12px wide. */
          border-left: 6px solid transparent;
          border-right: 6px solid transparent;
          border-top: /* TIP_HEIGHT= */ 8px solid white;
        }
        /* The popup bubble itself. */
        .popup-bubble-content {
          position: absolute;
          top: 0;
          left: 0;
          transform: translate(-50%, -100%);
          /* Style the info window. */
          background-color: white;
          padding: 5px;
          border-radius: 5px;
          font-family: sans-serif;
          overflow-y: auto;
          max-height: 60px;
          box-shadow: 0px 2px 10px 1px rgba(0,0,0,0.5);
        }
  </style>
  <!-- notify -->
  <link rel="stylesheet" href="{{asset('dist/notify/lobibox.min.css')}}">
  <script src="{{asset('dist/notify/notifications.min.js')}}"></script>
  
  <section class="hero_in hotels">
    <div class="wrapper">
      <div class="container">
        <h1 class="fadeInUp"><span></span>A tu alcance</h1>
      </div>
    </div>
  </section>
  <br>
    
  <div class="container">       	
    <div class="row">
        <div class="col-lg-6 ">
          <a class="boxed_list">
          <div class="main_title_2" style="margin-bottom: 25px">
            <span><em></em></span>
            <h2>Escribenos</h2>
            <p align="justify" style="font-size: 17px">Si desea hacer una pregunta, envíe un mensaje o envíe un testimonio, utilice el formulario en línea a continuación.</p>
          </div>
        @if(session('success'))
          <div class="alert alert-success alert-dismissible fade show border-success" role="alert">
            <strong>{{ config('app.nameapp', 'ESCUELA S.J') }}</strong> {{session('success')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif
        
        <form class="form-horizontal" id="formInscripcion" method="post"  action="{{route('enviarContacto')}}">
            @csrf
          
          <div class="form-group">
            <label for="servicio">Servicios</label>
            <select name="servicio" id="" class="form-control{{ $errors->has('servicio') ? ' is-invalid' : '' }}" required="">
              <option value="Licencia tipo C">Licencia tipo C</option>
              <option value="Licencia tipo D">Licencia tipo D</option>
              <option value="Licencia tipo E">Licencia tipo E</option>
              <option value="Licencia tipo D">Examen psicosensométrico</option>
              <option value="Recuperación de puntos">Recuperación de puntos</option>
              <option value="Conducción a la defensiva">Conducción a la defensiva</option>
              <option value="Actualización de conocimientos">Actualización de conocimientos</option>
            </select>

            @if ($errors->has('servicio'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('servicio') }}</strong>
                </span>
            @endif

          </div>


          <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" placeholder="Ingrese su nombre*" value="{{old('nombre')}}" required="required">
              @if ($errors->has('nombre'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('nombre') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{old('email')}}" placeholder="Ingrese su correo*">
              @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="number" name="telefono" class="form-control{{ $errors->has('telefono') ? ' is-invalid' : '' }}" value="{{old('telefono')}}" placeholder="Ingrese su número telefónico">
              @if ($errors->has('telefono'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('telefono') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group">
            <label for="mensaje">Mensaje</label>
            <textarea  name="mensaje" class="form-control{{ $errors->has('mensaje') ? ' is-invalid' : '' }}" rows="9" placeholder="Ingrese su mensaje">{{old('mensaje')}}</textarea>
              @if ($errors->has('mensaje'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('mensaje') }}</strong>
                </span>
            @endif
          </div>
          <button class="btn btn-success" type="submit" id="btnEnviar"> Enviar Mensaje</button>					
        </form>

        </a>
        </div>
        <div class="col-lg-6">
          <a class="boxed_list">

          <div class="main_title_2">
            <span><em></em></span>
            <h2>Ubicación</h2>
          </div>
      <div id="map">
        
      </div><p>_</p>
      </a>
        </div>
    </div>
  </div>
 
  @include('informacion.serviciosFooter')

  <section class="hero_in general">
        <div class="wrapper">
          <div class="container">
            <div class="row">
              <div class="col-lg-4">
                <h1 class="fadeInUp fa fa-home" style="font-size: 25px"><span></span>Dirección:</h1><h1 class="fadeInUp" style="font-size: 15px"> Parroquia Pastocalle, sector el Progreso</h1>
              </div>
            
              <div class="col-lg-4">
                <h1 class="fadeInUp fa fa-users" style="font-size: 25px"><span></span>Siguenos:</h1><h1 class="fadeInUp" style="font-size: 30px;color:white"><a title="facebook" href="https://www.facebook.com/profile.php?id=100009239601553" style="color:white"><b class="fa fa-facebook"></b></a></h1>
              </div>

              <div class="col-lg-4">
                <h1 class="fadeInUp fa fa-phone" style="font-size: 25px"><span></span>Teléfono:</h1><h1 class="fadeInUp" style="font-size: 15px"> (03) 2719140</h1>
              </div>
            </div>
          </div>

        </div>

  </section>


    <script>
       var sonido=false;
        Lobibox.notify.DEFAULTS = $.extend({}, Lobibox.notify.DEFAULTS, {
          iconSource: 'fontAwesome',
          pauseDelayOnHover: true,
          continueDelayOnInactiveTab: false,
          position: 'center bottom',
          rounded: true,
        });

         $( "#formInscripcion" ).submit(function( event ) {
          $('#btnEnviar').prop('disabled', true);          
          $(this).submit();
        });

        window.onload = function(){
          document.getElementById("con").style.color='#A0C55C';
        }
  
    </script>


    

    <!-- notificaciones flash data -->
     @foreach (['default', 'success', 'error', 'warning','info'] as $msg)
        @if(Session::has($msg))
        
            <script>
                // default,success,error,warning,info
             Lobibox.notify('{{$msg}}', {
                title: 'Detalle',
                sound:sonido,
                msg: "{{ config('app.nameapp', 'ESCUELA S.J') }} {{ Session::get($msg) }}"
            });

            </script>
        @endif
    @endforeach


 <script>
  // Initialize and add the map
  function initMap() {
    // The location of Uluru
    var uluru = {lat: -0.7336131, lng: -78.6104265};
    var ubila = {lat: -0.7336131, lng: -78.6104265};
    // The map, centered at Uluru
    var map = new google.maps.Map(
        document.getElementById('map'),
        {
            zoom: 15,
          center: uluru
          });
    // The marker, positioned at Uluru

    var infowindow = new google.maps.InfoWindow({
            content: 'Escuela de Conducción Pastocalle',
            position: ubila
          });
          infowindow.open(map);

    var marker = new google.maps.Marker({
      position: uluru,
      map: map,
      title: 'Sindicato (Escuela de conducción Pastocalle)'
    });
    
  }
</script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD0Ko6qUa0EFuDWr77BpNJOdxD-QLstjBk&callback=initMap"></script> 
@endsection