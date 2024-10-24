<?php

$id = $_GET['id'];



$livro = $database->query("SELECT l.id, l.titulo, l.autor, l.descricao, l.ano_de_lancamento, round(sum(a.nota)/5.0) as nota_avaliacoes, count(a.id) as count_avaliacoes from livros l left join avaliacoes a on a.livro_id = l.id
where l.id = :id
group by l.id, l.titulo, l.autor, l.descricao, l.ano_de_lancamento ", Livro::class, ['id' => $id])->fetch();


$avaliacoes = $database->query('SELECT * FROM avaliacoes WHERE livro_id = :id', Avaliacao::class, ['id' => $id])->fetchAll();

view('livro', compact('livro', 'avaliacoes'));
