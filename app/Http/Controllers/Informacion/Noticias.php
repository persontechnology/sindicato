<?php

namespace App\Http\Controllers\Informacion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Noticia;
use Carbon\Carbon;
class Noticias extends Controller
{
    public function index(Request $request)
    {
    	if ($request->texto) {
    		$not=Noticia::where('estado',true)->where('titulo','like','%'.$request->texto.'%')->orderBy('updated_at','desc')->paginate(4);	
            $request->session()->flash('sindato',$request->texto);

    	}else{
    		$not=Noticia::where('estado',true)->orderBy('updated_at','desc')->paginate(4);	
    	}
        $now = Carbon::now();
        $noticiasmes=Noticia::whereMonth('created_at', '=', $now->month)->where('estado',true)->get();

		 $data = array('noticias' =>  $not,'noticiames'=>$noticiasmes);
    	return view('noticias.todos',$data);
    }

    public function detalle(Request $request,$id)
    {
    	$not=Noticia::find($id);
    	if ($not) {
            
    		$now = Carbon::now();
			$noticiasmes=Noticia::whereMonth('created_at', '=', $now->month)->where('estado',true)->get();
			
            if ($not->estado) {
                $data = array('noticia' => $not,'noticiames'=>$noticiasmes);    
            }else{
                $data = array('noticia' => null,'noticiames'=>$noticiasmes);
            }
    		return view('noticias.detalle',$data);
    	}
    	abort(404);
    }
}
