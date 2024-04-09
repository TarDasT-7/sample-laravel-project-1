<?php

namespace App\Services\auth;

interface AuthenticationServiceInterface
{
    public function register(array $data);
    public function login(array $data);
    public function logout();
}
