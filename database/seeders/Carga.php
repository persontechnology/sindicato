<?php

namespace Database\Seeders;

use App\Models\Perfil;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class Carga extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!Perfil::where('nombre','Admin')->first()) {
            $perfil=new Perfil;
            $perfil->nombre='Admin';
            $perfil->save();
        }
        if (!Perfil::where('nombre','Secre')->first()) {
            $perfil=new Perfil;
            $perfil->nombre='Secre';
            $perfil->save();
        }

        if (!Perfil::where('nombre','Profe')->first()) {
            $perfil=new Perfil;
            $perfil->nombre='Profe';
            $perfil->save();
        }

        if (!Perfil::where('nombre','Estudiante')->first()) {
            $perfil=new Perfil;
            $perfil->nombre='Estudiante';
            $perfil->save();
        }
        if (!User::where('email','info@sindicatodepastocalle.com')->first()) {
        	$perfil=Perfil::where('nombre','Admin')->first();
        	User::create([
	            'name' => 'Admin',
	            'email' => 'info@sindicatodepastocalle.com',
	            'password' => Hash::make(env('PASSWORD_ADMIN','')),
                'perfil_id'=>$perfil->id,
                'estado'=>true
	        ]);
        }
    }
}
