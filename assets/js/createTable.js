function createTable(modulo) {
    var tableName = "";
    var columns = [];
    switch (modulo) {
        case "empreendimentos":
            tableName = "empreendimentos";
            columns = [
                { title: "ID", field: "empreendimento", sorter: "number", width: 200, editor: true },
                { title: "Nome", field: "nome", sorter: "string", hozAlign: "right", formatter: "progress" },
                { title: "Gender", field: "gender", sorter: "string", cellClick: function(e, cell) { console.log("cell click") }, },
                { title: "Height", field: "height", formatter: "star", hozAlign: "center", width: 100 },
                { title: "Favourite Color", field: "col", sorter: "string" },
                { title: "Date Of Birth", field: "dob", sorter: "date", hozAlign: "center" },
                { title: "Cheese Preference", field: "cheese", sorter: "boolean", hozAlign: "center", formatter: "tickCross" },
            ];
            break;
        case "unidades":
            tableName = "unidades";
            break;
        case "vendas":
            tableName = "vendas";
            break;
        case "clientes":
            tableName = "cliente";
            break;
        case "vendedores":
            tableName = "vendedor";
            break;
        case "responsaveis":
            tableName = "responsavel_tecnico";
            break;

    }


}