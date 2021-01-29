
<?php
include("database.php");
    $nome = $_POST['inputNome'];
    $numero = $_POST['inputNumero'];
    $empreendimento = $_POST['inputEmp'];
    $valorVenda = $_POST['inputVenda'];
    $valorBanco = $_POST['inputValorBanco'];
    $areaPrivativa = $_POST['inputAreaPrivativa'];
    $areaCoberta = $_POST['inputAreaCoberta'];
    $cobertura = $_POST['inputCobertura'];
    $areaTotal = $_POST['inputAreaTotal'];


    $insert_query = $conn->prepare("INSERT INTO unidades (nome_unidade , numero_unidade , fk_empreendimento, valor_venda, valor_avaliacao_banco, area_privativa, area_coberta, flag_cobertura, area_total) VALUES (?,?,?,?,?,?,?,?,?)");

    $insert_query->execute(array($nome, $numero, $empreendimento, $valorVenda, $valorBanco, $areaPrivativa, $areaCoberta, $cobertura, $areaTotal));
    header('Location: index.php?go=unidades');
?>