<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Validation\ValidationException;

class AuthenticatedSessionController extends Controller
{
    // Exibir o formulário de login
    public function create()
    {
        return view('auth.login'); // Retorna a view de login
    }

    // Fazer login do usuário
    public function store(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);
    
        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();
    
            // Redireciona para /contacts após login bem-sucedido
            return redirect()->route('contacts.index');
        }
    
        return back()->withErrors([
            'email' => 'As credenciais fornecidas não coincidem com nossos registros.',
        ]);
    }

    // Fazer logout
    public function destroy(Request $request)
    {
        Auth::logout();
        return redirect()->route('login'); // Redireciona para o login após o logout
    }

    // Exibir o formulário de registro
    public function createRegister()
    {
        return view('auth.register'); // Retorna a view de registro
    }

    // Registrar um novo usuário
    public function storeRegister(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:5',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);

        // Criar o novo usuário
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // Autenticar o novo usuário
        Auth::login($user);

        // Redirecionar para contatos após registro bem-sucedido
        return redirect()->route('contacts.index');
    }
}
