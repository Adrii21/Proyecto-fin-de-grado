<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

use Tests\TestCase;
use App\Models\User;

class RegisterUserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;


    /** @test */
    public function it_shows_the_login_form()
    {
        $this->get('/register')
            ->assertStatus(200)
            ->assertSee('Nombre');
    }

    /** @test */
    public function a_user_can_register()
    {
        $this->post('/register', [
            'name' => 'Adrian',
            'email' => 'adrian@mail.es',
            'password' => '12345678',
        ])
            ->assertRedirect('/');

        $this->assertDatabaseHas('users', ['name' => 'Adrian']);
    }

}
