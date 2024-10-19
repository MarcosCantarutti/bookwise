<?php


$pesquisar = $_REQUEST['pesquisar'] ?? '';

$livros = $database->query(query: 'SELECT * FROM LIVROS WHERE TITULO LIKE :filtro', class: Livro::class, params: ['filtro' => "%$pesquisar%"])->fetchAll();

view('index', compact('livros'));
