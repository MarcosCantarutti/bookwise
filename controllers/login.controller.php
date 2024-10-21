<?php

$mensagem = $_REQUEST['mensagem'] ?? '';


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email    = $_POST['email'];
    $password = $_POST['password'];

    $usuario  = $database->query(
        query: "SELECT * FROM USUARIOS WHERE email = :email and password = :password",
        class: Usuario::class,
        params: ['email' => $email, 'password' => $password]
    )->fetch();

    // dd($usuario);

    if ($usuario) {
        $_SESSION['auth'] = $usuario;

        $_SESSION['Mensagem'] = "Seja bem vindo " . $usuario->nome . "!";
        header('location: /');

        exit();
    }
}




view('login', compact('mensagem'));
