@extends('layouts.menuNav')
@section('content')
    <section class="hero_in hotels_detail">
        <div class="wrapper">
            <div class="container">
                <h1 class="fadeInUp"><span></span>Licencia Tipo D</h1>
            </div>
        </div>
    </section>
    <br>
    <div class="container-fluid">
        <div class="container margin_50_35">
            <div class="main_title_2">
                <span><em></em></span>
                <h2 align="center">Requisitos Para la Licencia Tipo D </h2>
                <h3 align="justify">Autorizados por la Agencia Nacional de Tránsito <b>N°. 165-DE-DTHA-ANT-2015</b></h3>
            </div>
            <div class="row">

                {{-- <div class="col-md-6 box_grid wow" data-wow-offset="30">
                    <div class="block-reveal">
                        <div class="block-vertical"></div>
                        <img src="{{ asset('/plusCliente/images/busDetalle.png') }}" alt="" width="200"
                            class="img-fluid">
                        <div class="main_title_22">
                            <span><em></em></span>
                            <h4 class="color22">Curso Regular 7 Meses</h4>
                        </div>
                        <ul class="list-group" align="justify">
                            <li class="list-group-item"> <img src="{{ asset('/plusCliente/images/iconos/copy.svg') }}"
                                    class="img-fluid" width="50px" height="50px"> Copia a color notariada de uno de los
                                siguientes documentos: <br>
                                -Título de bachiller o Acta de grado.<br>
                                -Certificado de haber aprobado el 1er. Año de bachillerato (4to. Curso)
                            </li>
                            <li class="list-group-item"> <img src="{{ asset('/plusCliente/images/iconos/id-card.svg') }}"
                                    class="img-fluid" width="50px" height="50px"> Tres copias a color en una sola hoja
                                de: cédula, papeleta de votación. </li>
                            <li class="list-group-item"> <img src="{{ asset('/plusCliente/images/iconos/user.svg') }}"
                                    class="img-fluid" width="50px" height="50px"> 4 fotos tamaño carnet actualizados.
                            </li>
                            <li class="list-group-item"> <img src="{{ asset('/plusCliente/images/iconos/test.svg') }}"
                                    class="img-fluid" width="50px" height="50px"> Certificados originales de los exámenes
                                médicos, psicológicos y psicosensométricos</li>
                            <li class="list-group-item"> <img src="{{ asset('/plusCliente/images/iconos/dni.svg') }}"
                                    class="img-fluid" width="50px" height="50px"> Carnet de tipo de sangre original (Cruz
                                Roja) </li>
                        </ul>
                    </div>
                    <div class="costoLic espacioE">
                        <span class="currency">$</span>
                        <span class="price-value" style="color:#555">1026</span>
                        <span class="price-duration">total</span>
                    </div>
                    <!-- modal malla Curricular -->
                    <div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
                        <div class="small-dialog-header">
                            <div id="faq">
                                <center>
                                    <h2><b>Malla Curricular</b></h2>
                                </center>
                                <div role="tablist" class="add_bottom_45 accordion_2" id="payment">
                                    <div class="card">
                                        <div class="card-header" role="tab">
                                            <h5 class="mb-0">
                                                <a data-toggle="collapse" href="#collapseOne_payment"
                                                    aria-expanded="true"><i class="indicator ti-minus"></i>
                                                    <h3>Módulo Básico</h3>
                                                </a>
                                            </h5>
                                        </div>

                                        <div id="collapseOne_payment" class="collapse show" role="tabpanel"
                                            data-parent="#payment">
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
                                                <a class="collapsed" data-toggle="collapse" href="#collapseTwo_payment"
                                                    aria-expanded="false">
                                                    <i class="indicator ti-plus"></i>
                                                    <h3>Módulo de Especialidad</h3>
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapseTwo_payment" class="collapse" role="tabpanel"
                                            data-parent="#payment">
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
                                                                <td>20</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Prácticas de Conducción</td>
                                                                <td>60</td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>Psicología Aplicada a la Conducción D</td>
                                                                <td>40</td>
                                                            </tr>
                                                            <tr>
                                                                <td>4</td>
                                                                <td>Atención al Cliente</td>
                                                                <td>40</td>
                                                            </tr>
                                                            <tr>
                                                                <td>5</td>
                                                                <td>Mecánica de Buses</td>
                                                                <td>40</td>
                                                            </tr>
                                                            <tr>
                                                                <td>6</td>
                                                                <td>Administración</td>
                                                                <td>40</td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td><b>Total de Horas</b></td>
                                                                <td><b>240</b></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <center><b>Total de Curso:</b><b> 560 Horas</b></center>
                                    </div>
                                    <!-- /card -->
                                </div>
                            </div>
                            <!-- /accordion payment -->
                        </div>
                        <!--form -->
                    </div>
                    <div class="espacioModal">
                        <center>
                            <a href="#sign-in-dialog" id="sign-in" class="login" title="Ver más">
                                <img class="tt-icon" src="{{ asset('/plusCliente/images/iconos/seo.svg') }}"
                                    class="img-fluid" width="80px" height="80px">
                                <h3>Ver Malla Curricular</h3>
                            </a>
                    </div>
                </div> --}}
                <div class="col-md-3"></div>
                <div class="col-md-6 box_grid wow" data-wow-offset="30">
                    <div class="block-reveal">
                        <div class="block-vertical"></div>
                        <img src="{{ asset('/plusCliente/images/busDetalle.png') }}" alt="" 
                            class="img-fluid">
                        <div class="main_title_22">

                            <h4 class="color22">Curso Por Convalidación 3 Meses</h4>
                        </div>
                        <ul class="list-group" align="justify">
                            <li class="list-group-item"> <img src="{{ asset('/plusCliente/images/iconos/copy.svg') }}"
                                    class="img-fluid" width="50px" height="50px"> Copia a color notariada en una sola
                                hoja de: cédula, papeleta de votación y licencia Tipo C mínimo dos años de vigencia </li>
                            <li class="list-group-item"> <img
                                    src="{{ asset('/plusCliente/images/iconos/certificado.svg') }}" class="img-fluid"
                                    width="50px" height="50px"> Certificado de haber aprobado el 1er. Año de
                                bachillerato (4to. Curso)</li>
                            <li class="list-group-item"> <img
                                    src="{{ asset('/plusCliente/images/iconos/certificate.svg') }}" class="img-fluid"
                                    width="50px" height="50px"> Título de bachiller o acta de grado</li>
                            <li class="list-group-item"> <img src="{{ asset('/plusCliente/images/iconos/dni.svg') }}"
                                    class="img-fluid" width="50px" height="50px"> Carnet de tipo de sangre original
                                (Cruz Roja)</li>
                            <li class="list-group-item"> <img src="{{ asset('/plusCliente/images/iconos/user.svg') }}"
                                    class="img-fluid" width="50px" height="50px"> 4 fotos tamaño carnet actualizadas
                            </li>
                            <li class="list-group-item"> <img
                                    src="{{ asset('/plusCliente/images/iconos/certificado.svg') }}" class="img-fluid"
                                    width="50px" height="50px"> Certificación emitida por la ANT de la licencia Tipo C
                            </li>
                            <li class="list-group-item"> <img src="{{ asset('/plusCliente/images/iconos/test.svg') }}"
                                    class="img-fluid" width="50px" height="50px"> Certificados originales de los
                                exámenes médicos, psicológicos y psicosensométricos</li>
                            <li class="list-group-item"> <img src="{{ asset('/plusCliente/images/iconos/diploma.svg') }}"
                                    class="img-fluid" width="50px" height="50px"> Original del Record Académico
                                emitido por la ECCP donde obtuvo la Licencia Tipo C</li>
                            <li class="list-group-item"> <img src="{{ asset('/plusCliente/images/iconos/blog.svg') }}"
                                    class="img-fluid" width="50px" height="50px"> Original del contenido programático
                                de los módulos básicos de la Licencia Tipo C</li>
                        </ul>
                    </div>

                    <div class="costoLic ">
                        <span class="currency">$</span>
                        <span class="price-value" style="color:#555">717</span>
                        <span class="price-duration">total</span>
                    </div>
                    <center>
                        <!-- modal malla especial -->
                        <div id="sign-in-dialog1" class="zoom-anim-dialog mfp-hide">
                            <div class="small-dialog-header">
                                <div id="faq">
                                    <center>
                                        <h2><b>Malla Curricular</b></h2>
                                    </center>
                                    <div role="tablist" class="add_bottom_45 accordion_2" id="payment">
                                        <div class="card">
                                            <div class="card-header" role="tab">
                                                <h5 class="mb-0">
                                                    <a data-toggle="collapse" href="#collapseOne_payment"
                                                        aria-expanded="true"><i class="indicator ti-minus"></i>
                                                        <h3>Módulo de Especialidad</h3>
                                                    </a>
                                                </h5>
                                            </div>

                                            <div id="collapseOne_payment" class="collapse show" role="tabpanel"
                                                data-parent="#payment">
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
                                                                    <td>20</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>Prácticas de Conducción</td>
                                                                    <td>60</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>3</td>
                                                                    <td>Psicología Aplicada a la Conducción D</td>
                                                                    <td>40</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>4</td>
                                                                    <td>Atención al Cliente</td>
                                                                    <td>40</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>5</td>
                                                                    <td>Mecánica de Buses</td>
                                                                    <td>40</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>6</td>
                                                                    <td>Administración</td>
                                                                    <td>40</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td><b>Total de Horas</b></td>
                                                                    <td><b>240</b></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /card -->
                                    </div>
                                </div>
                                <!-- /accordion payment -->
                            </div>
                            <!--form -->
                        </div>
                        <div class="espacioModal">
                            <a href="#sign-in-dialog1" id="sign-in1" class="login" title="Ver más">
                                <img class="tt-icon" src="{{ asset('/plusCliente/images/iconos/seo.svg') }}"
                                    class="img-fluid" width="80px" height="80px">
                                <h3>Ver Malla Curricular</h3>
                            </a>
                        </div>
                </div>
                <div class="col-md-3"></div>

                <!-- /accordion payment -->
            </div>
            <!--form -->
        </div>
    </div>
    </div>

    </div>
    </div>
    </div>

    <!-- tipos de vehiculos -->
    <div class="bg_color_1">
        <div class="container margin_50_35">
            <br>
            <div class="main_title_2">
                <span><em></em></span>
                <h2>Vehículos</h2>
                <p>Para conducir TIPO D</p>
            </div>
            <ul class="list-group" align="justify" style="font-size: 16px">
                <li class="list-group-item"> <img src="{{ asset('/plusCliente/images/iconos/bus1.svg') }}"
                        class="img-fluid" width="50px" height="50px"> -Para Servicio de Pasajeros (Intercnatonales,
                    Interprovinciales, Intra-Provinciales, Intraregionales y por cuenta propia).
                </li>
                <li class="list-group-item"> <img src="{{ asset('/plusCliente/images/iconos/car.svg') }}"
                        class="img-fluid" width="50px" height="50px">
                    -Vehículos del Estado Ecuatoriano Comprendidos en el tipo B y no COnciderados en el tipo C1.
                </li>
                <li class="list-group-item"> <img src="{{ asset('/plusCliente/images/iconos/bus2.svg') }}"
                        class="img-fluid" width="50px" height="50px">
                    -<b>Tipo D1</b> Para Escolares Intitucionales y turismo , Hasta 45 Pasajeros
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
                        <img src="{{ asset('plusCliente/images/iconos/calendar.svg') }}" width="80px">
                        <h3>Lunes a Viernes</h3>
                        <p>15h30 a 18h00 <br>
                            18h30 a 21h30 </p>

                        <p></p>
                    </a>
                </div>
                <div class="col-md-3">
                    <a class="boxed_list" href="#0">
                        <img src="{{ asset('plusCliente/images/iconos/calendar1.svg') }}" width="80px">
                        <h3>Sábados y Domingos</h3>

                        <p>07h30 a 16h00 <br>_ </p>
                        <p></p>
                    </a>
                </div>
                {{-- <div class="col-md-3">
                    <a class="boxed_list" href="#0">
                        <img src="{{ asset('plusCliente/images/iconos/clock.svg') }}" width="89px">
                        <h3>Regular</h3>
                        <p>7 meses. <br>$1026/persona<br>_<br></p>
                        <p></p>
                    </a>
                </div> --}}
                <div class="col-md-3">
                    <a class="boxed_list" href="#0">
                        <img src="{{ asset('plusCliente/images/iconos/money.svg') }}" width="89px">
                        <h3>Convalidación</h3>
                        <p>$717/persona<br>_<br>_</p>
                        <p></p>
                    </a>
                </div>
            </div>
            <!--/row-->
        </div>
        <!-- /container -->
    </div>
    <script type="text/javascript">
        window.onload = function() {
            document.getElementById("ser").style.color = '#A0C55C';
            document.getElementById("tD").style.color = '#A0C55C';
        }
    </script>
@endsection
