<?php
include("database.php");
$idEmpreendimentos = $_GET['id'];
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
$update = $conn->prepare("UPDATE empreendimentos set nome = ?, fk_responsavel = ?, endereco = ? , numero = ?, bairro = ?, cidade = ?, estado = ?, cep = ?, data_inicio = ?, data_fim = ?, valor_total_obra = ? WHERE empreendimento = ?");
$update->execute(array($nome, $responsavel, $endereco, $numero, $bairro, $inputCity, $inputState,  $inputZip, $inputDtInicio, $inputDtFim, $inputValor, $idEmpreendimentos));
header('Location: index.php?go=empreendimentos');
?>
