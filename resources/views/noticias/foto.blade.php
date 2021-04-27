@if($n->foto)
<a href="{{ asset('images/noticias').'/'.$n->foto }}">
    <img src="{{ asset('images/noticias').'/'.$n->foto }}" alt="" class="img-fluid" width="50px;">
</a>
@endif