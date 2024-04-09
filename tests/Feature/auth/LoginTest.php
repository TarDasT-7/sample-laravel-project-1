<?php

namespace Tests\Feature\auth;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Session;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        User::factory()->create([
            "fullname" => "amir tardasti",
            'email' => 'test.user@test.com',
            'password' => bcrypt('12345678'),
        ]);
    }

    public function test_user_login()
    {
        Session::start();

        $csrfToken = csrf_token();

        $response = $this->post("/login", [
            "_token" => $csrfToken,
            'email' => 'test.user@test.com',
            'password' => '12345678',
        ]);
        $response->assertRedirect("/");
        $this->assertAuthenticated();
    }
}
