<?php
// representação de 1 registro no DB em forma de classe
class Livro
{
    public $id;
    public $titulo;
    public $autor;
    public $descricao;

    //static, chamada sem instanciar um new Livro
    public static function make($item)
    {
        $livro = new self();
        $livro->id = $item['id'];
        $livro->titulo = $item['titulo'];
        $livro->autor = $item['autor'];
        $livro->descricao = $item['descricao'];

        return $livro;
    }
}
