<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nombres extends Model
{
    protected $fillable = ['nombre'];

    //para crear la relacion de que un nombre pertenece a una categoria (1:N)
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
