<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login.login');
    }

    /**
     * Show the form for creating a new resource.
     */
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

        if (Auth::attempt($credencias)) {
            $request->session()->regenerate();
            
            return redirect()->intended('/');
        } else {
            return redirect()->back()->with('erro', 'Usuario ou senha inválida.');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function create()
    {
        return view('login.create');
    }

    /**
     * Display the specified resource.
     */
    public function store(Request $request)
    {
        dd($request);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        var_dump('login.logout');
    }
}
