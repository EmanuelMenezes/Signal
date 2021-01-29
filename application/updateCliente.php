<?php
include("database.php");
$idCliente = $_GET['id'];
    $nome = $_POST['inputNome'];
    $rg = $_POST['inputRG'];
    $telefone = $_POST['inputContato'];


    $insert_query = $conn->prepare("UPDATE cliente set nome_cliente = ? , rg = ? , telefone = ? WHERE id_cliente = ?");

    $insert_query->execute(array($nome, $rg, $telefone, $idCliente));
    header('Location: index.php?go=clientes');
?>