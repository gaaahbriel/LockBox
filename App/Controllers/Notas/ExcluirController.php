<?php

namespace App\Controllers\Notas;

use Core\Database;
use Core\Validacao;
use App\Models\Nota;

class ExcluirController
{
    public function __invoke()
    {
        $validacao = Validacao::validar([
            'id' => ['required']
        ], request()->all());

        if ($validacao->naoPassou()) {
            return redirect('notas');
        }

        Nota::delete(request()->post('id'));

        flash()->push('mensagem', 'Nota excluída com sucesso!');

        return redirect('/notas');
    }
}
