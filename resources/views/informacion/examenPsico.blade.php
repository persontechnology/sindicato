@extends('layouts.menuNav')
@section('content')
	<section class="hero_in restaurants">
		<div class="wrapper">
			<div class="container">
				<h1 class="fadeInUp"><span></span>Examen Psicosensométrico</h1>
			</div>
		</div>
	</section><br>
	<div class="col-lg-12">
		<div class="isotope-wrapper">
		<div class="box_list isotope-item popular">
			<div class="row no-gutters">
				<div class="col-lg-4">
					<figure>
						<small>Examen</small><br>
						<a href="#0"><img src="{{asset('plusCliente/images/servicios/examen.png')}}"  class="img-fluid" style="margin-top: 40px">
						</a>
					</figure>
				</div>
				<div class="col-lg-8">
					<div class="wrapper">
						<h3><a href="restaurant-detail.html">De Que Se Trata?</a></h3>
						<p ALIGN="justify" style="font-size: 16px">La psicosensometría tiene como objetivo fundamental, examinar la capacidad para responder a estímulos del individuo que se somete a este tipo de prueba.

						Los niveles de respuesta que se evalúan al paciente con el entorno son: la velocidad de reacción, la coordinación de movimientos y la capacidad de controlar su cuerpo para realizar acciones específicas.

						En este tipo de exámenes también se monitorea la capacidad visual y auditiva del usuario, además de examinar su historia clínica en relación con las enfermedades mentales que pueden generar dificultad a la hora de conducir, como la neurosis, problemas de sueño y otros. <span style="font-size: 20px; margin-left: 10px" >

						</span></p>
						<span class="price">Formando Profesionales con Liderazgo y Conciencia Social</span>
					</div>
					</ul>
				</div>
			</div>
		</div>
		</div>
	</div>
	<div class="tt-promo-03" style="color:white">
		<div class="container margin_50_35">
			<div class="main_title_2">

				<h2 style="color: white">Horarios</h2>
				<p>En el Que Puedes Acercarte a Rendir el Examen</p>
			</div>
			<div class="row">
				<div class="col-md-4" >
					<a class="boxed_list" href="#0">
						<img src="{{asset('plusCliente/images/iconos/calendar.svg')}}" width="80px">
						<h3 style="color: white">Lunes a Viernes</h3>
						<p style="color: white">8h00  a 13.00 <br>
						14h00  a 18h00 </p>
						<p> </p>
					</a>
				</div>
				<div class="col-md-4">
					<a class="boxed_list" href="#0">
						<img src="{{asset('plusCliente/images/iconos/clock.svg')}}" width="80px">
						<h3 style="color: white">Duración</h3>
						<p style="color: white">Indefinido/Depende de Usted..<br>_ </p>
						<p></p>
					</a>
				</div>
				<div class="col-md-4">
				<a class="boxed_list" href="#0">
					<img src="{{asset('plusCliente/images/iconos/money.svg')}}" width="80px">
					<h3 style="color: white">Total</h3>
					<p style="color: white">$18/Persona<br>_</p>
					<p ></p>
				</a>
				</div>
			</div>
		</div>
	</div>
	@include('informacion.serviciosFooter')
	<script type="text/javascript">
			window.onload = function(){
				document.getElementById("ser").style.color='#A0C55C';
				document.getElementById("exPsi").style.color='#A0C55C';
			}
	</script>
@endsection
