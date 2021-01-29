<?php
include("database.php");
?>
<html>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Relatório de Vendas</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary" href="javascript:" onclick="abreModulo('relatorioUnidades');">Unidades</button>
            </div>
        </div>
    </div>
    <form method="POST" action="processaRelatorioVenda.php" class="row g-3">
        <div class="col-md-2">
            <label for="inputData1" class="form-label">De</label>
            <input type="date" class="form-control" name="inputData1" required>
        </div>
        <div class="col-md-2">
            <label for="inputData2" class="form-label">Até</label>
            <input type="date" class="form-control" name="inputData2" required>
        </div>
        <input type="submit" name="btnSubmit" class="btn btn-success col-md-2"></input type="submit">
    </form>
    <form method="POST" action="processaRelatorioVenda.php" class="row g-3" style="margin-top:10px;">
        <div class="col-md-4">
            <label for="inputFiltrar" class="form-label">Filtrar Por</label>
            <select name="inputFiltrar" class="form-select" required>
                <option value="status">Status</option>
                <option selected value="vendedor">Vendedor</option>
                <option value="cliente">Cliente</option>
            </select>
        </div>
        <input type="submit" name="btnSubmit" class="btn btn-success col-md-2"></input type="submit">
    </form>

</html>
