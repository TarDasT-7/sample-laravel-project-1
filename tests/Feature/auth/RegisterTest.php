<?php

namespace Tests\Feature\auth;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Session;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    use DatabaseTransactions;
    /** @test */

    public function user_register_test()
    {
        Session::start();

        $csrfToken = csrf_token();

        $response = $this->post("/register", [
            "_token" => $csrfToken,
            "fullname" => "amir tardasti",
            'email' => 'amir.tardasti7@gmail.com',
            'password' => '12345678',
        ]);
        // dd($response->getContent());
        $response->assertRedirect("/");
        $this->assertAuthenticated();
    }
}
