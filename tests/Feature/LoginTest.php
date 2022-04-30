<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class LoginTest extends TestCase
{

    public function test_user_can_login_using_login_form()
    {
        $user = User::factory()->create();
        $response = $this->post('/login', [
            'email' => $user->email,
            // 'email' =>'towhid.khan@g.bracu.ac.bd',

            'password' => 'password'
            // 'password' => '12345678'
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect('/');
    }
}
