<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userService;
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ], [
            'email.required' => 'Email wajib diisi.',
            'password.min' => 'Password harus memiliki minimal 8 karakter.',
        ], [
            'email' => 'Alamat Email',
        ]);
        $user = $this->userService->loginUser($request->only('email', 'password'));

        if (!$user) {
            return response()->json(['message' => 'Email atau password salah'], 401);
        }

        return response()->json($user);
    }
}
