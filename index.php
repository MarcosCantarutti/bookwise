<?php

require './models/Livro.php';
require './models/Usuario.php';
session_start();
require './functions.php';
$config = require_once('./config.php');
require './database.php';
require './routes.php';
