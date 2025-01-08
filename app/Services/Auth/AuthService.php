<?php

namespace App\Services\Auth;

use App\Repositories\Auth\AuthRepositoryInterface;

class AuthService implements AuthServiceInterface
{
    protected $authRepository;

    public function __construct(AuthRepositoryInterface $authRepository)
    {
        $this->authRepository = $authRepository;
    }

    public function login(array $credentials)
    {
        return $this->authRepository->login($credentials);
    }
}
