<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function auth(Request $request)
    {
        $credencias = $request->validate(
            [
                'email' => ['required', 'email'],
                'password' => ['required'],
            ],
            [
                'email' . 'required' => 'O campo email é obrigatorio!',
                'email' . 'email' => 'O email não é válido!',
                'password' . 'required' => 'O campo senha é obrigatorio!',
            ]
        );

        if (Auth::attempt($credencias, $request->remember)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        } else {
            return redirect()->back()->with('erro', 'Usuario ou senha inválida.');
        }
    }

    public function isAuth(Request $request)
    {
        $credencias = $request->validate(
            [
                'email' => ['required', 'email'],
                'password' => ['required'],
            ],
            [
                'email' . 'required' => 'O campo email é obrigatorio!',
                'email' . 'email' => 'O email não é válido!',
                'password' . 'required' => 'O campo senha é obrigatorio!',
            ]
        );

        if (Auth::attempt($credencias, $request->remember)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        } else {
            return redirect()->back()->with('erro', 'Usuario ou senha inválida.');
        }
    }

}
