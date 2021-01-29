<?php
include("database.php");
    $nome = $_POST['inputNome'];
    $rg = $_POST['inputRG'];
    $crea = $_POST['inputCREA'];


    $insert_query = $conn->prepare("INSERT INTO responsavel_tecnico (nome_responsavel , rg , crea) VALUES (?, ?, ?)");

    $insert_query->execute(array($nome, $rg, $crea));
    header('Location: index.php?go=responsaveis');
?>