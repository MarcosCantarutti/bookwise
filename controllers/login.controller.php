<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email    = $_POST['email'];
    $password = $_POST['password'];

    $validacao = Validacao::validar([
        'email' => ['required', 'email'],
        'senha' => ['required']
    ], $_POST);

    if ($validacao->naoPassou('login')) {
        header('location: /login');
        exit();
    }

    $usuario  = $database->query(
        query: "SELECT * FROM USUARIOS WHERE email = :email and password = :password",
        class: Usuario::class,
        params: ['email' => $email, 'password' => $password]
    )->fetch();

    // dd($usuario);

    if ($usuario) {
        $_SESSION['auth'] = $usuario;

        flash()->push('mensagem', "Seja bem vindo " . $usuario->nome . "!");
        // $_SESSION['Mensagem']= "Seja bem vindo " . $usuario->nome . "!";
        header('location: /');

        exit();
    }
}




view('login');
