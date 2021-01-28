<?php
include("database.php");
$idEmpreendimentos = $_GET['id'];
$get_datas = $conn->prepare("SELECT * FROM empreendimentos WHERE empreendimento = $idEmpreendimentos");
$get_datas->execute();
$res=$get_datas->fetch(PDO::FETCH_ASSOC);
?>
<html>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Empreendimentos</h1>
    </div>

    <form method="POST" action="updateEmpreendimentos.php?id=<?=$idEmpreendimentos?>" class="row g-3">
        <div class="col-md-6">
            <label for="inputNome" class="form-label">Nome</label>
            <input type="text" class="form-control" name="inputNome" value="<?=$res['nome']?>" required>
        </div>
        <div class="col-md-6">
            <label for="inputResp" class="form-label">Resp. Técnico</label>
            <select name="inputResp" class="form-select">
                <?php 
                    $get_datas = $conn->prepare("SELECT * FROM responsavel_tecnico");
                    $get_datas->execute();
                    if($get_datas != false)
                    while($result=$get_datas->fetch(PDO::FETCH_ASSOC)){
                    if($result['id_responsavel'] == $res['fk_responsavel']){
                    ?>
                <option selected value="<?php echo $result['id_responsavel'];?>"><?php echo $result['nome_responsavel'];?></option>
                <?php }else{ ?>
                <option value="<?php echo $result['id_responsavel'];?>"><?php echo $result['nome_responsavel'];?></option>
                <?php }}?>
            </select>
        </div>
        <div class="col-10">
            <label for="inputAddress" class="form-label">Endereço</label>
            <input type="text" class="form-control" name="inputAddress" value="<?=$res['endereco']?>" required>
        </div>
        <div class="col-2">
            <label for="inputNumero" class="form-label">Número</label>
            <input type="text" class="form-control" name="inputNumero" value="<?=$res['numero']?>" required>
        </div>
        <div class="col-12">
            <label for="inputBairro" class="form-label">Bairro</label>
            <input type="text" class="form-control" name="inputBairro" value="<?=$res['bairro']?>" required>
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">Cidade</label>
            <input type="text" class="form-control" name="inputCity" value="<?=$res['cidade']?>" required>
        </div>
        <div class="col-md-3">
            <label for="inputState" class="form-label">Estado</label>
            <select name="inputState" class="form-select" required>
                <option selected><?=$res['estado']?></option>
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
            <input type="text" class="form-control" name="inputZip" value="<?=$res['cep']?>" required>
        </div>
        <div class="col-md-6">
            <label for="inputDtInicio" class="form-label">D. Início</label>
            <input type="date" class="form-control" name="inputDtInicio" value="<?=$res['data_inicio']?>" required>
        </div>
        <div class="col-md-6">
            <label for="inputDtFim" class="form-label">D. Fim</label>
            <input type="date" class="form-control" name="inputDtFim" value="<?=$res['data_fim']?>">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Valor da Obra R$</span>
            <input type="text" class="form-control " name="inputValor" value="<?=$res['valor_total_obra']?>">
        </div>
        <div class="col-12">
        </div>
        <div class="modal-footer">
            <input type="submit" name="btnSubmit" class="btn btn-success"></input>
        </div>
    </form>

</html>
