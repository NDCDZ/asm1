<?php

namespace App\Http\Controllers\Login;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthenController extends Controller
{
    public function showFromLogin()
    {
        return view('login.auth.login');
    }
    public function handleLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|string',
        ]);
        $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                $request->session()->put('user', Auth::user());

                return redirect()->route('client.home')->with('success', 'Đăng nhập thành công');
            } else {
                return redirect()->route('login.auth.login')->withErrors(['error' => 'Sai thông tin đăng nhập']);
            }

    }
    public function showFromRegister()
    {
        return view('login.auth.register');
    }
    public function handleRegister()
    {
        $data = request()->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|confirmed'
        ]);

        $user = User::query()->create($data);

        Auth::login($user);
        request()->session()->regenerate();
        return redirect()->route('client.home');
    }
    public function logout()
    {

    }
}
