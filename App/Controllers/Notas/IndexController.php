<?php

namespace App\Controllers\Notas;

use Core\Request;
use App\Models\Nota;

class IndexController
{

    public function __invoke()
    {
        $pesquisar = Request::get('pesquisar');
        $notas = Nota::all($pesquisar);

        $id = Request::get('id') ?: (sizeof($notas) > 0 ? $notas[0]->id : null);

        $filtro = array_filter($notas, fn($n) => $n->id == $id);

        $notaSelecionada = array_pop($filtro);

        if (!$notaSelecionada) {
            return view('notas/nao-encontrada');
        }

        return view('notas', [
            'notas' => $notas,
            'notaSelecionada' => $notaSelecionada
        ]);
    }
}
