@extends('layouts.app')
@section('breadcrumbs', Breadcrumbs::render('editarNoticia',$n))
@section('content')
<script src="{{asset('dist/ckeditor/ckeditor.js')}}"></script>

<div class="container">
    <div class="card">
        <div class="card-header">
            Editar noticia
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('actualizarNoticia') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$n->id}}">
    
                <div class="form-group row">
                    <label for="titulo" class="col-md-2 col-form-label text-md-right">{{ __('Titulo') }}</label>
    
                    <div class="col-md-10">
                        <input id="titulo" type="text" class="form-control{{ $errors->has('titulo') ? ' is-invalid' : '' }}" name="titulo" value="{{ $n->titulo }}" required autofocus placeholder="Ingrese">
    
                        @if ($errors->has('titulo'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('titulo') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
    
                <div class="form-group row">
                    <label for="detalle" class="col-md-2 col-form-label text-md-right">{{ __('Detalle') }}</label>
    
                    <div class="col-md-10">
                        <textarea id="detalle" class="form-control{{ $errors->has('detalle') ? ' is-invalid' : '' }}" name="detalle" required>{!! $n->detalle !!}</textarea>
                    
    
                        @if ($errors->has('detalle'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('detalle') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                
                @if($n->foto)
                <div class="form-group row">
                    <label for="foto" class="col-md-2 col-form-label text-md-right">{{ __('Foto actual') }}</label>
                    <div class="col-md-10">
                        <a href="{{asset('images/noticias').'/'.$n->foto}}" class="">
                            <img src="{{asset('images/noticias').'/'.$n->foto}}" alt="" class="img-fluid" width="45px;">
                        </a>
                    </div>
                </div>
                @endif
    
                <div class="form-group row">
                    <label for="foto" class="col-md-2 col-form-label text-md-right">{{ __('Foto nueva') }}</label>
    
                    <div class="col-md-10">
                        <input id="foto" type="file" class="form-control{{ $errors->has('foto') ? ' is-invalid' : '' }}" name="foto">
    
                        @if ($errors->has('foto'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('foto') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
    
                
                
                
                <button type="submit" class="btn btn-deep-purple float-right">
                    {{ __('Actualizar noticia') }}
                </button>
        </form>
        </div>
        
    </div>
</div>

<script>
    
    $('#menuNoticiasAdmin').addClass('active');
    CKEDITOR.replace( 'detalle' );
</script>
@endsection
