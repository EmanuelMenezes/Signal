<?php
include("database.php");
$idVenda = $_GET['id'];
    $cliente = $_POST['inputCliente'];
    $vendedor = $_POST['inputVendedor'];
    $unidade = $_POST['inputUnidade'];
    $valorVenda = $_POST['inputVenda'];
    $valorDescontos = $_POST['inputDescontos'];
    $data = $_POST['inputData'];
    $status = $_POST['inputStatus'];


    $insert_query = $conn->prepare("UPDATE vendas set fk_cliente = ? , fk_vendedor = ?, fk_unidade = ?, valor_final_venda = ?, valor_descontos_gerais = ?, data_venda = ?, vendas.status = ? WHERE venda = ?");

    $insert_query->execute(array($cliente, $vendedor, $unidade, $valorVenda, $valorDescontos, $data, $status, $idVenda));
    header('Location: index.php?go=vendas');
?>