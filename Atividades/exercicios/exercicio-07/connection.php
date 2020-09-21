<?php


// Configuração:
$dbfile = "./db/database2.sqlite";
$dbuser = "";
$dbpassword = "";
$dbhost = "";


$strConnection = "sqlite:" . $dbfile;
$connection = new PDO($strConnection, $dbuser, $dbpassword);
