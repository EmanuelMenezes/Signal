<?php
include("database.php");
?>
<html>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Unidades</h1>
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
                    <h5 class="modal-title" id="staticBackdropLabel">Cadastro de Unidades</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="insertUnidades.php" class="row g-3">
                        <div class="col-md-6">
                            <label for="inputNome" class="form-label">Nome</label>
                            <input type="text" class="form-control" name="inputNome" required>
                        </div>
                        <div class="col-2">
                            <label for="inputNumero" class="form-label">Número</label>
                            <input type="text" class="form-control" name="inputNumero" required>
                        </div>
                        <div class="col-md-4">
                            <label for="inputEmp" class="form-label">Empreendimento</label>
                            <select name="inputEmp" class="form-select">
                                <option>Selecione</option>
                                <?php 
                                    $get_datas = $conn->prepare("SELECT * FROM empreendimentos");
                                    $get_datas->execute();
                                    if($get_datas != false)
                                    while($res=$get_datas->fetch(PDO::FETCH_ASSOC)){
                                        ?>
                                <option value="<?php echo $res['empreendimento'];?>"><?php echo $res['nome'];?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-6">
                            <label for="inputVenda" class="form-label">Valor de Venda</label>
                            <input type="number" class="form-control" name="inputVenda" required>
                        </div>
                        <div class="col-6">
                            <label for="inputValorBanco" class="form-label">Valor da Avaliação no Banco</label>
                            <input type="number" class="form-control" name="inputValorBanco" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputAreaPrivativa" class="form-label">Área Privativa</label>
                            <input type="number" class="form-control" name="inputAreaPrivativa" required>
                        </div>
                        <div class="col-md-4">
                            <label for="inputAreaCoberta" class="form-label">Área Coberta</label>
                            <input type="number" class="form-control" name="inputAreaCoberta" required>
                        </div>
                        <div class="col-md-2">
                            <label for="inputCobertura" class="form-label">Cobertura</label>
                            <select name="inputCobertura" class="form-select" required>
                                <option selected>N</option>
                                <option>S</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="inputAreaTotal" class="form-label">Área Total</label>
                            <input type="number" class="form-control" name="inputAreaTotal" required>
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
                <th>Nome</th>
                <th>Número</th>
                <th>Empreendimento</th>
                <th>Valor de Venda</th>
                <th>Avaliação no Banco</th>
                <th>Área Total</th>
                <th>Área Coberta</th>
                <th>Área Privativa</th>
                <th>Cobertura</th>
                <th>#</th>
            </tr>
            <?php 
$get_datas = $conn->prepare("SELECT unidade, nome_unidade, numero_unidade, empreendimentos.nome, valor_venda, valor_avaliacao_banco, area_total, area_privativa, area_coberta, flag_cobertura FROM unidades LEFT JOIN empreendimentos ON empreendimentos.empreendimento = unidades.fk_empreendimento");
$get_datas->execute();
while($res=$get_datas->fetch(PDO::FETCH_ASSOC)){
            ?>
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
                <td style="font-size:12px"><?php echo '<button style=" font-size:8px;line-heigth:1;" class="btn btn-primary" href="javascript" onclick="editUnidades('.$res['unidade'].');">Editar</button><button style=" font-size:8px;line-heigth:1;" class="btn btn-danger" href="javascript:" onclick="deleteUnidades('.$res['unidade'].')">Deletar</button>'?></td>
            </tr>
            <?php } ?>
        </table>

</html>