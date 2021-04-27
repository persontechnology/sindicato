<?php

namespace App\Http\Controllers\Informacion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contacto;

class Contactos extends Controller
{
	//funcion que retorna vista contactos
    public function contacto()
    {
        return view('informacion.contactos');
    }
    public function enviar(Request $request)
    {
         $request->validate([
            'email' => 'required|string|email|max:255',
            'nombre'=>'required|string|max:255',
            'telefono'=>'required|numeric|digits_between:6,10',
            'mensaje'=>'required|string|max:255',
            'servicio'=>'required|max:255'
        ]);
        $contacto=new Contacto();
        $contacto->email=$request->email;
        $contacto->nombre=$request->nombre;
        $contacto->mensaje=$request->mensaje;
        $contacto->telefono=$request->telefono;
        $contacto->servicio=$request->servicio;
        $contacto->save();
        $request->session()->flash('success',' te da la bienvenida y gracias por escribirnos. Intentaremos responderte lo antes posible');
        return redirect()->route('contacto'); 
    }
    //funcion que retorna vista personalAdministrativo
    public function personal()
    {
        return view('informacion.personalAdmin');
    }
    //funcion que retorna vista misionVision
    public function misVis()
    {
        return view('informacion.misionVision');
    }
    //funcion que retorna vista historia
    public function historia()
    {
        return view('informacion.historia');
    }
    //funcion que retorna vista liciencia tipoc 
    public function tipoc()
    {
    	   return view('informacion.tipoc');
    }
    //funcion que retorna vista liciencia tipod 
    public function tipod()
    {
    	   return view('informacion.tipod');
    }
     //funcion que retorna vista liciencia tipoE 
    public function tipoe()
    {
    	   return view('informacion.tipoe');
    }
    //funcion que retorna vista infoLicencias
    public function infoLic()
    {
           return view('informacion.infoLicencias');
    }
  
     //funcion que retorna vista de examen Psinsometrico
    public function examen()
    {
           return view('informacion.examenPsico');
    }
    //funcion que retorna vista de resolucion Psinsometrico
    public function reso()
    {
           return view('informacion.resolucionPsicosen');
    }
    //funcion que retorna vista de actualizacaionCOnocimientos
    public function act()
    {
           return view('informacion.actualizacionConoc');
    }
    //funcion que retorna vista de resolucion Actualización
    public function actua()
    {
           return view('informacion.resolucionActualizacion');
    }
    //funcion que retorna vista de recuperacionPuntos
    public function puntos()
    {
           return view('informacion.recuperacionPuntos');
    }
    //funcion que retorna vista de recuperacionPuntos
    public function defensiva()
    {
           return view('informacion.conduccionDefensiva');
    }
    //funcion que retorna vista malla COnvalidacionD
    public function conD()
    {
           return view('informacion.mallaConvaD');
    }
    //funcion que retorna vista malla COnvalidacionE
    public function conE()
    {
           return view('informacion.mallaConvaE');
    }
}
