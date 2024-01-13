<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Autenticação bem-sucedida
            return 'usuario'.
            Auth::user()->name
             .'Usuário logado com sucesso';
        } else {
            // Autenticação falhou
            return 'Credenciais inválidas';
        }
    }
}
