<?php

if(!auth()){
    header('location: /login');
    exit();
}

echo 'estou logado com o usuário'.auth()->nome;