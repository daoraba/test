<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNombresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    //para crear migracion de tabla: php artisan make:migration "nombre de la migracion" --create="nombre de la tabla"
    //para crear las tablas de las migraciones:  php artisan migrate
    //para añadir columna de otra tabla dentro de esta tabla: php artisan make:migration "nombre de la migracion" --table=nombres
    //nullable(): para poder poner valores nulos
    //after():crear columna despues de la columna indicada
    public function up()
    {
        Schema::create('nombres', function (Blueprint $table) {
            $table->increments('id');
            $table->mediumText('nombre');
            $table->timestamps(); //created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('nombres');
    }
}
