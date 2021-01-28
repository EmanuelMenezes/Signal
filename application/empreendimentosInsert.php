<?php
include("database.php");
    $nome = $_POST['inputNome'];
    $responsavel = $_POST['inputResp'];
    $endereco = $_POST['inputAddress'];
    $numero = $_POST['inputNumero'];
    $bairro = $_POST['inputBairro'];
    $inputCity = $_POST['inputCity'];
    $inputState = $_POST['inputState'];
    $inputZip = $_POST['inputZip'];
    $inputDtInicio = $_POST['inputDtInicio'];
    $inputDtFim = $_POST['inputDtFim'];
    $inputValor = $_POST['inputValor'];

    $insert_query = $conn->prepare("INSERT INTO empreendimentos (nome , fk_responsavel , endereco, bairro, cidade, estado, numero, cep, data_inicio, data_fim, valor_total_obra) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $insert_query->execute(array($nome, $responsavel, $endereco, $bairro, $inputCity, $inputState, $numero, $inputZip, $inputDtInicio, $inputDtFim, $inputValor));
    
?>