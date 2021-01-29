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