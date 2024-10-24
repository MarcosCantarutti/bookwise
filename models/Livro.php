<?php
// representação de 1 registro no DB em forma de classe
class Livro
{
    public $id;
    public $titulo;
    public $autor;
    public $descricao;
    public $ano_de_lancamento;
    public $usuario_id;
    public $nota_avaliacoes;
    public $count_avaliacoes;

    //static, chamada sem instanciar um new Livro
    public static function make($item)
    {
        $livro = new self();
        $livro->id = $item['id'];
        $livro->titulo = $item['titulo'];
        $livro->autor = $item['autor'];
        $livro->descricao = $item['descricao'];
        $livro->ano_de_lancamento = $item['ano_de_lancamento'];
        $livro->usuario_id = $item['usuario_id'];
        $livro->nota_avaliacoes = $item['nota_avaliacoes'];
        $livro->count_avaliacoes = $item['count_avaliacoes'];
        return $livro;
    }
}
