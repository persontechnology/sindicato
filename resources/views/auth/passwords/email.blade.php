@extends('layouts.app')
@section('breadcrumbs', Breadcrumbs::render('restablecerPassword'))
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card  mt-5">
                <div class="card-header text-center">
                    <img src="{{asset('plusCliente/images/a.png')}}" alt="" class="img-fluid" width="120px;">
                    <br>
                {{ __('Restablecer la contraseña') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Dirección de correo electrónico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="Ingrese email.">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <button type="submit" class="btn btn-default btn-block btn-lg">
                            <i class="fa fa-paper-plane-o"></i>
                            {{ __('Enviar enlace restablecer contraseña') }}
                        </button>
                        <a href="{{route('login')}}" class="btn btn-link btn-block">
                            <i class="fa fa-user"></i>
                            {{ __('Ingresar') }}
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
     $('#menuLogin').addClass('active');
</script>
@endsection
