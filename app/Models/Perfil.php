<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Perfil extends Model
{
    protected $table="perfil";

    public function usuarios()
    {
        return $this->hasMany(User::class);
    }
}
