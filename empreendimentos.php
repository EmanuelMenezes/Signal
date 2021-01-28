<?php
include("database.php");

?>
<html>
<div>

</div>
    <table id="tableEmpreendimentos" class="table table-striped" style="margin-top:30px;">
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
$get_datas = $conn->prepare("SELECT * FROM empreendimentos");
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
            <td style="font-size:12px"><?php echo $res['fk_responsavel']; ?></td>
            <td style="font-size:12px"><?php echo '<button style=" font-size:8px;line-heigth:1;" class="btn btn-primary" href="#">Editar</button><button style=" font-size:8px;line-heigth:1;" class="btn btn-danger" href="#">Deletar</button>'?></td>
        </tr>
        <?php } ?>
    </table>
    <button style="width:80px; height:80px" class="btn btn-success" href="#">Novo</button>

</html>
