<?php

namespace App\Repositories\auth;

interface AuthenticationRepositoryInterface
{
    public function register(array $data);
    public function login(array $data);
    public function logout();
}
