<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginUserTest extends TestCase
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
        $this->get('/login')
            ->assertStatus(200)
            ->assertSee('Correo electrónico');
    }


}
