<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $table='noticia';

    public function usuario()
    {
        return $this->belongsTo(User::class,'users_id');
    }
}
