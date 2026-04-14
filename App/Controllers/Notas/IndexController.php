<?php

namespace App\Controllers\Notas;

use App\Models\Nota;

class IndexController
{

    public function __invoke()
    {
        $notas = Nota::all();

        return view('notas', [
            'notas' => $notas
        ]);
    }
}
