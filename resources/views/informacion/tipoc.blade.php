@extends('layouts.menuNav')
@section('content')
<section class="hero_in tours_detail">
	<div class="wrapper">
		<div class="container">
			<h1 class="fadeInUp"><span></span>Licencia Tipo C</h1>
		</div>
	</div>
</section>
<br>
<div class="container-fluid">
	<div class="container margin_50_35"  >
		<div class="main_title_2">
			<span><em></em></span>
			<h2 align="center">Requisitos Para la Licencia Tipo C </h2>
			<h3 align="justify" style="margin-left: 35px">Autorizados por la Agencia Nacional de Tránsito <b>N°. 063-DE-2012-ANT</b></h3>
		</div>
		<div class="row ">
			<div class="col-md-6">
				<div class="tt-img"><center>
					<img src="http://localhost:8000/plusCliente/img/auto2.png" alt="" style="width: 300px;margin-top: 20px">
				</center>
			</div>
			<div  id="faq">
				<center><h2><b>Malla Curricular</b></h2></center>
				<div role="tablist" class="add_bottom_45 accordion_2" id="payment">
					<div class="card">
						<div class="card-header" role="tab">
							<h5 class="mb-0">
								<a data-toggle="collapse" href="#collapseOne_payment" aria-expanded="true"><i class="indicator ti-minus"></i><h3>Módulo Básico</h3></a>
							</h5>
						</div>
						<div id="collapseOne_payment" class="collapse show" role="tabpanel" data-parent="#payment">
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-striped">
										<thead>
										</thead>
										<tbody>
											<tr>
												<td><strong>No</strong></td>
												<td><strong>Asignatura</strong></td>
												<td><strong>Horas</strong></td>
											</tr>
											<tr>
												<td>1</td>
												<td>Educación Vial</td>
												<td>40</td>
											</tr>
											<tr>
												<td>2</td>
												<td>Ley y Reglamentos</td>
												<td>60</td>
											</tr>
											<tr>
												<td>3</td>
												<td>Mecánica Básica</td>
												<td>40</td>
											</tr>
											<tr>
												<td>4</td>
												<td>Relaciones Humanas</td>
												<td>40</td>
											</tr>
											<tr>
												<td>5</td>
												<td>Primeros Auxilios</td>
												<td>20</td>
											</tr>
											<tr>
												<td>6</td>
												<td>Educación Ambiental</td>
												<td>20</td>
											</tr>
											<tr>
												<td>7</td>
												<td>Geografía del Ecuador</td>
												<td>40</td>
											</tr>
											<tr>
												<td>8</td>
												<td>Computación</td>
												<td>20</td>
											</tr>
											<tr>
												<td>9</td>
												<td>Inglés</td>
												<td>40</td>
											</tr>
											<tr>
												<td></td>
												<td><b>Total de Horas</b></td>
												<td><b>320</b></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<!-- /card -->
					<div class="card">
						<div class="card-header" role="tab">
							<h5 class="mb-0">
								<a class="collapsed" data-toggle="collapse" href="#collapseTwo_payment" aria-expanded="false">
									<i class="indicator ti-plus"></i><h3>Módulo de Especialidad</h3>
								</a>
							</h5>
						</div>
						<div id="collapseTwo_payment" class="collapse" role="tabpanel" data-parent="#payment">
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-striped">
										<thead>


										</thead>
										<tbody>
											<tr>
												<td><strong>No</strong></td>
												<td><strong>Asignatura</strong></td>
												<td><strong>Horas</strong></td>
											</tr>
											<tr>
												<td>1</td>
												<td>Teoría de la Conducción</td>
												<td>40</td>
											</tr>
											<tr>
												<td>2</td>
												<td>Prácticas de Conducción</td>
												<td>0</td>
											</tr>
											<tr>
												<td>3</td>
												<td>Psicología Aplicada a la Conducción C</td>
												<td>40</td>
											</tr>
											<tr>
												<td>4</td>
												<td>Atención al Cliente</td>
												<td>40</td>
											</tr>
											<tr>
												<td></td>
												<td><b>Total de Horas</b></td>
												<td><b>160</b></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<center><b style="font-size: 22px">Total de Curso:</b><b style="font-size: 22px"> 480 Horas</b></center>
					</div>
					<!-- /card -->
				</div>
			</div>
			<!-- /accordion payment -->
			
		</div>

		<div class="col-md-6 box_grid wow" data-wow-offset="30">

			<div class="block-reveal">
				<div class="block-vertical"></div>
				<img src="{{asset('/plusCliente/images/carrolicencia.png')}}" alt="" width="200" class="img-fluid">
				<div class="main_title_22"> 

					<h2 class="color22">Requisitos</h2>
				</div>
				<div class="tt-img-mobile">
				</div>
				<ul class="list-group" align="justify" style="font-size: 16px">
					<li class="list-group-item"> <img src="{{asset('/plusCliente/images/iconos/graduated.svg')}}" class="img-fluid" width="50px" height="50px" > Ser mayor de edad <br>
					-Copia a color de título de bachiller notarizado y/o haber aprobado el 1er. Año de Bachillerato (4to. Curso)</li>
					<li class="list-group-item"> <img src="{{asset('/plusCliente/images/iconos/id-card.svg')}}" class="img-fluid" width="50px" height="50px" > Copias a color de la cédula y la papeleta de votación notarizado </li>
					<li class="list-group-item"> <img src="{{asset('/plusCliente/images/iconos/dni.svg')}}" class="img-fluid" width="50px" height="50px" >   Carnet de tipo de sangre original (Cruz Roja)</li>
					<li class="list-group-item"> <img src="{{asset('/plusCliente/images/iconos/user.svg')}}" class="img-fluid" width="50px" height="50px" >  4 fotos tamaño carnet</li>
					<li class="list-group-item"> <img src="{{asset('/plusCliente/images/iconos/police.svg')}}" class="img-fluid" width="50px" height="50px" >  Record Policial</li>
					<li class="list-group-item"> <img src="{{asset('/plusCliente/images/iconos/test.svg')}}" class="img-fluid" width="50px" height="50px" >  Certificados originales de los exámenes médicos, psicológicos y psicosensométricos</li>
				</ul>
			</div>

			<div class="costoLic" >
				<span class="currency">$</span>
				<span class="price-value" style="color:#555">958</span>
				<span class="price-duration">total</span>
			</div>

		</div>


		<!-- /container -->
	</div>
</div>


<!-- tipos de vehiculos -->
<div class="bg_color_1">
	<div class="container margin_50_35">
		<br>
		<div class="main_title_2">
			<span><em></em></span>
			<h2>Vehículos</h2>
			<p>Para conducir TIPO C</p>
		</div>
		<ul class="list-group" align="justify" style="font-size: 16px">
			<li class="list-group-item"> <img src="{{asset('/plusCliente/images/iconos/taxi1.svg')}}" class="img-fluid" width="50px" height="50px" > -Para Taxis Convencionales y Ejecutivos. 
			</li>
			<li class="list-group-item"> <img src="{{asset('/plusCliente/images/iconos/vanmini.svg')}}" class="img-fluid" width="50px" height="50px" >
				-Camionetas Livianas o Mixtas hasta 3.500 kg hasta 8 Pasajeros.
			</li>
			<li class="list-group-item"> <img src="{{asset('/plusCliente/images/iconos/van.svg')}}" class="img-fluid" width="50px" height="50px" >
				-Vehículos de transporte de pasajeros de no más 25 asientos.
			</li>
			<li class="list-group-item"> <img src="{{asset('/plusCliente/images/iconos/car.svg')}}" class="img-fluid" width="50px" height="50px" >
				-Vehículos Comprendidos en el Tipo B.
			</li>
		</ul>

		<!--/row-->
	</div>
	<!-- /container -->
</div>

<div class="bg_color_1">
	<div class="container margin_50_35">
		<br>
		<div class="main_title_2">
			<span><em></em></span>
			<h2>Horarios</h2>
			<p>Elige el Más Accesible</p>
		</div>
		<div class="row">
			<div class="col-md-3">
				<a class="boxed_list" href="#0">
					<img src="{{asset('plusCliente/images/iconos/calendar.svg')}}" width="80px">
					<h3>Lunes a Viernes</h3>
					<p>15h30  a 18h00 <br>
					18h30  a 21h30 </p>

					<p></p>
				</a>
			</div>
			<div class="col-md-3">
				<a class="boxed_list" href="#0">
					<img src="{{asset('plusCliente/images/iconos/calendar1.svg')}}" width="80px">
					<h3>Sábados y Domingos</h3>

					<p>07h30  a 16h00  <br>_</p>
					<p></p>
				</a>
			</div>
			<div class="col-md-3">
				<a class="boxed_list" href="#0">
					<img src="{{asset('plusCliente/images/iconos/clock.svg')}}" width="89px">
					<h3>Tiempo</h3>
					<p>6 meses. 	<br>_<br>_</p>
					<p></p>
				</a>
			</div>
			<div class="col-md-3">
				<a class="boxed_list" href="#0">
					<img src="{{asset('plusCliente/images/iconos/money.svg')}}" width="89px">
					<h3>Costo</h3>
					<p>$958/persona<br>_<br>_</p>
					<p></p>
				</a>
			</div>
		</div>
		<!--/row-->
	</div>
	<!-- /container -->
</div>
<script type="text/javascript">
	window.onload = function(){
		document.getElementById("ser").style.color='#A0C55C';
		document.getElementById("tC").style.color='#A0C55C';
	}
</script>
@endsection