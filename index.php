<?php 
include("database.php");
?>

<!DOCTYPE html>
<html lang="pt">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SI Signal</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="./assets/css/style.css">

    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item btnModulo" id="btnHome">
                            <a style="line-height: 1;" class="nav-link active" aria-current="page" href="#">Início</a>
                        </li>
                        <div class="btn-secondary btnModulo" id="btnEmpreendimentos">
                            <li class="nav-item">
                                <a style="line-height: 1;" class="nav-link" href="#"><i class="bi bi-building"></i> Empreendimentos</a>
                            </li>
                        </div>
                        <div class="btn-secondary btnModulo" id="btnUnidades">
                            <li class="nav-item">
                                <a style="line-height: 1;" class="nav-link" href="#"><i class="bi bi-house-door"></i> Unidades</a>
                            </li>
                        </div>
                        <div class="btn-secondary btnModulo" id="btnVendas">
                            <li class="nav-item">
                                <a style="line-height: 1;" class="nav-link" href="#"><i class="bi bi-handbag"></i> Vendas</a>
                            </li>
                        </div>
                        <div class="btn-secondary btnModulo" id="btnRelatorios">
                            <li class="nav-item">
                                <a style="line-height: 1;" class="nav-link" href="#"><i class="bi bi-file-earmark-bar-graph"></i> Relatórios</a>
                            </li>
                        </div>
                        <div class="btn-secondary btnModulo" id="btnRelatorios">
                            <li class="nav-item">
                                <a style="line-height: 1;" class="nav-link" href="#"><i class="bi bi-file-earmark-bar-graph"></i> Relatórios</a>
                            </li>
                        </div>
                        <div class="btn-secondary btnModulo" id="btnRelatorios">
                            <li class="nav-item">
                                <a style="line-height: 1;" class="nav-link" href="#"><i class="bi bi-file-earmark-bar-graph"></i> Relatórios</a>
                            </li>
                        </div>
                        <div class="btn-secondary btnModulo" id="btnRelatorios">
                            <li class="nav-item">
                                <a style="line-height: 1;" class="nav-link" href="#"><i class="bi bi-file-earmark-bar-graph"></i> Relatórios</a>
                            </li>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="main-content"class="row justify-content-center"><?php include "home.php" ?></div>
        <footer>
            <script src="http://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
            <script src="./assets/js/functions.js"></script>
        </footer>
    </body>

</html>
