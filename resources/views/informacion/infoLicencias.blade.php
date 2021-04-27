@extends('layouts.menuNav')
@section('content')
<section class="hero_in hotels">
    <div class="wrapper">
        <div class="container">
            <h1 class="fadeInUp"><span></span>Servicios</h1>
        </div>
    </div>
</section>
@include('informacion.tipoLicencias')
<script type="text/javascript">
        window.onload = function(){
            document.getElementById("ser").style.color='#A0C55C';
        }
</script>
@endsection