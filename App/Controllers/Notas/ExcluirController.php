<?php

namespace App\Controllers\Notas;

use Core\Database;

class ExcluirController
{
    public function __invoke()
    {
        $db = new Database(config('database'));

        $db->query(
            "DELETE FROM notas WHERE id = :id AND usuario_id = :usuario_id",
            params: [
                'id' => request()->post('id'),
                'usuario_id' => auth()->id
            ]
        );

        flash()->push('mensagem', 'Nota excluída com sucesso!');

        return redirect('/notas');
    }
}