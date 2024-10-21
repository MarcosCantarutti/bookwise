<?php

require 'Validacao.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {


    $validacao = Validacao::validar([
        'name' => ['required'],
        'email' => ['required', 'email', 'confirmed'],
        'password' => ['required', 'min:8', 'max:30', 'strong']
    ], $_POST);


    if ($validacao->naoPassou()) {
        header('location: /login');
        exit();
    }


    $database->query(
        query: "INSERT INTO USUARIOS (nome, email, password) values (:nome, :email, :password) ",
        params: [
            'nome' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
        ]
    );

    header('location: /login?mensagem=Registrado com sucesso!');
    exit();
}
