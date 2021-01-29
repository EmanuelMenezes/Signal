
<?php
include("database.php");
$idUnidades = $_GET['id'];
    $nome = $_POST['inputNome'];
    $numero = $_POST['inputNumero'];
    $empreendimento = $_POST['inputEmp'];
    $valorVenda = $_POST['inputVenda'];
    $valorBanco = $_POST['inputValorBanco'];
    $areaPrivativa = $_POST['inputAreaPrivativa'];
    $areaCoberta = $_POST['inputAreaCoberta'];
    $cobertura = $_POST['inputCobertura'];
    $areaTotal = $_POST['inputAreaTotal'];


    $insert_query = $conn->prepare("UPDATE unidades SET nome_unidade = ? , numero_unidade = ? , fk_empreendimento = ?, valor_venda = ? , valor_avaliacao_banco = ?, area_privativa = ?, area_coberta = ?, flag_cobertura = ?, area_total = ? WHERE unidade = ?");

    $insert_query->execute(array($nome, $numero, $empreendimento, $valorVenda, $valorBanco, $areaPrivativa, $areaCoberta, $cobertura, $areaTotal, $idUnidades));
    header('Location: index.php?go=unidades');
?>