function abreModulo(modulo) {
    var contentUrl = modulo + ".php";

    $.ajax({
        url: contentUrl,
        success: function(result) {
            $("#main-content").html(result);
            createTable(modulo);
        }
    });
}