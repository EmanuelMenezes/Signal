<?php
include("database.php");
$idVendedor = $_GET['id'];
    $nome = $_POST['inputNome'];
    $rg = $_POST['inputRG'];
    $contato = $_POST['inputContato'];


    $insert_query = $conn->prepare("UPDATE vendedor set nome_vendedor = ? , rg = ? , contato = ? WHERE id_vendedor = ?");

    $insert_query->execute(array($nome, $rg, $contato, $idVendedor));
    header('Location: index.php?go=vendedores');
?>