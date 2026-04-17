<?php

namespace App\Models;

use Core\Database;

class Nota
{

    public $id;
    public $usuario_id;
    public $titulo;
    public $nota;
    public $data_criacao;
    public $data_atualizacao;

    public static function all($pesquisar = null)
    {
        $db = new Database(config('database'));

        return $db->query(
            "SELECT * FROM notas WHERE usuario_id = :usuario_id " . (
                $pesquisar ? "AND titulo like :pesquisar" : null
            ),
            class: self::class,
            params: array_merge(['usuario_id' => auth()->id], $pesquisar ? ['pesquisar' => "%$pesquisar%"] : [])
        )->fetchAll();
    }

    public static function delete($id)
    {
        $db = new Database(config('database'));

        $db->query(
            "DELETE FROM notas WHERE id = :id",
            params: [
                'id' => $id
            ]
        );
    }


    public static function update($id, $titulo, $nota)
    {
        $db = new Database(config('database'));

        $db->query(
            "UPDATE notas SET titulo = :titulo, nota = :nota, data_atualizacao = NOW() WHERE id = :id",
            class: Nota::class,
            params: [
                'id' => $id,
                'titulo' => $titulo,
                'nota' => $nota
            ]
        );
    }
}
