<?php

use App\Categoria;
use App\Nombres;
use Illuminate\Database\Seeder;

class nombresTable_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorias= Categoria::all();
        //cargar el metodo de la factoria que queremos usar
        $nombres = factory(Nombres::class)->times(100)->make();

        foreach ($nombres as $nombre){
            $c=$categorias->random();

                $c->nombres()->save($nombre);

        }
    }
}
