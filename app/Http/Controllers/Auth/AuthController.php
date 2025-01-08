<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\Auth\AuthServiceInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    protected $authService;

    public function __construct(AuthServiceInterface $authService)
    {
        $this->authService = $authService;
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if ($this->authService->login($credentials)) {
            return redirect()->intended('/dashboard'); 
        }

        return back()->withErrors([
            'login_error' => 'Invalid credentials.',
        ]);
    }



}
