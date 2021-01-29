<?php
include("database.php");
?>
<html>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Vendas</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#modalUnidades">Nova Venda</button>
            </div>
        </div>
    </div>



    <div class="modal fade" id="modalUnidades" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Nova Venda</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3">
                        <div class="col-md-6">
                            <label for="inputNome" class="form-label">Nome</label>
                            <input type="email" class="form-control" id="inputNome">
                        </div>
                        <div class="col-md-6">
                            <label for="inputResp" class="form-label">Resp. Técnico</label>
                            <select id="inputState" class="form-select">
                                <option>Selecione</option>
                                <?php 
                                    $get_datas = $conn->prepare("SELECT * FROM responsavel_tecnico");
                                    $get_datas->execute();
                                    if($get_datas != false)
                                    while($res=$get_datas->fetch(PDO::FETCH_ASSOC)){
                                        ?>
                                <option value="<?php echo $res['id_responsavel'];?>"><?php echo $res['nome'];?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Endereço</label>
                            <input type="text" class="form-control" id="inputAddress">
                        </div>
                        <div class="col-12">
                            <label for="inputBairro" class="form-label">Bairro</label>
                            <input type="text" class="form-control" id="inputBairro">
                        </div>
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">Cidade</label>
                            <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="col-md-3">
                            <label for="inputState" class="form-label">Estado</label>
                            <select id="inputState" class="form-select">
                                <option selected>Estado</option>
                                <option value="AC">Acre (AC)</option>
                                <option value="AL">Alagoas (AL)</option>
                                <option value="AM">Amazonas (AM)</option>
                                <option value="AP">Amapá (AP)</option>
                                <option value="BA">Bahia (BA)</option>
                                <option value="CE">Ceará (CE)</option>
                                <option value="DF">Distrito Federal (DF)</option>
                                <option value="ES">Espírito Santo (ES)</option>
                                <option value="GO">Goiás (GO)</option>
                                <option value="MA">Maranhão (MA)</option>
                                <option value="MT">Mato Grosso (MT)</option>
                                <option value="MS">Mato Grosso do Sul (MS)</option>
                                <option value="MG">Minas Gerais (MG)</option>
                                <option value="PA">Pará (PA)</option>
                                <option value="PB">Paraíba (PB)</option>
                                <option value="PR">Paraná (PR)</option>
                                <option value="PE">Pernambuco (PE)</option>
                                <option value="PI">Piauí (PI)</option>
                                <option value="RJ">Rio de Janeiro (RJ)</option>
                                <option value="RN">Rio Grande do Norte (RN)</option>
                                <option value="RS">Rio Grande do Sul (RS)</option>
                                <option value="RO">Rondônia (RO)</option>
                                <option value="RR">Roraima (RR)</option>
                                <option value="SC">Santa Catarina (SC)</option>
                                <option value="SP">São Paulo (SP)</option>
                                <option value="SE">Sergipe (SE)</option>
                                <option value="TO">Tocantins (TO)</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="inputZip" class="form-label">CEP</label>
                            <input type="text" class="form-control" id="inputZip">
                        </div>
                        <div class="col-md-6">
                            <label for="inputDtInicio" class="form-label">D. Início</label>
                            <input type="date" class="form-control" id="inputDtInicio">
                        </div>
                        <div class="col-md-6">
                            <label for="inputDtFim" class="form-label">D. Fim</label>
                            <input type="date" class="form-control" id="inputDtFim">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">R$</span>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Check me out
                                </label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                            <button type="submit" class="btn btn-success">Salvar</button>
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
                <th>CEP</th>
                <th>Endereço</th>
                <th>Número</th>
                <th>Estado</th>
                <th>Bairro</th>
                <th>Cidade</th>
                <th>Valor Total</th>
                <th>Data de Início</th>
                <th>Data do Fim</th>
                <th>Responsável Técnico</th>
                <th>#</th>
            </tr>
            <?php 
$get_datas = $conn->prepare("SELECT responsavel_tecnico.nome_responsavel, cep, endereco, numero, estado, bairro, cidade, valor_total_obra, data_inicio, data_fim, empreendimentos.nome FROM empreendimentos LEFT JOIN responsavel_tecnico ON responsavel_tecnico.id_responsavel = empreendimentos.fk_responsavel");
$get_datas->execute();
while($res=$get_datas->fetch(PDO::FETCH_ASSOC)){
            ?>
            <tr>
                <td style="font-size:12px"><?php echo $res['nome']; ?></td>
                <td style="font-size:12px"><?php echo $res['cep']; ?></td>
                <td style="font-size:12px"><?php echo $res['endereco']; ?></td>
                <td style="font-size:12px"><?php echo $res['numero']; ?></td>
                <td style="font-size:12px"><?php echo $res['estado']; ?></td>
                <td style="font-size:12px"><?php echo $res['bairro']; ?></td>
                <td style="font-size:12px"><?php echo $res['cidade']; ?></td>
                <td style="font-size:12px"><?php echo $res['valor_total_obra']; ?></td>
                <td style="font-size:12px"><?php echo $res['data_inicio']; ?></td>
                <td style="font-size:12px"><?php echo $res['data_fim']; ?></td>
                <td style="font-size:12px"><?php echo $res['nome_responsavel']; ?></td>
                <td style="font-size:12px"><?php echo '<button style=" font-size:8px;line-heigth:1;" class="btn btn-primary" href="#">Editar</button><button style=" font-size:8px;line-heigth:1;" class="btn btn-danger" href="#">Deletar</button>'?></td>
            </tr>
            <?php } ?>
        </table>

</html>
