<?php

    namespace App\Controllers\Notas;

    class CriarController{

        public function index(){
        if (!auth()) {
            return redirect('/login');
        }
            return view('notas/criar');
        }

        public function store(){

        }
    }