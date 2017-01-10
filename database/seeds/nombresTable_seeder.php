<?php

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
        //cargar el metodo de la factoria que queremos usar
        factory(\App\Nombres::class)->times(100)->create();
    }
}
