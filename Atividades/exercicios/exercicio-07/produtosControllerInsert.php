<?php

require 'connection.php';
$nome = $_POST['nome'];
$um = $_POST['um'];

if (empty($um) || empty($nome)) {
    echo '<div><a href="produtosViewInsert.php">Voltar</a></div>';
    die('Informe os dados corretamente');
}

try {
    $connection->beginTransaction();
    $stmt = $connection->prepare("INSERT INTO produtos(nome,um) VALUES (:nome, :um)");
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':um', $um);

    $stmt->execute();

    $connection->commit();

    header('Location:index.php');
    exit();
} catch (Exception $e) {
    $connection->rollBack();
    die("Erro ao inserir o produto:". $e->getMessage());

}
