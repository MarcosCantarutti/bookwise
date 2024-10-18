<?php

class DB
{

    private $db;

    public function __construct()
    {
        $this->db =  new PDO('sqlite:database.sqlite');
    }

    // @return array[Livro];
    public function livros()
    {
        $sql = "SELECT * FROM LIVROS";
        $query = $this->db->query($sql);
        $items = $query->fetchAll();

        // foreach ($items as $item) {
        //     $livro = Livro::make($item);
        //     $retorno[] = $livro;
        // }

        return array_map(fn($item) =>  Livro::make($item), $items);
    }

    public function livro($id)
    {
        $sql = "SELECT * FROM LIVROS where id = $id";
        $query = $this->db->query($sql);

        $items = $query->fetchAll();

        // foreach ($items as $item) {
        //     $livro = Livro::make($item);
        // }

        return array_map(fn($item) =>  Livro::make($item), $items)[0];
    }
}
