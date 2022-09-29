@extends('layouts.menuNav')
@section('content')
<section class="hero_in tours">
	<div class="wrapper">
		<div class="container">
			<h1 class="fadeInUp"><span></span>Reseña histórica</h1>
		</div>
	</div>
</section>

<div class="container-fluid margin_70_0" style="margin-top: 25px">
	<div class="main_title_2">
		<span><em></em></span>
		<p>“Escuela de Capacitación de Conductores Profesionales San Juan de Pastocalle”</p>
	</div>
	<div class="main-timeline">
		<div class="timeline">
			<a  class="timeline-content">
				<span class="year">1988</span>
				<h3 class="title">Constituida</h3>
				<p class="description">
					Como Sindicato fue constituida legalmente según el Registro  de la Dirección General del Trabajo.- Departamento de Organizaciones Laborales y Estadística.- Quito, 21 de enero de 1988, inscrito en el Registro 04, julio 14 con el número 260.
					Con domicilio la cabecera Parroquial de San Juan de Pastocalle, Cantón Latacunga, Provincia de Cotopaxi. 
				</p>
			</a>
		</div>
		<div class="timeline">
			<a  class="timeline-content">
				<span class="year">1998</span>
				<h3 class="title">Reestructurada</h3>
				<p class="description">
					Seguidamente fue reestructurada legalmente en el Ministerio de Trabajo y Recursos Humanos, Dirección General del Trabajo, Quito 25 de mayo de 1998, inscrito en el Registro 04, folio: 01, con el número: 454.
				</p>
			</a>
		</div>
		<div class="timeline">
			<a  class="timeline-content">
				<span class="year">Escuela</span>
				<h3 class="title">Iniciativa visionaria de varios socios</h3>
				<p class="description">
					La Escuela de Capacitación de Conductores Profesionales San Juan de Pastocalle, se creó gracias a la iniciativa visionaria de varios socios del “Sindicato de Choferes profesionales San Juan de Pastocalle”, con el fin de aportar de manera significativa a la sociedad, capacitando en conducción a todos los ecuatorianos que requieran de este servicio para ellos realizan los trámites pertinentes..
				</p>
			</a>
		</div>
		<div class="timeline">
			<a  class="timeline-content">
				<span class="year">2012</span>
				<h3 class="title">Resolución No. 041-DE-2012-ANT</h3>
				<p class="description">
					Mediante, Resolución No. 041-DE-2012-ANT, de fecha Quito, 09 de julio del 2012: emiten la Autorización Previa de CREACIÓN de la Escuela de Capacitación de Conductores Profesionales San Juan de Pastocalle.
				</p>
			</a>
		</div>
		<div class="timeline">
			<a  class="timeline-content">
				<span class="year">2012</span>
				<h3 class="title">Resolución No. 063-DE-2012-ANT</h3>
				<p class="description">
					Meses después mediante, Resolución No. 063-DE-2012-ANT, de fecha Quito, 13 de noviembre del 2012: Autorización de FUNCIONAMIENTO de la Escuela de Capacitación de Conductores Profesionales San Juan de Pastocalle.
				</p>
			</a>
		</div>
		<div class="timeline">
			<a  class="timeline-content">
				<span class="year">2015</span>
				<h3 class="title">Resolución No. -DE-DTHA-ANT-2015</h3>
				<p class="description">
					Autorización de funcionamiento de la Escuela de Capacitación de Conductores Profesionales San Juan de Pastocalle para la capacitación y formación de conductores profesionales en los tipos de licencias tipo “D-D1” .
				</p>
			</a>
		</div>
		<div class="timeline">
			<a  class="timeline-content">
				<span class="year">2016</span>
				<h3 class="title">Resolución No. 032-ATFEP-CGGCTTTSV-DTHA-ANT-2016</h3>
				<p class="description">
					Autorización de funcionamiento de la Escuela de Capacitación de Conductores Profesionales San Juan de Pastocalle para la capacitación y formación de conductores profesionales en los tipos de licencias tipo “E”
				</p>
			</a>
		</div>
		<div class="timeline">
			<a  class="timeline-content">
				<span class="year">2021</span>
				<h3 class="title">Resolución No. 090 autorización de funcionamiento</h3>
				<p class="description">
					Autorización de funcionamiento de las nuevas instalaciones de la Escuela de Capacitación de Conductores Profesionales San Juan de Pastocalle, liderado por el comité ejecutivo 2021-2025.
				</p>
			</a>
		</div>
	</div>
</div>

@include('informacion.serviciosFooter')

<script type="text/javascript">
	window.onload = function(){
		document.getElementById("about").style.color='#A0C55C';
		document.getElementById("his").style.color='#A0C55C';
	}
</script>
<style type="text/css">
	.main-timeline{
		overflow: hidden;
		position: relative;
	}
	.main-timeline:before{
		content: "";
		width: 10px;
		height: 100%;
		border: 3px solid #959595;
		position: absolute;
		top: 40px;
		left: 50%;
		transform: translateX(-50%);
	}
	.main-timeline .timeline{
		width: 50%;
		padding: 10px 60px 10px 100px;
		float: right;
		position: relative;
	}
	.main-timeline .timeline:before{
		content: "";
		width: 40px;
		height: 40px;
		border-radius: 50%;
		background: #c47c48;
		border: 5px solid #fff;
		box-shadow: 0 0 1px 5px #c47c48;
		position: absolute;
		top: 42px;
		left: -20px;
	}
	.main-timeline .timeline-content{
		display: block;
		background: #e9e9e7;
		padding: 70px 30px 20px;
		box-shadow: 0 0 10px rgba(0,0,0,0.2) inset;
		position: relative;
	}
	.main-timeline .timeline-content:hover{ text-decoration: none; }
	.main-timeline .year{
		display: block;
		width: 80%;
		height: 50px;
		background: #c47c48;
		padding: 0 0 0 50px;
		font-size: 30px;
		font-weight: 800;
		color: #fff;
		line-height: 50px;
		box-shadow: 0 0 20px rgba(0,0,0,0.4) inset;
		border-radius: 10px 10px 10px 0;
		position: absolute;
		top: 20px;
		left: -20px;
	}
	.main-timeline .year:before{
		content: "";
		border-top: 40px solid #c47c48;
		border-left: 20px solid transparent;
		border-bottom: 20px solid transparent;
		position: absolute;
		bottom: -60px;
		left: 0;
	}
	.main-timeline .title{
		font-size: 18px;
		font-weight: 600;
		text-transform: uppercase;
		color: #4a4a4a;
	}
	.main-timeline .description{
		font-size: 14px;
		color: #6f6f6f;
		margin: 0 0 5px 0;
		text-align: justify;
	}
	.main-timeline .timeline:nth-child(2n){
		padding: 10px 100px 10px 60px;
		text-align: right;
	}
	.main-timeline .timeline:nth-child(2n):before{
		left: auto;
		right: -20px;
	}
	.main-timeline .timeline:nth-child(2n) .year{
		padding-right: 50px;
		border-radius: 10px 10px 0 10px;
		left: auto;
		right: -20px;
	}
	.main-timeline .timeline:nth-child(2n) .year:before{
		border-left: none;
		border-right: 20px solid transparent;
		left: auto;
		right: 0;
	}
	.main-timeline .timeline:nth-child(2){ margin-top: 140px; }
	.main-timeline .timeline:nth-child(odd){ margin: -140px 0 0 0; }
	.main-timeline .timeline:nth-child(even){ margin-bottom: 60px; }
	.main-timeline .timeline:first-child,
	.main-timeline .timeline:last-child:nth-child(even){ margin: 0; }
	.main-timeline .timeline:nth-child(2n):before{
		background: #bf3fc8;
		box-shadow: 0 0 1px 5px #bf3fc8;
	}
	.main-timeline .timeline:nth-child(2n) .year{ background: #bf3fc8; }
	.main-timeline .timeline:nth-child(2n) .year:before{ border-top-color: #bf3fc8; }
	.main-timeline .timeline:nth-child(3n):before{
		background: #ce3c41;
		box-shadow: 0 0 1px 5px #ce3c41;
	}
	.main-timeline .timeline:nth-child(3n) .year{ background: #ce3c41; }
	.main-timeline .timeline:nth-child(3n) .year:before{ border-top-color: #ce3c41; }
	.main-timeline .timeline:nth-child(4n):before{
		background: #8cc43d;
		box-shadow: 0 0 1px 5px #8cc43d;
	}
	.main-timeline .timeline:nth-child(4n) .year{ background: #8cc43d; }
	.main-timeline .timeline:nth-child(4n) .year:before{ border-top-color: #8cc43d; }
	@media only screen and (max-width: 990px){
		.main-timeline:before{ top: 8%; }
		.main-timeline .timeline{ padding: 10px 10px 10px 100px; }
		.main-timeline .timeline:nth-child(2n){ padding: 10px 100px 10px 10px; }
	}
	@media only screen and (max-width: 767px){
		.main-timeline:before{
			width: 8px;
			top: 0;
			left: 12px;
			transform: translateX(0);
		}
		.main-timeline .timeline,
		.main-timeline .timeline:nth-child(even),
		.main-timeline .timeline:nth-child(odd){
			width: 100%;
			float: none;
			text-align: left;
			padding: 0 0 0 60px;
			margin: 0 0 30px 0;
		}
		.main-timeline .timeline:before,
		.main-timeline .timeline:nth-child(2n):before{
			width: 20px;
			height: 20px;
			border: 3px solid #fff;
			top: 38px;
			left: 6px;
		}
		.main-timeline .timeline:nth-child(2n) .year{
			right: auto;
			left: -20px;
			border-radius: 10px 10px 10px 0;
		}
		.main-timeline .timeline:nth-child(2n) .year:before{
			border-left: 20px solid transparent;
			border-bottom: 20px solid transparent;
			border-right: none;
			right: auto;
			left: 0;
		}
	}
</style>
@endsection