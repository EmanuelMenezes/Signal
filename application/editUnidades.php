<?php
include('database.php');
$idUnidades = $_GET['id'];
$get_datas = $conn->prepare("SELECT * FROM unidades WHERE unidade = $idUnidades");
$get_datas->execute();
$res=$get_datas->fetch(PDO::FETCH_ASSOC);
?>
<html>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Unidades</h1>
    </div>

    <form method="POST" action="updateUnidades.php?id=<?=$idUnidades?>" class="row g-3">
        <div class="col-md-6">
            <label for="inputNome" class="form-label">Nome</label>
            <input type="text" class="form-control" name="inputNome" value="<?=$res['nome_unidade']?>" required>
        </div>
        <div class="col-2">
            <label for="inputNumero" class="form-label">Número</label>
            <input type="text" class="form-control" name="inputNumero" value="<?=$res['numero_unidade']?>" required>
        </div>
        <div class="col-md-4">
            <label for="inputEmp" class="form-label">Empreendimento</label>
            <select name="inputEmp" class="form-select">
                <?php 
                                    $get_datas = $conn->prepare("SELECT * FROM empreendimentos");
                                    $get_datas->execute();
                                    if($get_datas != false)
                                    while($result=$get_datas->fetch(PDO::FETCH_ASSOC)){
                                        if($res['fk_empreendimento'] == $result['empreendimento']){
                                        ?>
                <option selected value="<?php echo $result['empreendimento'];?>"><?php echo $result['nome'];?></option>
                <?php }else{?>
                    <option value="<?php echo $result['empreendimento'];?>"><?php echo $result['nome'];?></option>
                    <?php }}?>
            </select>
        </div>
        <div class="col-6">
            <label for="inputVenda" class="form-label">Valor de Venda</label>
            <input type="number" class="form-control" name="inputVenda" value="<?=$res['valor_venda']?>" required>
        </div>
        <div class="col-6">
            <label for="inputValorBanco" class="form-label">Valor da Avaliação no Banco</label>
            <input type="number" class="form-control" name="inputValorBanco" value="<?=$res['valor_avaliacao_banco']?>" required>
        </div>
        <div class="col-md-6">
            <label for="inputAreaPrivativa" class="form-label">Área Privativa</label>
            <input type="number" class="form-control" name="inputAreaPrivativa" value="<?=$res['area_privativa']?>" required>
        </div>
        <div class="col-md-4">
            <label for="inputAreaCoberta" class="form-label">Área Coberta</label>
            <input type="number" class="form-control" name="inputAreaCoberta" value="<?=$res['area_coberta']?>" required>
        </div>
        <div class="col-md-2">
            <label for="inputCobertura" class="form-label">Cobertura</label>
            <select name="inputCobertura" class="form-select" required>
                    <option selected value="<?=$res['flag_cobertura']?>"><?=$res['flag_cobertura']?></option>
                <option>N</option>
                <option>S</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="inputAreaTotal" class="form-label">Área Total</label>
            <input type="number" class="form-control" name="inputAreaTotal" value="<?=$res['area_total']?>" required>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" href="javascript:" onclick="abreModulo('unidades');">Fechar</button>
            <input type="submit" name="btnSubmit" class="btn btn-success"></input>
        </div>
    </form>

</html>
