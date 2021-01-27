$(".btnModulo").click(function() {
    var contentUrl = "";
    switch (this.id) {
        case "btnEmpreendimentos" || "menuEmpreendimentos":
            contentUrl = "empreendimentos.php";
            break;
        case "btnUnidades" || "menuUnidades":
            contentUrl = "unidades.php";
            break;
        case "btnVendas" || "menuVendas":
            contentUrl = "vendas.php";
            break;
        case "btnRelatorios" || "menuRelatorios":
            contentUrl = "relatorios.php";
            break;
        case "btnClientes" || "menuClientes":
            contentUrl = "clientes.php";
            break;
        case "btnVendedores" || "menuVendedores":
            contentUrl = "vendedores.php";
            break;
        case "btnResponsaveis" || "menuResponsaveis":
            contentUrl = "responsaveis.php";
            break;
        case "btnHome":
            contentUrl = "home.php";
            break;

        default:
            contentUrl = "home.php";
            break;
    }

    $.ajax({
        url: contentUrl,
        success: function(result) {
            $("#main-content").html(result);
        }
    });

});