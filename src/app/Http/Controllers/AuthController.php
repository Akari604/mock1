<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;

class AuthController extends Controller
{
    public function store(RegisterRequest $request)
    {
        $users = $request->all();
        return redirect('mypage/profile');
    }
    
    public function store(RegisterRequest $request)
    {
        $users = $request->all();
        return redirect('mypage/profile');
    }

    public function store(LoginRequest $request)
    {
        $users = $request->only('email', 'password');

        if (Auth::attempt($users)) {
            $request->session()->regenerate();

            return redirect('/');
        }

        return back()->withErrors([
            'login_error' => 'ログイン情報が登録されていません',
        ]);
    }
}
