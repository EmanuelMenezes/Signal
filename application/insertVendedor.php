<?php
include("database.php");
    $nome = $_POST['inputNome'];
    $rg = $_POST['inputRG'];
    $contato = $_POST['inputContato'];


    $insert_query = $conn->prepare("INSERT INTO vendedor (nome_vendedor , rg , contato) VALUES (?, ?, ?)");

    $insert_query->execute(array($nome, $rg, $contato));
    header('Location: index.php?go=vendedores');
?>