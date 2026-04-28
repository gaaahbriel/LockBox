<?php

namespace App\Controllers;

use Core\Database;
use Core\Validacao;
use App\Models\Usuario;

class RegisterController
{
    public function index()
    {
        return view('registrar', template: 'guest');
    }

    public function register()
    {
        $nome = request()->post('nome');
        $email = request()->post('email');
        $senha = request()->post('senha');

        $validacao = Validacao::validar([
            'nome' => ['required'],
            'email' => ['required', 'email', 'confirmed', 'unique:usuarios'],
            'senha' => ['required', 'min:8', 'max:30', 'strong'],
        ], request()->all());

        if ($validacao->naoPassou()) {
            return view('registrar', template: 'guest');
        }

        Usuario::registraUsuario($nome, $email, $senha);

        flash()->push('mensagem', 'Registrado com sucesso!👍');

        return redirect('/login');
    }
}
