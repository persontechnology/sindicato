@extends('layouts.app')
@section('breadcrumbs', Breadcrumbs::render('home'))
@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            Mi perfil
        </div>
        <div class="card-body">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Actualizar</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Cambiar clave</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <br>
                        <form method="POST" action="{{ route('actualizarMiPerfil') }}">
                            @csrf
            
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Usuario') }}</label>
            
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ Auth::user()->name }}" required autofocus placeholder="Ingrese nombre de usuario..">
            
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
            
                            <div class="form-group row">
                                <label for="cedula" class="col-md-4 col-form-label text-md-right">{{ __('Cédula') }}</label>
            
                                <div class="col-md-6">
                                    <input id="cedula" type="text" class="form-control{{ $errors->has('cedula') ? ' is-invalid' : '' }}" name="cedula" value="{{ Auth::user()->cedula }}" required  placeholder="Ingrese cédula..">
            
                                    @if ($errors->has('cedula'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('cedula') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
            
                            <div class="form-group row">
                                <label for="nombres" class="col-md-4 col-form-label text-md-right">{{ __('Nombres') }}</label>
            
                                <div class="col-md-6">
                                    <input id="nombres" type="text" class="form-control{{ $errors->has('nombres') ? ' is-invalid' : '' }}" name="nombres" value="{{ Auth::user()->nombres }}" required  placeholder="Ingrese nombres..">
            
                                    @if ($errors->has('nombres'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('nombres') }}</strong>
                                        </span>
                                    @endif
                                </div>
            
                            </div>
            
                            <div class="form-group row">
                                <label for="apellidos" class="col-md-4 col-form-label text-md-right">{{ __('Apellidos') }}</label>
            
                                <div class="col-md-6">
                                    <input id="apellidos" type="text" class="form-control{{ $errors->has('apellidos') ? ' is-invalid' : '' }}" name="apellidos" value="{{ Auth::user()->apellidos }}" required  placeholder="Ingrese apellidos..">
            
                                    @if ($errors->has('apellidos'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('apellidos') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
            
            
                            <div class="form-group row">
                                <label for="telefono" class="col-md-4 col-form-label text-md-right">{{ __('Teléfono') }}</label>
            
                                <div class="col-md-6">
                                    <input id="telefono" type="number" class="form-control{{ $errors->has('telefono') ? ' is-invalid' : '' }}" name="telefono" value="{{ Auth::user()->telefono }}" required >
            
                                    @if ($errors->has('telefono'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('telefono') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
            
            
                            
                            
                            <div class="form-group row">
                                <label for="direccion" class="col-md-4 col-form-label text-md-right">{{ __('Dirección') }}</label>
            
                                <div class="col-md-6">
                                    
                                    <textarea id="direccion" class="form-control{{ $errors->has('direccion') ? ' is-invalid' : '' }}" name="direccion" required="" placeholder="Ingrese dirección..">{{Auth::user()->direccion}}</textarea>
            
                                    @if ($errors->has('direccion'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('direccion') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
            
                            <div class="form-group row">
                                <label for="edad" class="col-md-4 col-form-label text-md-right">{{ __('Edad') }}</label>
            
                                <div class="col-md-6">
                                    <input id="edad" type="number" min="10" max="100" class="form-control{{ $errors->has('edad') ? ' is-invalid' : '' }}" name="edad" value="{{ Auth::user()->edad }}" required  placeholder="Ingrese edad..">
            
                                    @if ($errors->has('edad'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('edad') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
            
                            <div class="form-group row">
                                <label for="edad" class="col-md-4 col-form-label text-md-right">{{ __('Sexo') }}</label>
            
                                <div class="col-md-6">
                                    
                                    <select name="sexo" id="" class="form-control{{ $errors->has('edad') ? ' is-invalid' : '' }}" required>
                                        <option value="Hombre" {{Auth::user()->sexo=='Hombre' ? 'selected' : ''}}>Hombre</option>
                                        <option value="Mujer" {{Auth::user()->sexo=='Mujer' ? 'selected' : ''}}>Mujer</option>
                                    </select>
            
                                    @if ($errors->has('edad'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('edad') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
            
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-deep-purple float-right">
                                        {{ __('Actualizar información') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
            
                    <!-- cambiar password -->
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <br>
                        <form action="{{route('actualizarPassword')}}" method="post">
                            @csrf
                            <div class="form-group row">
                                <label for="passwordAntiguo" class="col-md-4 col-form-label text-md-right">{{ __('Password antiguo') }}</label>
            
                                <div class="col-md-6">
                                    <input id="passwordAntiguo" type="password" class="form-control{{ $errors->has('passwordAntiguo') ? ' is-invalid' : '' }}" name="passwordAntiguo" required placeholder="******">
            
                                    @if ($errors->has('passwordAntiguo'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('passwordAntiguo') }}</strong>
                                        </span>
                                        
                                    @endif
            
            
                                    
                                </div>
                            </div>
            
            
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Nuevo password') }}</label>
            
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="******">
            
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        <script>
                                        $('#nav-tab a[href="#nav-profile"]').tab('show')
                                    </script>
                                    @endif
                                </div>
                            </div>
            
                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirme Password') }}</label>
            
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="******">
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-deep-purple float-right">
                                        {{ __('Actualizar password') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                        
                    </div>
                    
                </div>
        </div>
        
    </div>
</div>

@if(session('errorPassworAntiguo'))
<script>
     Lobibox.notify('error', {
                title: 'Password antiguo incorrecto',
                sound:false,
                msg: "{{ session('errorPassworAntiguo') }}"
            });
      $('#nav-tab a[href="#nav-profile"]').tab('show')
  </script>
@endif
<script>
    $('#menuInicio').addClass('active');
</script>
@endsection
