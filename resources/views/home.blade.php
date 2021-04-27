@extends('layouts.app')
@section('breadcrumbs', Breadcrumbs::render('home'))
@section('content')



<div class="container">
  <div class="row">

    <div class="col-md-4 mt-1">
        <div class="card text-white" style="background-color: #2BBBAD;">
          <div class="card-header">Mi perfil</div>
          <div class="card-body">
            <a href="{{route('miPerfil')}}">
                <img src="{{asset('images/home/user1.svg')}}" alt="" class="img-fluid">
            </a>
          </div>
        </div>
    </div> 


    @if(Auth::user()->perfil->nombre=="Admin" || Auth::user()->perfil->nombre=="Secre")
       <div class="col-md-4 mt-1">
            <div class="card text-white bg-success">
              <div class="card-header">Noticias</div>
              <div class="card-body">
                <a href="{{route('noticiasAdmin')}}">
                    <img src="{{asset('images/home/letter.svg')}}" alt="" class="img-fluid">
                </a>
              </div>
            </div>
        </div>  
        <div class="col-md-4 mt-1">
            <div class="card text-white" style="background-color: #9933CC;">
              <div class="card-header">Contactos</div>
              <div class="card-body">
                <a href="{{route('contactosAdmin')}}">
                    <img src="{{asset('images/home/phone-book.svg')}}" alt="" class="img-fluid">
                </a>
              </div>
            </div>
        </div>    
    
      <div class="col-md-12" id="reporte"></div>

    @endif

  </div>
</div>



<script>  
    $('#menuInicio').addClass('active');
</script>
@endsection
