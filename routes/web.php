<?php

use App\Http\Controllers\Contactos as ControllersContactos;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Informacion\Contactos;
use App\Http\Controllers\Informacion\Noticias as InformacionNoticias;
use App\Http\Controllers\Noticias;
use App\Models\Noticia;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
	$data = array('noticias' => Noticia::where('estado',true)->orderBy('updated_at','desc')->limit(4)->get() );
	return view('welcome',$data);
	
	//  Artisan::call('cache:clear');
    //  Artisan::call('config:clear');
    //  Artisan::call('config:cache');
	// Artisan::call('storage:link');
	// Artisan::call('key:generate');
	// Artisan::call('migrate --seed');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// perfil de usuario
Route::get('/mi-perfil', [HomeController::class,'perfil'])->name('miPerfil');
Route::post('/mi-perfil-actualizar', [HomeController::class,'perfilActualizar'])->name('actualizarMiPerfil');
Route::post('/mi-perfil-actualizar-password', [HomeController::class,'perfilActualizarPasswor'])->name('actualizarPassword');

// noticias admin
Route::get('/noticias-admin', [Noticias::class,'index'])->name('noticiasAdmin');
Route::post('/noticias-guardar', [Noticias::class,'guardar'])->name('registrarNoticia');
Route::post('/noticias-actualizar', [Noticias::class,'actualizar'])->name('actualizarNoticia');
Route::get('/noticias-editar/{id}', [Noticias::class,'editar'])->name('editarNoticia');
Route::get('/noticias-eliminar/{id}', [Noticias::class,'eliminar'])->name('elimininarNoticia');
Route::get('/noticias-estado/{id}', [Noticias::class,'estado'])->name('estadoNoticia');

Route::get('/contactos-admin',[ControllersContactos::class,'index'])->name('contactosAdmin');
Route::get('/contactos-admin-eliminar/{id}',[ControllersContactos::class,'eliminar'])->name('eliminarContacto');
Route::get('/contactos-admin-marcar/{id}',[ControllersContactos::class,'marcar'])->name('marcarContacto');


///rutas para Usuarios
Route::group(['namespace' => 'Informacion'], function() {
	//contactos
	Route::get('/contactos', [Contactos::class,'contacto'])->name('contacto');
	Route::post('/contactos-enviar', [Contactos::class,'enviar'])->name('enviarContacto');

	Route::get('/personal-administrativo', [Contactos::class,'personal'])->name('personalAd');
	Route::get('/mision-y-vision', [Contactos::class,'misVis'])->name('misVision');
	Route::get('/resenia-historia', [Contactos::class,'historia'])->name('histor');
	Route::get('/licencia-tipo-c', [Contactos::class,'tipoc'])->name('tipoC');
	Route::get('/licencia-tipo-d', [Contactos::class,'tipod'])->name('tipoD');
	Route::get('/licencia-tipo-e', [Contactos::class,'tipoe'])->name('tipoE');
	Route::get('/todos-los-servicios', [Contactos::class,'infoLic'])->name('infoLicencia');
	Route::get('/noticias', [InformacionNoticias::class,'index'])->name('noticiasCliente');
	Route::get('/detalle-noticia/{id}', [InformacionNoticias::class,'detalle'])->name('detalleNoticia');
	Route::get('/examen-psicosensometrico', [Contactos::class,'examen'])->name('examenPsico');
	Route::get('/resolucion', [Contactos::class,'reso'])->name('resss');
	Route::get('/actualizacion-conocimiento', [Contactos::class,'act'])->name('actualiz');
	Route::get('/resolucion-actualizacion', [Contactos::class,'actua'])->name('resssAct');
	Route::get('/recuperacion-puntos', [Contactos::class,'puntos'])->name('recPuntos');
	Route::get('/conduccion-defensiva', [Contactos::class,'defensiva'])->name('conDefen');
	Route::get('/convalidacionD', [Contactos::class,'conD'])->name('convalidaD');
	Route::get('/convalidacionE', [Contactos::class,'conE'])->name('convalidaE');
});
