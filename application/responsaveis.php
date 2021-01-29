<?php
include("database.php");
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



    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Cadastro de Responsáveis Técnicos</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="insertResponsavel.php" class="row g-3">
                        <div class="col-md-6">
                            <label for="inputNome" class="form-label">Nome</label>
                            <input type="text" class="form-control" name="inputNome" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputResp" class="form-label">RG</label>
                            <input type="text" class="form-control" name="inputRG" required>
                        </div>
                        <div class="col-10">
                            <label for="inputAddress" class="form-label">CREA</label>
                            <input type="text" class="form-control" name="inputCREA" required>
                        </div>
                        <div class="col-12">
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
        <table class="table table-striped table-sm" id="tableResponsavel">
            <tr>
                <th>Nome</th>
                <th>CREA</th>
                <th>RG</th>
                <th>#</th>
            </tr>
            <?php 
$get_datas = $conn->prepare("SELECT * FROM responsavel_tecnico");
$get_datas->execute();
while($res=$get_datas->fetch(PDO::FETCH_ASSOC)){
    
            ?>
            <tr>
                <td style="font-size:12px"><?php echo $res['nome_responsavel']; ?></td>
                <td style="font-size:12px"><?php echo $res['crea']; ?></td>
                <td style="font-size:12px"><?php echo $res['rg']; ?></td>
                <td style="font-size:12px"><?php echo '<button style=" font-size:8px;line-heigth:1;" class="btn btn-primary" href="javascript" onclick="editResponsavel('.$res['id_responsavel'].');">Editar</button><button style=" font-size:8px;line-heigth:1;" class="btn btn-danger" href="javascript:" onclick="deleteResponsavel('.$res['id_responsavel'].')">Deletar</button>'?></td>
            </tr>
            <?php } ?>
        </table>
</html>
