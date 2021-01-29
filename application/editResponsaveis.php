<?php
include("database.php");
$idResponsavel = $_GET['id'];
$get_datas = $conn->prepare("SELECT * FROM responsavel_tecnico WHERE id_responsavel = $idResponsavel");
$get_datas->execute();
$res=$get_datas->fetch(PDO::FETCH_ASSOC);
?>
<html>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Responsáveis Técnicos</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Cadastrar</button>
            </div>
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary" href="javascript:" onclick="abreModulo('responsaveis');">Resp. Técnicos</button>
                <button type="button" class="btn btn-sm btn-outline-secondary" href="javascript:" onclick="abreModulo('clientes');">Clientes</button>
                <button type="button" class="btn btn-sm btn-outline-secondary" href="javascript:" onclick="abreModulo('vendedores');">Vendedores</button>
            </div>
        </div>
    </div>
    <form method="POST" action="updateResponsaveis.php?id=<?=$idResponsavel?>" class="row g-3">
        <div class="col-md-6">
            <label for="inputNome" class="form-label">Nome</label>
            <input type="text" class="form-control" name="inputNome" value="<?=$res['nome_responsavel']?>" required>
        </div>
        <div class="col-md-6">
            <label for="inputResp" class="form-label">RG</label>
            <input type="text" class="form-control" name="inputRG" value="<?=$res['rg']?>" required>
        </div>
        <div class="col-10">
            <label for="inputAddress" class="form-label">CREA</label>
            <input type="text" class="form-control" name="inputCREA" value="<?=$res['crea']?>" required>
        </div>
        <div class="col-12">
        </div>
        <div class="modal-footer">
            <input type="submit" name="btnSubmit" class="btn btn-success"></input>
        </div>
    </form>


</html>
