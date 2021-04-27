<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
	
	body {
	  border: 20px solid #bdc3c7;
	  padding: 20px;
	  max-width: 700px;
	  width: 80%;
	  margin: 20px auto;
	  font-family: 'Source Sans Pro', sans-serif;
	}

	.quote {
	  border-left: 5px solid #bdc3c7;
	  padding-left: 5px;
	}

	.date {
	  text-transform: uppercase;
	  color: #3499bd;
	  letter-spacing: 2px;
	}

	h2 {
	  color: #2c3e50;
	  font-size: 2.0rem;
	}

	hr{
	    border: 0;
	    height: 0;
	    border-top: 1px solid #bdc3c7;
	    border-bottom: 1px solid rgba(255, 255, 255, 0.3);
	}

	.post {
	  margin: 20px;
	}

	/* Footer */
	.footer {
	    padding: 5px;
	    text-align: center;
	    background: #32a067;
	    margin-top: 5px;
	}

	
</style>
</head>
<body>
	@if($noticia)
	
    <div class="post">
      <div class="date">{{$noticia->updated_at->format('d M Y')}}
      </div>

    </div>

    <h2>{{$noticia->titulo}}</h2>

    <div>
    	{!!$noticia->detalle!!}
    </div>

    <hr>
    
    <a href="{{route('detalleNoticia',['id'=>$noticia->id])}}">Ver noticia</a>
	@else
	<p>No existe noticia</p>
	@endif
	<div class="footer">
	  &copy; {{date('Y')}} {{config('app.name')}}
	</div>
</body>
</html>
