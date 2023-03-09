<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginFormRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(LoginFormRequest $request): RedirectResponse
    {
        if (!Auth::attempt($request->validated())) {
            return redirect()
                ->route('login')
                ->withErrors(['email' => 'Пользователь не найден, либо данные введены не верно']);
        }

        return redirect()->intended();
    }

    public function logout(): RedirectResponse
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect()->route('login');
    }
}
