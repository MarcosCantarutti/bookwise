<?php



if ($_SERVER['REQUEST_METHOD'] == "POST") {
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
