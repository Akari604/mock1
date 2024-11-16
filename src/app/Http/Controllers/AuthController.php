<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;

class AuthController extends Controller
{
    public function register(AuthRequest $request)
    {
        $users = $request->all
        return view('register')
    }

    public function login(AuthRequest $request)
    {
        $users = $request->only('email', 'password');

        if (Auth::attempt($user)) {
            $request->session()->regenerate();

            return redirect('/');
        }

        return back()->withErrors([
            'login_error' => 'ログイン情報が登録されていません',
        ]);
    }
}
