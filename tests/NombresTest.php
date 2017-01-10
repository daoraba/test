<?php

use Illuminate\Foundation\Testing\DatabaseTransactions;


use App\Nombres;

class UsersTest extends TestCase
{
    //Activar este trait para ejecutar las pruebas dentro de una transaccion de la DB
    use DatabaseTransactions;

    public function test_lista_nombres()
    {
        //Having
        Nombres::create(['nombre' => 'Daniel']);
        Nombres::create(['nombre' => 'Xavi']);


        //when
        $this->visit('nombres')
            //then
            ->see('Daniel')
            ->see('Xavi');
    }

    public function test_crear_nombre()
    {
        $this->visit('nombres')
            ->click('crear nombre')
            ->seePageIs('nombres/crear')
            ->see('crear nombre')
            ->type('Otro', 'nombre')
            ->press('crear nombre')
            ->seePageIs('nombres')
            ->see('Otro')
            ->seeInDatabase('nombres',[
                'nombre' => 'Otro'
            ]);
    }
}
