<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;


use App\Nombres;

class UsersTest extends TestCase
{
    //para desactivar la verificacion del token desactivando el middleware usando este trait
    use WithoutMiddleware;

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
            ->type('un nombre', 'nombre')
            ->press('crear nombre')
            ->seePageIs('nombres')
            ->see('un nombre')
            ->seeInDatabase('nombres',[
                'nombre' => 'Otro'
            ]);
    }
}
