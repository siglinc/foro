<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
     use DatabaseTransactions;//hace que los registros que se crean no esten en la base de datos
    /**
     * A basic functional test example.
     *
     * @return void
     */
   
    public function testBasicExample()
    {
        
        $user=factory(\App\User::class)->create([
            'name'=>'Luis Julcapoma',
            'email'=>'admin@stynet.com',
        ]);
        $this->actingAs($user,'api')
             ->visit('api/user')
             ->see('Luis Julcapoma')
             ->see('admin@stynet.com');
    }
}
