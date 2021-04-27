<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
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
        return view('home');
    }
    
    public function perfil()
    {
        return view('auth.perfil');
    }

    public function perfilActualizar(Request $request)
    {
         $request->validate([
            
            'nombres'=>'required|string|max:255',
            'apellidos'=>'required|string|max:255',
            'telefono'=>'required|numeric|digits_between:6,10',
            'direccion'=>'required|string|max:255',
            'cedula'=>'required|unique:users,cedula,'.Auth::id(),
            'sexo'=>'required',
            'edad'=>'required|integer|max:150|min:10',
            'name'=>'required|string|max:255'
        ]);
        $user=Auth::user();
        $user->name = $request->name;
        $user->nombres=$request->nombres;
        $user->apellidos=$request->apellidos;
        $user->telefono=$request->telefono;
        $user->direccion=$request->direccion;
        $user->cedula=$request->cedula;
        $user->sexo=$request->sexo;
        $user->edad=$request->edad;
        $user->save();
        $request->session()->flash('success','Perfil actualizado exitosamente.');
        return redirect()->route('miPerfil'); 
    }

    public function perfilActualizarPasswor(Request $request)
    {
        $request->validate([
            'passwordAntiguo'=>'required|string|min:6',
            'password' => 'required|string|min:6|confirmed',
        ]);

        if(Hash::check($request->passwordAntiguo, Auth::user()->password)) {
            $request->user()->fill(['password' => Hash::make($request->password)])->save();
            $request->session()->flash('success', 'Password actualizado exitosamente.');
        }
        else {
            $request->session()->flash('errorPassworAntiguo', 'Password antiguo incorrecto.');

        }
        return redirect()->route('miPerfil'); 
    }
    
}
