<?php
require_once('./dados.php');

view('index', ['livros' => $livros]);
