<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call('UserTableSeeder');
        //para ejecutar los seeders: php artisan db:seed
        //es importante el orden de los seeders aqui
        $this->call(seederCategoria::class);
        $this->call(nombresTable_seeder::class);
        Model::reguard();
    }
}
