@extends('layouts.menuNav')
@section('content')
	<section class="hero_in restaurants">
		<div class="wrapper">
			<div class="container">
				<h1 class="fadeInUp"><span></span>Misión y Visión</h1>
			</div>
		</div>
	</section>
	<br>
	<div class="col-lg-12">
		<div class="isotope-wrapper">
			<div class="box_list isotope-item popular">
				<div class="row no-gutters">
					<div class="col-lg-4">
						<figure>
							<small>Trabajo</small>
							<a href="#0"><img src="{{asset('plusCliente/images/mision_vision/mision.jpeg')}}"  class="img-fluid" >
						</figure>
					</div></a>
					<div class="col-lg-8">
						<div class="wrapper">
							<h3><a href="restaurant-detail.html">Misión</a></h3>
							<p ALIGN="justify" style="font-size: 18px">Formar conductores profesionales responsables, éticos y solidarios comprometidos con la sociedad y el medio ambiente, brindando un trato personalizado, con transparencia y calidad que permita desarrollar habilidades y destrezas técnico-operativas, inspirado su crecimiento personal, sobre todo orientado a salvaguardar la vida y los bienes públicos, a fin de contribuir con el mejoramiento de la seguridad vial y desarrollo del país.</p>
							<span class="price">Formando Profesionales con Liderazgo y Conciencia Social</span>
						</div>
						<ul>
							Escuela de Conducción Profesional Pastocalle
						</ul>
					</div>
				</div>
			</div>
			<div class="box_list isotope-item popular">
				<div class="row no-gutters">
					<div class="col-lg-4">
						<figure>
							<small>Proyección</small>
							<a href="#0"><img src="{{asset('plusCliente/images/mision_vision/vision.jpeg')}}" class="img-fluid" alt="" width="800" height="533">
						</figure>
					</div></a>
					<div class="col-lg-8">
						<div class="wrapper">
							<h3><a href="restaurant-detail.html">Visión</a></h3>
							<p ALIGN="justify" style="font-size: 18px">Ser la Escuela de Capacitación de Conducción Profesional líder en el país, por la calidad de conductores profesionales que ofrece a la sociedad, capaces de implantar alternativas de solución a los problemas de la colectividad, garantizando la libre y segura movilidad terrestre del Ecuador. </p>
							<span class="price">Formando Profesionales con Liderazgo y Conciencia Social</span>
						</div>
						<ul>
							Escuela de Conducción Profesional Pastocalle
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	@include('informacion.serviciosFooter')

		<script type="text/javascript">
				window.onload = function(){
					document.getElementById("about").style.color='#A0C55C';
					document.getElementById("mV").style.color='#A0C55C';
				}
		</script>
@endsection