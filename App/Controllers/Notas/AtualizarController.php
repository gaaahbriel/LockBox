<?php

namespace App\Controllers\Notas;

use Core\Request;
use App\Models\Nota;
use Core\Database;
use Core\Validacao;


class AtualizarController
{
    public function __invoke()
    {
        $validacao = Validacao::validar([
            'titulo' => ['required', 'min:3', 'max:255'],
            'nota' => ['required'],
            'id' => ['required']
        ], request()->all());

        if ($validacao->naoPassou()) {
            return redirect('notas?id='. request()->post('id'));
        }

        $db = new Database(config('database'));

        $db->query(
            "UPDATE notas SET titulo = :titulo, nota = :nota, data_atualizacao = NOW() WHERE id = :id AND usuario_id = :usuario_id",
            class: Nota::class,
            params: [
                'id' => request()->post('id'),
                'usuario_id' => auth()->id,
                'titulo' => request()->post('titulo'),
                'nota' => request()->post('nota')
            ]
        );

        flash()->push('mensagem', 'Nota atualizada com sucesso!');

        return redirect('/notas');
    }
}
