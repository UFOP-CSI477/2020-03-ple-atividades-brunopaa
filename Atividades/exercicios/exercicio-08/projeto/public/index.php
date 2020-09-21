<?php

require '../vendor/autoload.php';
use App\Models\Estado;
use App\Database\Connection;
use App\Database\AdapterSQLite;
use App\Models\Produto;

$produto = new Produto(1,"Arroz", "kg");
var_dump($produto);

$connection = new Connection(new AdapterSQLite());

var_dump($connection);

$connection->getAdapter()->open();