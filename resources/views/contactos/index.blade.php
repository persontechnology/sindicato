@extends('layouts.app')

@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('home')}}">Inicio</a></li>
    <li class="breadcrumb-item active" aria-current="page">Administración de Contactos</li>
</ol>
</nav>
<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="card">
                 <div class="card-header bg-dark text-white">Contactos</div>
                  <div class="card-body">
                   
                    <div class="table-responsive mt-2">
                      <table class="table" id="tablenoticia">
                          <thead>
                            <tr>
                              <th scope="col">Servicio</th>
                              <th scope="col">Email</th>
                              <th scope="col">Cliente</th>
                              <th scope="col">Mensaje</th>
                              <th scope="col">Teléfono</th>
                              <th scope="col">Fecha</th>
                              <th scope="col">Estado</th>
                              <th scope="col">Acción</th>
                            </tr>
                          </thead>
                          <tbody>
                              @foreach ($contactos as $noticia)
                              <tr>
                                  <th scope="row">
                                      {{ $noticia->servicio }}
                                  </th>
                                  <th scope="row">
                                    {{ $noticia->email }}
                                </th>
                                  <td>
                                      {{ $noticia->nombre }}
                                  </td>
                                  <td>
                                      {{ $noticia->mensaje }}
                                  </td>
                                  <td>
                                     {{ $noticia->telefono }}
                                  </td>
                                  <td>
                                    {{ $noticia->created_at }}
                                </td>
                                  <td>
                                      
                                    @if ($noticia->estado)
                                      <a href="{{ route('marcarContacto',['id'=>$noticia->id]) }}" class="badge badge-success">Marcado como visto</a>
                                    @else
                                        <a href="{{ route('marcarContacto',['id'=>$noticia->id]) }}" class="badge badge-warning">Marcado como no visto</a>
                                    @endif
                                  </td>
                                  
                                  <td>
                                    <button type="button" onclick="eliminar(this);" data-url="{{ route('eliminarContacto',['id'=>$noticia->id]) }}" class="btn btn-outline-danger btn-sm ml-1" data-toggle="tooltip" data-placement="bottom" title="Eliminar"><i class="fa fa-trash"></i></button>
                                  </td>
                                </tr>
                              @endforeach
                            
                          </tbody>
                        </table>
                     

                  </div>
                  {{ $contactos->links() }}
                  </div>
                  
                </div>


        </div>
    </div>
</div>



<script>
    
$('#menuContactos').addClass('active');

</script>


@endsection
