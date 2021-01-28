<?php
include('database.php');

?>
<!doctype html>
<html lang="pt">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.79.0">
        <title>Sistema Interno - Signal</title>

        <!-- Bootstrap core CSS -->
        <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="dashboard.css" rel="stylesheet">
        <link href="../assets/css/style.css" rel="stylesheet">
    </head>

    <body>

        <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Signal</a>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="navbar-nav px-3">
                <li class="nav-item text-nowrap">
                    <a class="nav-link" href="javascript:" onclick="abreModulo('')">Início</a>
                </li>
            </ul>
        </header>
        <div class="container-fluid">
            <div class="row">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                    <div class="position-sticky pt-3">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:" onclick="abreModulo('empreendimentos')">
                                    <span data-feather="layers"></span> Empreendimentos
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:" onclick="abreModulo('unidades')">
                                    <span data-feather="home"></span> Unidades
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:" onclick="abreModulo('vendas')">
                                    <span data-feather="shopping-cart"></span> Vendas
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:" onclick="abreModulo('responsaveis')">
                                    <span data-feather="users"></span> Pessoas
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:" onclick="abreModulo('relatorios')">
                                    <span data-feather="bar-chart-2"></span> Relatórios <span data-feather="plus-circle"></span>
                                </a>


                            </li>
                        </ul>
                    </div>
                </nav>

                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" id="main-content">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">Início</h1>
                    </div>
                </main>
            </div>
        </div>


        <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
        <script src="http://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
        <script src="../assets/js/btnClick.js"></script>
        <script src="../assets/js/createTable.js"></script>
        <script src="dashboard.js"></script>
    </body>

</html>
