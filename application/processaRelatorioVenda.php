<?php
include("database.php");
if(isset($_POST['inputData1']) && isset($_POST['inputData2'])){
    $get_datas = $conn->prepare("SELECT venda, cliente.nome_cliente, vendedor.nome_vendedor, unidades.nome_unidade, valor_final_venda, valor_descontos_gerais, vendas.status, data_venda  FROM vendas LEFT JOIN unidades ON unidades.unidade = vendas.fk_unidade LEFT JOIN cliente ON cliente.id_cliente = vendas.fk_cliente LEFT JOIN vendedor ON vendedor.id_vendedor = vendas.fk_vendedor WHERE data_venda BETWEEN ? AND ?");
    $get_datas->execute(array($_POST['inputData1'] , $_POST['inputData2']));
    $dbField = 'periodo';
    $dbTable = 'periodo';
    $title = "Período";
}
if(isset($_POST['inputFiltrar'])){
    switch($_POST['inputFiltrar']){
        case "vendedor":
            $dbField = 'nome_vendedor';
            $dbTable = 'vendedor';
            $title = "Vendedor";
        break;

        case "status":
            $dbField = 'status';
            $dbTable = 'vendas';
            $title = "Status";

        break;

        case "cliente":
            $dbField = 'nome_cliente';
            $dbTable = 'cliente';
            $title = "Cliente";

        break;
    }
    $get_datas = $conn->prepare("SELECT venda, cliente.nome_cliente, vendedor.nome_vendedor, unidades.nome_unidade, valor_final_venda, valor_descontos_gerais, vendas.status, data_venda  FROM vendas LEFT JOIN unidades ON unidades.unidade = vendas.fk_unidade LEFT JOIN cliente ON cliente.id_cliente = vendas.fk_cliente LEFT JOIN vendedor ON vendedor.id_vendedor = vendas.fk_vendedor ORDER BY $dbTable.$dbField ASC");
    $get_datas->execute();
}
?>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sistema Interno - Signal</title>

        <!-- Bootstrap core CSS -->
        <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

        <!-- Custom styles for this template -->
        <link href="dashboard.css" rel="stylesheet">
        <link href="../assets/css/style.css" rel="stylesheet">

        <script src="http://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    </head>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Relatório de Vendas por <?=$title?></h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a class="btn btn-sm btn-outline-secondary" href="index.php">Voltar ao Início</a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm" id="tableEmpreendimentos">
            <tr>
                <th>COD Venda</th>
                <th>Cliente</th>
                <th>Vendedor</th>
                <th>Nome da Unidade</th>
                <th>Valor Final da Venda</th>
                <th>Descontos Gerais</th>
                <th>Data da Venda</th>
                <th>Status</th>
            </tr>
            <?php 
            $lastField = 0;
while($res=$get_datas->fetch(PDO::FETCH_ASSOC)){

    if(($res[$dbField] != $lastField) && (isset($_POST['inputFiltrar']))){
        $marcador = "<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>";
 }else{
     $marcador = "";
 }
        ?>
            <?=$marcador?>
            <tr>
                <td style="font-size:12px"><?php echo $res['venda']; ?></td>
                <td style="font-size:12px"><?php echo $res['nome_cliente']; ?></td>
                <td style="font-size:12px"><?php echo $res['nome_vendedor']; ?></td>
                <td style="font-size:12px"><?php echo $res['nome_unidade']; ?></td>
                <td style="font-size:12px">R$<?php echo $res['valor_final_venda']; ?></td>
                <td style="font-size:12px">R$<?php echo $res['valor_descontos_gerais']; ?></td>
                <td style="font-size:12px"><?php echo $res['data_venda']; ?></td>
                <td style="font-size:12px"><?php echo $res['status']; ?></td>
            </tr>
            <?php 
            $lastField = $res[$dbField];
        }
         ?>
        </table>
    </div>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <script src="../assets/js/btnClick.js"></script>
    <script src="../dashboard.js"></script>

</html>
