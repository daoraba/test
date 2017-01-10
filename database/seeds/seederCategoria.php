<?php

use App\Categoria;
use Illuminate\Database\Seeder;

class seederCategoria extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create(['nombre_c' =>'Junior']);
        Categoria::create(['nombre_c' =>'SemiSenior']);
        Categoria::create(['nombre_c' =>'Senior']);
    }
}
