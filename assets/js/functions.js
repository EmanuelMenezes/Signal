$(".btnModulo").click(function() {
    var contentUrl = "";
    switch (this.id) {
        case "btnEmpreendimentos":
            contentUrl = "empreendimentos.php"
            break;
        case "btnUnidades":
            contentUrl = "unidades.php"
            break;
        case "btnVendas":
            contentUrl = "vendas.php"
            break;
        case "btnRelatorios":
            contentUrl = "relatorios.php"
            break;
    }

    $.ajax({
        url: contentUrl,
        success: function(result) {
            $("#main-content").html(result);
        }
    });

});