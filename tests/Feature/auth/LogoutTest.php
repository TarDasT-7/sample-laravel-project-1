<?php

namespace Tests\Feature\auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Session;
use Tests\TestCase;

class LogoutTest extends TestCase
{
    /** @test */

    public function test_logout_user()
    {
        Session::start();
        $csrfToken = csrf_token();

        $response = $this->post("/logout", [
            "_token" => $csrfToken,
        ]);
        $response->assertRedirect("/");
        $this->assertGuest();
    }
}
