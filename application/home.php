<?php


?>
<html>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Início</h1>
    </div>
    <div class="row justify-content-center">
        <div class="container row" style="width:70%;margin-top:80px;">
            <div class="col-xs-12 col-md-3 ">
                <div class=" card " onclick="abreModulo('empreendimentos')" style="margin:10px 0 0 0">
                    <div class="card-body row justify-content-center">
                        <i class="bi bi-building" style="font-size:70px;text-align:center"></i>
                    </div>
                    <div class="card-footer" style="text-align:center">
                        Empreendimentos
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-3 ">
                <div class=" card " onclick="abreModulo('unidades')" style="margin:10px 0 0 0">
                    <div class="card-body row justify-content-center">
                        <i class="bi bi-house-door" style="font-size:70px;text-align:center"></i>
                    </div>
                    <div class="card-footer" style="text-align:center">
                        Unidades
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-3 ">
                <div class=" card " onclick="abreModulo('vendas')" style="margin:10px 0 0 0">
                    <div class="card-body row justify-content-center">
                        <i class="bi bi bi-handbag" style="font-size:70px;text-align:center"></i>
                    </div>
                    <div class="card-footer" style="text-align:center">
                        Vendas
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-3 ">
                <div class=" card " onclick="abreModulo('relatorios')" style="margin:10px 0 0 0">
                    <div class="card-body row justify-content-center">
                        <i class="bi bi-file-earmark-bar-graph" style="font-size:70px;text-align:center"></i>
                    </div>
                    <div class="card-footer" style="text-align:center">
                        Relatórios
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-md-4 ">
                <div class=" card " onclick="abreModulo('clientes')" style="margin:10px 0 0 0">
                    <div class="card-body row justify-content-center">
                        <i class="bi bi-people" style="font-size:50px;text-align:center"></i>
                    </div>
                    <div class="card-footer" style="text-align:center">
                        Clientes
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 ">
                <div class=" card " onclick="abreModulo('vendedores')" style="margin:10px 0 0 0">
                    <div class="card-body row justify-content-center">
                        <i class="bi bi-person-circle" style="font-size:50px;text-align:center"></i>
                    </div>
                    <div class="card-footer" style="text-align:center">
                        Vendedores
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 ">
                <div class=" card " onclick="abreModulo('responsaveis')" style="margin:10px 0 0 0">
                    <div class="card-body row justify-content-center">
                        <i class="bi bi-person-badge" style="font-size:50px;text-align:center"></i>
                    </div>
                    <div class="card-footer" style="text-align:center;">
                        Responsáveis Técnicos
                    </div>
                </div>
            </div>
        </div>
    </div>


</html>
