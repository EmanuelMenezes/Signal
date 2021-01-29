<?php
include("database.php");
$idVenda = $_GET['id'];
$get_datas = $conn->prepare("SELECT * FROM vendas WHERE venda = $idVenda");
$get_datas->execute();
$res=$get_datas->fetch(PDO::FETCH_ASSOC);
?>
<html>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Vendas</h1>
    </div>
    <form method="POST" action="updateVendas.php?id=<?=$res['venda']?>" class="row g-3">
        <div class="col-md-4">
            <label for="inputCliente" class="form-label">Cliente</label>
            <select name="inputCliente" class="form-select">
                <?php 
                                    $get_datas = $conn->prepare("SELECT * FROM cliente");
                                    $get_datas->execute();
                                    if($get_datas != false)
                                    while($result=$get_datas->fetch(PDO::FETCH_ASSOC)){
                                        if($res['fk_cliente'] == $result['id_cliente']){

                                        ?>
                <option selected value="<?php echo $result['id_cliente'];?>"><?php echo $result['nome_cliente'];?></option>
                <?php }else{ ?>
                <option value="<?php echo $result['id_cliente'];?>"><?php echo $result['nome_cliente'];?></option>

                <?php }} ?>
            </select>
        </div>
        <div class="col-md-4">
            <label for="inputVendedor" class="form-label">Vendedor</label>
            <select name="inputVendedor" class="form-select">
                <?php 
                                    $get_datas = $conn->prepare("SELECT * FROM vendedor");
                                    $get_datas->execute();
                                    if($get_datas != false)
                                    while($result=$get_datas->fetch(PDO::FETCH_ASSOC)){
                                        if($res['fk_vendedor'] == $result['id_vendedor']){

                                        ?>
                <option selected value="<?php echo $result['id_vendedor'];?>"><?php echo $result['nome_vendedor'];?></option>
                <?php }else{ ?>
                <option value="<?php echo $result['id_vendedor'];?>"><?php echo $result['nome_vendedor'];?></option>

                <?php }} ?>
            </select>
        </div>
        <div class="col-md-4">
            <label for="inputUnidade" class="form-label">Unidade</label>
            <select name="inputUnidade" class="form-select">
                <?php 
                                    $get_datas = $conn->prepare("SELECT * FROM unidades");
                                    $get_datas->execute();
                                    if($get_datas != false)
                                    while($result=$get_datas->fetch(PDO::FETCH_ASSOC)){
                                        if($res['fk_unidade'] == $result['unidade']){

                                        ?>
                <option slected value="<?php echo $result['unidade'];?>"><?php echo $result['nome_unidade'];?></option>
                <?php }else{ ?>
                <option value="<?php echo $result['unidade'];?>"><?php echo $result['nome_unidade'];?></option>
                <?php }} ?>
            </select>
        </div>
        <div class="col-6">
            <label for="inputVenda" class="form-label">Valor Final da Venda</label>
            <input class="form-control" name="inputVenda" value="<?=$res['valor_final_venda']?>" required>
        </div>
        <div class="col-6">
            <label for="inputDescontos" class="form-label">Descontos Gerais</label>
            <input class="form-control" name="inputDescontos" value="<?=$res['valor_descontos_gerais']?>" required>
        </div>
        <div class="col-md-6">
            <label for="inputData" class="form-label">Data da Venda</label>
            <input type="date" class="form-control" name="inputData" value="<?=$res['data_venda']?>" required>
        </div>
        <div class="col-md-6">
            <label for="inputStatus" class="form-label">Status</label>
            <select name="inputStatus" class="form-select" required>
                <option selected><?=$res['status']?></option>
                <option>Concluída</option>
                <option>Pendente</option>
                <option>Em Negociação</option>
                <option>Perdida</option>
            </select>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" href="javascript:" onclick="abreModulo('vendas')">Fechar</button>
            <input type="submit" name="btnSubmit" class="btn btn-success"></input>
        </div>
    </form>

</html>