@extends('layouts.menuNav')
@section('title', 'Contactos')
@section('content')
<link rel="stylesheet" href="{{asset('plusCliente/css/blog.css')}}">

<section class="hero_in hotels hidden-*-up">
	<div class="wrapper">
		<div class="container">
			<h1 class="fadeInUp"><span></span>últimas noticias</h1>
		</div>
	</div>
</section>

<div class="container margin_60_35">
    @if($noticias->count()>0)
      <div class="row">
        <div class="col-lg-9">
        @foreach($noticias as $not)
          <article class="blog wow fadeIn">
            <div class="row no-gutters">
              <div class="col-lg-7">
                <figure>
                  <a href="{{route('detalleNoticia',['id'=>$not->id])}}"><img src="{{asset('images/noticias').'/'.$not->foto}}" alt="">
                    <div class="preview"><span>Leer más</span></div>
                  </a>
                </figure>
              </div>
              <div class="col-lg-5">
                <div class="post_info">
                  <small>{{$not->updated_at->format('d M Y')}} {{$not->updated_at->diffForHumans()}}</small>
                  <h5><a href="{{route('detalleNoticia',['id'=>$not->id])}}">{{Str::limit($not->titulo, $limit = 62, $end = '...')}}</a></h5>
                  <p>{!!Str::limit($not->detalle, $limit = 150, $end = '...')!!}</p>
                  <ul>
                    <li>
                      <div class="thumb"><img src="{{asset('images/noticias/driver.svg')}}" width="25px;" alt=""></div> {{$not->usuario->nombres ?? "Escuela"}} {{$not->usuario->apellidos ?? ''}}
                    </li>
                    <li> 
                      <!-- <a href=""><img src="{{asset('images/noticias/facebook.svg')}}" width="20px;" alt=""></a> -->
                      <div id="fb-root"></div>
                        <script>(function(d, s, id) {
                          var js, fjs = d.getElementsByTagName(s)[0];
                          if (d.getElementById(id)) return;
                          js = d.createElement(s); js.id = id;
                          js.src = 'https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v3.1';
                          fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));</script>
                        <div class="fb-share-button" data-href="{{route('detalleNoticia',['id'=>$not->id])}}" data-layout="button" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%3A8000%2Fdetalle-noticia%2F4&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </article>
          <!-- /article -->
        @endforeach

          {{ $noticias->links() }}
          <!-- /pagination -->
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
              
          
          <!-- /widget -->

          <!-- /widget -->
       
        </aside>
        <!-- /aside -->

      </div>
      <!-- /row -->


   @else
   
    <div class="alert alert-primary" role="alert">
        <img src="{{asset('images/noticias/blog.svg')}}" alt="" width="75px;">
      <strong>No tenemos ninguna noticia por el momento con " {{session('sindato')}} "</strong>
      <a href="{{route('noticiasCliente')}}" class="btn btn-link">Ver todas.. 
        <i class="fa fa-spinner fa-spin fa-fw"></i>
      </a>
    </div>
    @endif
</div>
<!-- /container -->
  <script>
    window.onload = function(){
      document.getElementById("blo").style.color='#A0C55C';
    }
  </script>
@endsection