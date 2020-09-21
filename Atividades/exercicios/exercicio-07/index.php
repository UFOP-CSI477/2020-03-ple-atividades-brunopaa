<?php

require_once 'connection.php';

//var_dump($connection);
// Controller -> Model
$produtos = $connection->query("SELECT * FROM produtos");

//var_dump($estados->fetchAll());

// View
require 'produtosView.php';