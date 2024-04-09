<?php

namespace App\Services\auth;

use App\Repositories\auth\AuthenticationRepositoryInterface;
use App\Services\auth\AuthenticationServiceInterface;

class AuthenticationService implements AuthenticationServiceInterface
{

    public function __construct(protected AuthenticationRepositoryInterface $repository)
    {
    }

    public function register(array $data)
    {
        return $this->repository->register($data);
    }

    public function login(array $data)
    {
        return $this->repository->login($data);
    }

    public function logout()
    {
        return $this->repository->logout();
    }
}
