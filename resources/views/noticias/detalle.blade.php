@extends('layouts.menuNav')
@section('title', 'Contactos')
@section('content')

<style>
  .imagennoticia{
    width: 100%;
  }
</style>
<section class="hero_in hotels hidden-*-up">
	<div class="wrapper">
		<div class="container">
			<h1 class="fadeInUp"><span></span>Detalle de noticia</h1>
		</div>
	</div>
</section>

  
    <div class="container margin_60_35">
      <div class="row">
        <div class="col-lg-9">
          @if($noticia)

            <meta property="og:url"           content="{{route('detalleNoticia',['id'=>$noticia->id])}}" />
            <meta property="og:type"          content="website" />
            <meta property="og:title"         content="{{$noticia->titulo}}" />
            <meta property="og:description"   content="{!!Str::limit($noticia->detalle, $limit = 150, $end = '...')!!}" />
            <meta property="og:image"         content="{{asset('images/noticias').'/'.$noticia->foto}}" />

            

          <div class="bloglist singlepost">
            <img alt="" class="img img-fluid img-thumbnail imagennoticia" src="{{asset('images/noticias').'/'.$noticia->foto}}">
            <h1>{{$noticia->titulo}}</h1>
            <div class="postmeta">
              <ul>
                <!-- <li><a href="#"><i class="icon_folder-alt"></i> Collections</a></li> -->
                <li><a href="#"><i class="icon_clock_alt"></i> {{$noticia->created_at}}</a></li>
                <li><a href="#"><i class="icon_pencil-edit"></i> {{$noticia->updated_at->diffForHumans()}}</a></li>
                <li><a href="#"><i class="fa fa-user"></i> {{$noticia->usuario->nombre ?? "Escuela"}} {{$noticia->usuario->apellido ?? ""}}</a></li>
              </ul>
            </div>
            <!-- /post meta -->
            <div class="post-content">
              <div class="dropcaps text-justify">
                {!!$noticia->detalle!!}
              </div>

               <div id="fb-root"></div>
                        <script>(function(d, s, id) {
                          var js, fjs = d.getElementsByTagName(s)[0];
                          if (d.getElementById(id)) return;
                          js = d.createElement(s); js.id = id;
                          js.src = 'https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v3.1';
                          fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));</script>
                        <div class="fb-share-button" data-href="{{route('detalleNoticia',['id'=>$noticia->id])}}" data-layout="button" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%3A8000%2Fdetalle-noticia%2F4&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>

            </div>
            <div class="fb-comments" data-href="{{route('detalleNoticia',['id'=>$noticia->id])}}" data-numposts="10"></div>
            <!-- /post -->
          </div>
          @else
          <div class="alert alert-primary" role="alert">
            <img src="{{asset('images/noticias/blog.svg')}}" alt="" width="75px;">
          <strong>No tenemos ninguna noticia por el momento con " {{session('sindato')}} "</strong>
          <a href="{{route('noticiasCliente')}}" class="btn btn-link">Ver todas.. 
            <i class="fa fa-spinner fa-spin fa-fw"></i>
          </a>
        </div>
        @endif
          <!-- /single-post -->


          <hr>

      
        </div>
        <!-- /col -->

        <aside class="col-lg-3">
          <div class="widget">
             <form action="{{route('noticiasCliente')}}" method="get">
              <div class="form-group">
                <input type="search" name="texto" id="texto" class="form-control" placeholder="Buscar noticias...">
              </div>
              <button type="submit" id="submit" class="btn_1 rounded"> Buscar Noticia</button>
            </form>
          </div>
          <!-- /widget -->
          <div class="widget">
            <div class="widget-title">
              <h4>Últimas noticias</h4>
            </div>
            <ul class="comments-list">

              @foreach($noticiames as $nm)
              <li>
                <div class="alignleft">
                  <a href="{{route('detalleNoticia',['id'=>$nm->id])}}"><img src="{{asset('images/noticias').'/'.$nm->foto}}" alt=""></a>
                </div>
                <small>{{$nm->created_at}}</small>
                <h3><a href="{{route('detalleNoticia',['id'=>$nm->id])}}" title="">{{Str::limit($nm->titulo, $limit = 25, $end = '...')}}</a></h3>
              </li>
              @endforeach

            </ul>

          </div>
         
        </aside>
        <!-- /aside -->
      </div>

      <!-- /row -->
    </div>
    <!-- /container -->
    
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.1';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

</script>

    <script>

    window.onload = function(){
      document.getElementById("blo").style.color='#A0C55C';
    }
    </script>
@endsection