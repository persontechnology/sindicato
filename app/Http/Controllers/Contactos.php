<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class Contactos extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->perfil->nombre=="Admin" || Auth::user()->perfil->nombre=="Secre") {
            $data = array('contactos' => Contacto::orderBy('id','desc')->paginate(10) );
            return view('contactos.index',$data);
        }
        abort(404);
    }


    public function eliminar(Request $request,$id)
    {
        if (Auth::user()->perfil->nombre=="Admin" || Auth::user()->perfil->nombre=="Secre") {
            $cont=Contacto::find($id);
            if ($cont) {
            	$cont->delete();
            }
            $request->session()->flash('success','Contacto eliminado exitosamente..');	
            return redirect()->route('contactosAdmin'); 
        }
        abort(404);
    }


    public function marcar(Request $request,$id)
    {
        if (Auth::user()->perfil->nombre=="Admin" || Auth::user()->perfil->nombre=="Secre") {
            $cont=Contacto::find($id);
            if ($cont) {
                if ($cont->estado) {
                    $estado=false;
                }else{
                    $estado=true;
                }
                $cont->estado=$estado;
                $cont->save();
            }
            $request->session()->flash('success','Marcado exitoso..');   
            return redirect()->route('contactosAdmin'); 
        }
        abort(404);
    }
}
