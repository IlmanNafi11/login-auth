<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;

class UserService
{
    public function loginUser(array $credential)
    {
        if (Auth::attempt($credential)) {
            return Auth::user();
        }
        return null;
    }
}