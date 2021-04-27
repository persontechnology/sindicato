<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\NoticiasDataTable;
use App\Models\Noticia;
use Illuminate\Support\Facades\Auth;
use Image;
use Illuminate\Support\Facades\Mail;
class Noticias extends Controller
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
            $data = array('noticias' => Noticia::orderBy('id','desc')->paginate(1) );
            return view('noticias.index',$data);
        }
        abort(404);
        
    }


    public function guardar(Request $request)
    {
        if (Auth::user()->perfil->nombre=="Admin" || Auth::user()->perfil->nombre=="Secre") {
            $request->validate([
                'titulo' => 'required|string|max:255|unique:noticia,titulo',
                'midetalle' => 'required',
                'foto' => 'required',
            ]);

            $noticia=new Noticia();
            $noticia->titulo=$request->titulo;
            $noticia->detalle=$request->midetalle;
            $noticia->users_id=Auth::id();
            $imagen=Image::make($request->file('foto'))->resize(484, 252);
            if ($request->hasFile('foto')) {
                $imagen->save('images/noticias/'.$request->foto->hashName());
            }
            $noticia->foto=$request->foto->hashName();
            $noticia->save();
            $request->session()->flash('success','Nueva noticia ingresada exitosamente. Por favor active para ser visible al público.');
            return redirect()->route('noticiasAdmin');
        }
        abort(404);
    }

    public function editar($id)
    {
        $n=Noticia::find($id);
        if ($n) {
            $data = array('n' => $n );
            return view('noticias.editar',$data);
        }
        abort(404);
    }

    public function actualizar(Request $request)
    {
        if (Auth::user()->perfil->nombre=="Admin" || Auth::user()->perfil->nombre=="Secre") {
            $request->validate([
                'id'=>'required',
                'titulo' => 'required|string|max:255|unique:noticia,titulo,'.$request->id,
                'detalle' => 'required',
                'foto' => 'nullable',
            ]);

            $noticia=Noticia::find($request->id);
            $noticia->titulo=$request->titulo;
            $noticia->detalle=$request->detalle;
            $noticia->users_id=Auth::id();

            if ($request->hasFile('foto')) {
                if (file_exists('images/noticias/'.$noticia->foto)) {
                    @unlink('images/noticias/'.$noticia->foto);
                }   
                Image::make($request->file('foto'))->resize(320, 240)->save('images/noticias/'.$request->foto->hashName());
                $noticia->foto=$request->foto->hashName();
            }

            $noticia->save();
            $request->session()->flash('success','Noticia actualizada exitosamente.');
            return redirect()->route('noticiasAdmin');  
        }
        abort(404);
    }

    public function eliminar(Request $request,$id)
    {
        
        if (Auth::user()->perfil->nombre=="Admin" || Auth::user()->perfil->nombre=="Secre") {
            try {
                $noticia=Noticia::find($id);
                if ($noticia->delete()) {
                    if (file_exists('images/noticias/'.$noticia->foto)) {
                        @unlink('images/noticias/'.$noticia->foto);
                    }   
                }
                $request->session()->flash('info','Noticia eliminada exitosamente.');
                return redirect()->route('noticiasAdmin');
            } catch (\Exception $e) {
                $request->session()->flash('warning','No se puede eliminar la noticia, ya que contiene información con otras áreas.');
                return redirect()->route('noticiasAdmin');
            }
        }    
        abort(404);    
        
    }

    public function estado(Request $request,$id)
    {
        if (Auth::user()->perfil->nombre=="Admin" || Auth::user()->perfil->nombre=="Secre") {
          $noticia=Noticia::find($id);
          if ($noticia) {
              if ($noticia->estado) {
                $request->session()->flash('info','Noticia desactivada exitosamente.');
                $estado=false;
              }else{
                $request->session()->flash('success','Noticia activada para el público exitosamente.');
                $estado=true;
              }
              $noticia->estado=$estado;
              $noticia->save();
             return redirect()->route('noticiasAdmin'); 
          }
        }    
        abort(404);  
    }
}
