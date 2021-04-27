<div class="btn-group btn-group-sm" role="group" aria-label="...">
        <a href="{{ route('editarNoticia',['id'=>$n->id]) }}" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Editar">
            <i class="fa fa-pencil"></i>
        </a>
        <button type="button" class="btn btn-danger" onclick="eliminar(this);" data-url="{{ route('elimininarNoticia',['id'=>$n->id]) }}" data-toggle="tooltip" data-placement="top" title="Eliminar">
            <i class="fa fa-trash"></i>
        </button>
    </div>
