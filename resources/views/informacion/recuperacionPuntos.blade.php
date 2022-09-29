@extends('layouts.menuNav')
@section('content')
	<section class="hero_in restaurants">
		<div class="wrapper">
			<div class="container">
				<h1 class="fadeInUp"><span></span>Recuperación de Puntos</h1>
			</div>
		</div>
	</section><br>
	<div class="col-lg-12">
		<div class="isotope-wrapper">
			<div class="box_list isotope-item popular">
				<div class="row no-gutters">
					<div class="col-lg-4">
						<figure>
							<small>Práctica</small><br>
							<a href="#0"><img src="{{asset('plusCliente/images/servicios/recuperacion.jpeg')}}"  class="img-fluid" style="margin-top: 40px;margin-left: 20px">
							</a>
						</figure>
					</div>
					<div class="col-lg-8">
						<div class="wrapper">
							<h3><a href="restaurant-detail.html">De Que Se Trata?</a></h3>
							<p ALIGN="justify" style="font-size: 16px">Los ciudadanos que requieren recuperar los puntos en la licencia de conducir profesionales y no profesionales, deberán aprobar un curso de concienciación, reeducación y rehabilitación vial,  impartidos por los Centros Especializados de Capacitación para Recuperación de Puntos de Licencias de Conducir, aprobados por la Agencia Nacional de Tránsito
								<span style="font-size: 20px; margin-left: 10px" >
								</span>
							</p>
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

	<div class="tt-promo-03" style="color:white">
		<div class="container margin_50_35">
				<div class="main_title_2">
				<h2 style="color: white">Horarios</h2>
				<p>En el Que Puedes Acercarte al Curso de Recuperación de Puntos</p>
			</div>
			<div class="row">
				<div class="col-md-4" >
					<a class="boxed_list" href="#0">
						<img src="{{asset('plusCliente/images/iconos/calendar.svg')}}" width="80px">
						<h3 style="color: white">4 fines de semana</h3>
						<p style="color: white">8h00  a 11h30 <br>
						
						<p> </p>
					</a>
				</div>
				<div class="col-md-4">
					<a class="boxed_list" href="#0">
						<img src="{{asset('plusCliente/images/iconos/clock.svg')}}" width="80px">
						<h3 style="color: white">Horas</h3>
						<p style="color: white">30<br>
						</p>
					</a>
				</div>
				<div class="col-md-4">
					<a class="boxed_list" href="#0">
						<img src="{{asset('plusCliente/images/iconos/money.svg')}}" width="80px">
						<h3 style="color: white">Total</h3>
						<p style="color: white">$67,92/Persona<br>
						</p>
					</a>
				</div>
			</div>
		</div>
	</div>

	@include('informacion.serviciosFooter')
		
	<script type="text/javascript">
			window.onload = function(){
				document.getElementById("ser").style.color='#A0C55C';
				document.getElementById("recPu").style.color='#A0C55C';
			}
	</script>
@endsection