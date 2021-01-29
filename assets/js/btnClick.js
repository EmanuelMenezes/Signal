function abreModulo(modulo) {
    var contentUrl = modulo + ".php";

    $.ajax({
        url: contentUrl,
        success: function(result) {
            $("#main-content").html(result);
        }
    });
}

function editEmpreendimentos(idEmpreendimento) {
    $.ajax({
        url: "editEmpreendimentos.php",
        data: { id: idEmpreendimento },
        success: function(result) {
            $("#main-content").html(result);

        }
    });
}

function deleteEmpreendimentos(idEmpreendimento) {
    $.ajax({
        url: "deleteEmpreendimentos.php",
        data: { id: idEmpreendimento },
        success: function(result) {
            $("#main-content").html(result);
            abreModulo('empreendimentos');
        }
    });

}

function editResponsavel(idResponsavel) {
    $.ajax({
        url: "editResponsaveis.php",
        data: { id: idResponsavel },
        success: function(result) {
            $("#main-content").html(result);

        }
    });
}

function deleteResponsavel(idResponsavel) {
    $.ajax({
        url: "deleteResponsaveis.php",
        data: { id: idResponsavel },
        success: function(result) {
            $("#main-content").html(result);
            abreModulo('responsaveis');
        }
    });

}

function editVendedor(idVendedor) {
    $.ajax({
        url: "editVendedor.php",
        data: { id: idVendedor },
        success: function(result) {
            $("#main-content").html(result);

        }
    });
}

function deleteVendedor(idVendedor) {
    $.ajax({
        url: "deleteVendedor.php",
        data: { id: idVendedor },
        success: function(result) {
            $("#main-content").html(result);
            abreModulo('vendedores');
        }
    });

}

function editCliente(idClientes) {
    $.ajax({
        url: "editCliente.php",
        data: { id: idClientes },
        success: function(result) {
            $("#main-content").html(result);

        }
    });
}

function deleteCliente(idClientes) {
    $.ajax({
        url: "deleteCliente.php",
        data: { id: idClientes },
        success: function(result) {
            $("#main-content").html(result);
            abreModulo('Clientes');
        }
    });

}

function editUnidades(idUnidades) {
    $.ajax({
        url: "editUnidades.php",
        data: { id: idUnidades },
        success: function(result) {
            $("#main-content").html(result);

        }
    });
}

function deleteUnidades(idUnidades) {
    $.ajax({
        url: "deleteUnidades.php",
        data: { id: idUnidades },
        success: function(result) {
            $("#main-content").html(result);
            abreModulo('Unidades');
        }
    });

}

function editVendas(idVendas) {
    $.ajax({
        url: "editVendas.php",
        data: { id: idVendas },
        success: function(result) {
            $("#main-content").html(result);

        }
    });
}

function deleteVendas(idVendas) {
    $.ajax({
        url: "deleteVendas.php",
        data: { id: idVendas },
        success: function(result) {
            $("#main-content").html(result);
            abreModulo('Vendas');
        }
    });

}