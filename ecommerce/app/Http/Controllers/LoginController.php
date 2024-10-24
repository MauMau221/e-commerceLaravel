<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required|string|min:8',
        ],
        [
            'name.required' => 'O campo nome é obrigatorio',
            'email.required' => 'O campo email é obrigatorio',
            'password.required' => 'O campo senha é obrigatorio',
            'password.min' => 'A senha deve ter no minimo 8 caracteres',
            'email.email' => 'Email inválido',
            'password_confirmation.required' => 'O campo confirmação de senha é obrigatorio',
            'password.confirmed' => 'A senha não está igual',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'email_verified_at' => now(),
        ]);
        if ($user) {
            return redirect()->route('login.index')->with('success', 'Usuário registrado com sucesso');
        }else {
            return redirect()->back()->with('erro', 'Usuario ou senha inválida.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        return view('login.edit', $user);
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
    public function destroy(string $id)
    {   
        $user = User::find($id);
        if($user){
            $user->delete();
            return redirect()->route('index.home')->with('success', 'Usuário deletado com sucesso');
        }else{
            return with('erro', 'ID do item não encontrado no banco de dados');
        }
    }
}
