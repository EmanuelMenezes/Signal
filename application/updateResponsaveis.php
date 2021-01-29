<?php
include("database.php");
$idResponsavel = $_GET['id'];
    $nome = $_POST['inputNome'];
    $rg = $_POST['inputRG'];
    $crea = $_POST['inputCREA'];


    $insert_query = $conn->prepare("UPDATE responsavel_tecnico set nome_responsavel = ? , rg = ? , crea = ? WHERE id_responsavel = ?)");

    $insert_query->execute(array($nome, $rg, $crea, $idResponsavel));
    header('Location: index.php?go=responsaveis');
?>