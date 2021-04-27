@extends('layouts.menuNav')
@section('content')
	<section class="hero_in restaurants">
		<div class="wrapper">
			<div class="container">
				<h1 class="fadeInUp"><span></span>Conducción a la Defensiva</h1>
			</div>
		</div>
	</section><br>
	
	<div class="col-lg-12">
		<div class="isotope-wrapper">
			<div class="box_list isotope-item popular">
				<div class="row no-gutters">
					<div class="col-lg-4">
						<figure>
							<small>A la Defensiva</small><br>
							<a href="#0"><img src="{{asset('plusCliente/images/cd.jpg')}}"  class="img-fluid" style="margin-top: 40px">
							</a>
						</figure>
					</div>
					<div class="col-lg-8">
						<div class="wrapper">
							<h3><a href="restaurant-detail.html">De Que Se Trata?</a></h3>
							<p ALIGN="justify" style="font-size: 16px">Este tipo de curso permite conocer las técnicas defensivas para conducir, pueden mantenerte a salvo a ti y a los demás en la carretera. Conducir a la defensiva significa simplemente conducir sin provocar un accidente que pueda evitarse. Está diseñado especialmente para empresas que desean otorgar mayor seguridad en las vías a sus conductores.<span style="font-size: 20px; margin-left: 10px" >
							</span></p>
								<h3><strong>Además te sirve para el adecuado  manejo de transporte de sustancias peligrosas</strong></h3>
							<span class="price">Formando Profesionales con Liderazgo y Conciencia Social</span>
							
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
		
	
	@include('informacion.serviciosFooter')
	
	<script type="text/javascript">
			window.onload = function(){
				document.getElementById("ser").style.color='#A0C55C';
				document.getElementById("coDef").style.color='#A0C55C';
			}
	</script>
@endsection