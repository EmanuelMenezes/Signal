<?php
include('../database.php');

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

        <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        </style>


        <!-- Custom styles for this template -->
        <link href="dashboard.css" rel="stylesheet">
    </head>

    <body>

        <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Signal</a>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
            <ul class="navbar-nav px-3">
                <li class="nav-item text-nowrap">
                    <a class="nav-link" onclick="abreModulo('')">Sair</a>
                </li>
            </ul>
        </header>

        <div class="container-fluid">
            <div class="row">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                    <div class="position-sticky pt-3">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" onclick="abreModulo('empreendimentos')">
                                    <span data-feather="layers"></span> Empreendimentos
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" onclick="abreModulo('unidades')">
                                    <span data-feather="home"></span> Unidades
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" onclick="abreModulo('vendas')">
                                    <span data-feather="shopping-cart"></span> Vendas
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" onclick="abreModulo('responsaveis')">
                                    <span data-feather="users"></span> Responsáveis Técnicos
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" onclick="abreModulo('relatorios')">
                                    <span data-feather="bar-chart-2"></span> Relatórios <span data-feather="plus-circle"></span>
                                </a>


                            </li>
                        </ul>
                    </div>
                </nav>

                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" id="main-content">
                <?php include "../home.php" ?>
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">Início</h1>
                        <div class="btn-toolbar mb-2 mb-md-0">
                            <div class="btn-group me-2">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                            </div>
                            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                                <span data-feather="calendar"></span>
                                This week
                            </button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-sm" id="tableEmpreendimentos">
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
