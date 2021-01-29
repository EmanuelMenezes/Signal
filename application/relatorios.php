<?php
include("database.php");
?>
<html>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Relatórios</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Vendas</button>
            </div>
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Unidades</button>
            </div>
        </div>
    </div>
    <div class="row g-3">
    <div class="col-md-2">
        <label for="inputData1" class="form-label">De</label>
        <input type="date" class="form-control" id="inputData1">
    </div>
    <div class="col-md-2">
        <label for="inputData2" class="form-label">Até</label>
        <input type="date" class="form-control" id="inputData2">
    </div>
    <div class="col-md-2">
        <label for="inputFiltrar" class="form-label">Filtrar Por</label>
        <select id="inputFiltrar" class="form-select">
            <option value="status">Status</option>
            <option value="vendedor">Vendedor</option>
            <option value="cliente">Cliente</option>
            <option value="all">Ver Todos</option>
        </select>
    </div>
        <button id="btnSubmit" href="#" class="btn btn-success col-md-4">Gerar Relatório</button>
    </div>
    <script>
    $("#btnSubmit").click(function(){
        $.ajax({
        url: "./processaRelatorioVenda.php",
        success: function(result) {
            $("#returnTable").html(result);

        }
    });

    });
    </script>
    <div id="#returnTable"></div>

</html>
