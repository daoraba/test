<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //para indicar que una categoria tiene muchos nombres (1:N)
    public function nombres()
    {
        return $this->hasMany(Nombres::class);
    }
}
