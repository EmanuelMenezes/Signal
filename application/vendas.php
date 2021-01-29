<?php
include("database.php");
?>
<html>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Vendas</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Cadastrar</button>
            </div>
        </div>
    </div>



    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Cadastro de Vendas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="insertVendas.php" class="row g-3">
                        <div class="col-md-4">
                            <label for="inputCliente" class="form-label">Cliente</label>
                            <select name="inputCliente" class="form-select">
                                <?php 
                                    $get_datas = $conn->prepare("SELECT * FROM cliente");
                                    $get_datas->execute();
                                    if($get_datas != false)
                                    while($res=$get_datas->fetch(PDO::FETCH_ASSOC)){
                                        ?>
                                <option value="<?php echo $res['id_cliente'];?>"><?php echo $res['nome_cliente'];?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="inputVendedor" class="form-label">Vendedor</label>
                            <select name="inputVendedor" class="form-select">
                                <?php 
                                    $get_datas = $conn->prepare("SELECT * FROM vendedor");
                                    $get_datas->execute();
                                    if($get_datas != false)
                                    while($res=$get_datas->fetch(PDO::FETCH_ASSOC)){
                                        ?>
                                <option value="<?php echo $res['id_vendedor'];?>"><?php echo $res['nome_vendedor'];?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="inputUnidade" class="form-label">Unidade</label>
                            <select name="inputUnidade" class="form-select">
                                <?php 
                                    $get_datas = $conn->prepare("SELECT * FROM unidades");
                                    $get_datas->execute();
                                    if($get_datas != false)
                                    while($res=$get_datas->fetch(PDO::FETCH_ASSOC)){
                                        ?>
                                <option value="<?php echo $res['unidade'];?>"><?php echo $res['nome_unidade'];?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-6">
                            <label for="inputVenda" class="form-label">Valor Final da Venda</label>
                            <input class="form-control" name="inputVenda" required>
                        </div>
                        <div class="col-6">
                            <label for="inputDescontos" class="form-label">Descontos Gerais</label>
                            <input class="form-control" name="inputDescontos" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputData" class="form-label">Data da Venda</label>
                            <input type="date" class="form-control" name="inputData" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputStatus" class="form-label">Status</label>
                            <select name="inputStatus" class="form-select" required>
                                <option value="concluída" selected>Concluída</option>
                                <option value="pendente">Pendente</option>
                                <option value="em negociação">Em Negociação</option>
                                <option value="perdida">Perdida</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                            <input type="submit" name="btnSubmit" class="btn btn-success"></input>
                        </div>
                    </form>

                </div>

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
                <th>#</th>
            </tr>
            <?php 
$get_datas = $conn->prepare("SELECT venda, cliente.nome_cliente, vendedor.nome_vendedor, unidades.nome_unidade, valor_final_venda, valor_descontos_gerais, vendas.status, data_venda  FROM vendas LEFT JOIN unidades ON unidades.unidade = vendas.fk_unidade LEFT JOIN cliente ON cliente.id_cliente = vendas.fk_cliente LEFT JOIN vendedor ON vendedor.id_vendedor = vendas.fk_vendedor");
$get_datas->execute();
while($res=$get_datas->fetch(PDO::FETCH_ASSOC)){
            ?>
            <tr>
                <td style="font-size:12px"><?php echo $res['venda']; ?></td>
                <td style="font-size:12px"><?php echo $res['nome_cliente']; ?></td>
                <td style="font-size:12px"><?php echo $res['nome_vendedor']; ?></td>
                <td style="font-size:12px"><?php echo $res['nome_unidade']; ?></td>
                <td style="font-size:12px">R$<?php echo $res['valor_final_venda']; ?></td>
                <td style="font-size:12px">R$<?php echo $res['valor_descontos_gerais']; ?></td>
                <td style="font-size:12px"><?php echo $res['data_venda']; ?></td>
                <td style="font-size:12px"><?php echo $res['status']; ?></td>
                <td style="font-size:12px"><?php echo '<button style=" font-size:8px;line-heigth:1;" class="btn btn-primary" href="javascript" onclick="editVendas('.$res['venda'].');">Editar</button><button style=" font-size:8px;line-heigth:1;" class="btn btn-danger" href="javascript:" onclick="deleteVendas('.$res['venda'].')">Deletar</button>'?></td>
            </tr>
            <?php } ?>
        </table>

</html>
