<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use PerfilSeed;
use UserSeed;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(Carga::class);
        
    }
}
