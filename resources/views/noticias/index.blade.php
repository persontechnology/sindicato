@extends('layouts.app')
@section('breadcrumbs', Breadcrumbs::render('noticiasAdmin'))
@section('content')

<script src="{{asset('dist/ckeditor/ckeditor.js')}}"></script>
<!-- file -->
<link rel="stylesheet" href="{{asset('dist/bootstrap-fileinput/css/fileinput.min.css')}}">

<script src="{{asset('dist/bootstrap-fileinput/js/fileinput.min.js')}}"></script>
<script src="{{asset('dist/bootstrap-fileinput/js/locales/es.js')}}"></script>
<script src="{{asset('dist/bootstrap-fileinput/themes/fa/theme.min.js')}}"></script>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link {{ $errors->any()?'':'active' }}" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                    aria-selected="true">Listado</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $errors->any()?'active':'' }}" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                    aria-selected="false">Nuevo</a>
                </li>
                
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade {{ $errors->any()?'':'show active' }}" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="table-responsive mt-2">
                        <table class="table" id="tablenoticia">
                            <thead>
                              <tr>
                                <th scope="col">Titulo</th>
                                <th scope="col">Detalle</th>
                                <th scope="col">Imagen</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Acción</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($noticias as $noticia)
                                <tr>
                                    <th scope="row">
                                        {{ $noticia->titulo }}
                                    </th>
                                    <td>
                                        {!! $noticia->detalle !!}
                                    </td>
                                    <td>
                                        <img src="{{ Storage::url($noticia->foto) }}" alt="" class="img-fluid">
                                    </td>
                                    <td>
                                        @include('noticias.foto',['n'=>$noticia])
                                    </td>
                                    <td>
                                        
                                        @if ($noticia->estado)
                                        <a href="{{ route('estadoNoticia',['id'=>$noticia->id]) }}" class="badge badge-success">Publicado</a>
                                        @else
                                        <a href="{{ route('estadoNoticia',['id'=>$noticia->id]) }}" class="badge badge-danger">Sin publicar</a>
                                        @endif
                                    </td>
                                    <td>
                                        @include('noticias.accion',['n'=>$noticia])
                                    </td>
                                  </tr>
                                @endforeach
                              
                            </tbody>
                          </table>
                       

                    </div>
                    {{ $noticias->links() }}
                </div>
                <div class="tab-pane fade {{ $errors->any()?'show active':'' }}" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    
                  <form method="POST" class="mt-2" action="{{ route('registrarNoticia') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row">
                        <label for="titulo" class="col-md-2 col-form-label text-md-right">{{ __('Título') }}</label>

                        <div class="col-md-10">
                            <input id="titulo" type="text" class="form-control{{ $errors->has('titulo') ? ' is-invalid' : '' }}" name="titulo" value="{{ old('titulo') }}" required autofocus placeholder="Ingrese">

                            @if ($errors->has('titulo'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('titulo') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="midetalle" class="col-md-2 col-form-label text-md-right">{{ __('Detalle') }}</label>

                        <div class="col-md-10">
                            
                            <textarea class="form-control" name="midetalle" id="midetalle" required="">{!!old('midetalle')!!}</textarea>
                            @if ($errors->has('midetalle'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('midetalle') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="foto" class="col-md-2 col-form-label text-md-right">{{ __('Foto') }}</label>

                        <div class="col-md-10">
                            <input id="foto" type="file" class="form-control{{ $errors->has('foto') ? ' is-invalid' : '' }}" name="foto" accept="image/*" required>

                            @if ($errors->has('foto'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('foto') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <button type="submit" class="btn btn-deep-purple float-right" id="btnEnviarNoticia">
                        {{ __('Crear noticia') }}
                    </button>
                </form>                          
                </div>
            </div>
        </div>
    </div>
    
</div>



<script>

  
$('#menuNoticiasAdmin').addClass('active');
CKEDITOR.replace( 'midetalle' );

$("#foto").fileinput({
    showUpload: false,
    theme:"fa",
    language:"es",
    previewFileType: "image",
    browseIcon: "<i class=\"fa fa-camera\"></i> ",
    browseClass: "btn btn-light",
    browseLabel: "Selecionar foto",
    removeClass: "btn btn-danger",
    uploadClass: "btn btn-info",
    allowedFileTypes: ["image"],
    allowedFileExtensions: ["jpg", "png", "jpeg"],
    showCaption: false

});
$('#tablenoticia').DataTable();
</script>

@endsection
