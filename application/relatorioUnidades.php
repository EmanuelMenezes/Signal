<?php
include("database.php");
?>
<html>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Relatório de Unidades por Empreendimento</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary" href="javascript:" onclick="abreModulo('relatorios');">Vendas</button>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-sm" id="tableEmpreendimentos">
            <tr>
                <th>Nome</th>
                <th>Número</th>
                <th>Empreendimento</th>
                <th>Valor de Venda</th>
                <th>Avaliação no Banco</th>
                <th>Área Total</th>
                <th>Área Coberta</th>
                <th>Área Privativa</th>
                <th>Cobertura</th>
            </tr>
            <?php 
$get_datas = $conn->prepare("SELECT unidade, nome_unidade, numero_unidade, empreendimentos.nome, valor_venda, valor_avaliacao_banco, area_total, area_privativa, area_coberta, flag_cobertura FROM unidades LEFT JOIN empreendimentos ON empreendimentos.empreendimento = unidades.fk_empreendimento ORDER BY empreendimentos.nome ASC");
$get_datas->execute();
$empreendimentoAnterior = "";
while($res=$get_datas->fetch(PDO::FETCH_ASSOC)){
    if($empreendimentoAnterior != $res['nome']){
        $separador = "<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>";
    }else{
        $separador = "";
    }
            ?>
                <?=$separador?>
            <tr>
                <td style="font-size:12px"><?php echo $res['nome_unidade']; ?></td>
                <td style="font-size:12px"><?php echo $res['numero_unidade']; ?></td>
                <td style="font-size:12px"><?php echo $res['nome']; ?></td>
                <td style="font-size:12px">R$<?php echo $res['valor_venda']; ?></td>
                <td style="font-size:12px">R$<?php echo $res['valor_avaliacao_banco']; ?></td>
                <td style="font-size:12px"><?php echo $res['area_total']; ?>m²</td>
                <td style="font-size:12px"><?php echo $res['area_coberta']; ?>m²</td>
                <td style="font-size:12px"><?php echo $res['area_privativa']; ?>m²</td>
                <td style="font-size:12px"><?php echo $res['flag_cobertura']; ?></td>
            </tr>
            <?php } ?>
        </table>

</html>