<?php

namespace App\Models;

use Core\Database;

class Usuario
{
    public $id;

    public $nome;

    public $email;

    public $senha;

    public static function loginUsuario($email)
    {
        $database = new Database(config('database'));

        return $database->query(
            query: 'SELECT * FROM usuarios WHERE email = :email',
            class: Usuario::class,
            params: compact('email')
        )->fetch();
    }

    public static function registraUsuario($nome, $email, $senha)
    {
        $database = new Database(config('database'));

        return $database->query(
            query: 'INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)',
            params: [
                'nome' => $nome,
                'email' => $email,
                'senha' => password_hash($senha, PASSWORD_BCRYPT),
            ]
        );
    }
}
