@extends('layouts.menuNav')
@section('content')
	<section class="hero_in restaurants">
		<div class="wrapper">
			<div class="container">
				<h1 class="fadeInUp"><span></span>Actualización de Conocimientos</h1>
			</div>
		</div>
	</section><br>
  	<div id="sign-in-dialog2"  class="zoom-anim-dialog mfp-hide">
        <div class="small-dialog-header2">
            <div  id="faq">
          		<center><img src="{{asset('plusCliente/img/ant.png')}}" class="img-fluid" width="350px"></center>
         
               <p align="justify" style="padding: 20px">
				<b>Resolución N°. 010-DIR-2015-ANT </b><br>
               Capítulo VI, Artículo 61: Una vez graduado el alumno tendrá máximo un (1) año para brevetarse de acuerdo a lo que dispone el reglamento, si no pudiese obtener su licencia tendrá tres (3) años como máximo contados desde la fecha en que culminó sus estudios para regularizar y obtener su licencia de conducir por medio del proceso de actualización de conocimientos. En el caso de no regularizarse dentro de los tres (3) años establecidos en el presente reglamento y de no aprobar las evaluaciones, el usuario deberá realizar nuevamente el curso de conducción.</p>  
          </div>
    	</div>
    </div>
	<div class="col-lg-12">
		<div class="isotope-wrapper">
			<div class="box_list isotope-item popular">
				<div class="row no-gutters">
					<div class="col-lg-4">
						<figure>
							<small>Actualización</small><br>
							<a href="#0">
								<img src="{{asset('plusCliente/img/actualizacion.jpg')}}"  class="img-fluid" style="margin-top: 40px;margin-left: 20px">
							</a>
						</figure>
					</div>
					<div class="col-lg-8">
						<div class="wrapper">
							<h3><a href="restaurant-detail.html">De Que Se Trata?</a></h3>
							<p ALIGN="justify" style="font-size: 16px">La actualización de conocimientos lo deben realizar las personas que no realizaron el proceso para brevetar su licencia en el tiempo de un año. En el tiempo que permanezca en el curso debe aprobar 5 examenes, 4 teóricos: leyes de tránsito, mecánica, educación vial y conducción teórica y una práctica: conducción práctica mas el examen psicosensométrico  <br><span class="price"> Más información ver resolución: </span>
								<a href="#sign-in-dialog2" id="sign-in1" class="login" title="Ver">
									<i class="fa fa-eye"></i> Ver Resolución
									</a>								
								</a>
							</p>
							<span class="price">Formando Profesionales con Liderazgo y Conciencia Social</span>
						</div>
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
				document.getElementById("acCo").style.color='#A0C55C';
			}
	</script>
@endsection