$(document).ready(function() {
    $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });
});


function verClientes(arrayBillete){
	for (var i = 0; i < arrayBillete.length; i++) {
        //creamos la tabla
        var tabla = $("<table>");

        tabla.attr("class","table table-striped custab");
        //Creamos th para los titulos de cada atributo de cliente
        var thNom = $("<th>").text("Nombre");
        var thApell = $("<th>").text("Apellidos");
        var thCoBi = $("<th>").text("C.Billete");
        var thTel = $("<th>").text("Telefono");
        var thPasa = $("<th>").text("Pasaporte");
        var thCiud = $("<th>").text("Ciudad");
        var thPais = $("<th>").text("Pais");

        //Añadimos los titulos a la tabla

        tabla.append(thNom,thApell,thCoBi,thTel,thPasa,thCiud,thPais);


        //creamos celda de cada campo de cliente
        var tr = $("<tr>");
        var tdNom = $("<td>").append(arrayBillete[i]["Nombre"]);
        var tdApell = $("<td>").append(arrayBillete[i]["Apellidos"]);
        var tdCoBill = $("<td>");
        var tdTelef = $("<td>").append(arrayBillete[i]["Telefono"]);
        var tdPasap = $("<td>").append(arrayBillete[i]["Pasaporte"]);
        var tdCiud = $("<td>").append(arrayBillete[i]["Ciudad"]);
        var tdPais = $("<td>").append(arrayBillete[i]["Pais"]);

        //Añadimos el enlace al codigo de billete
        var aCBilli = $("<a>").attr("href","/backendBilletes/"+arrayBillete[i]["CodiBillete"]).append(arrayBillete[i]["CodiBillete"]);
        tdCoBill.append(aCBilli);
        //Añadimos los td al tr

        tr.append(tdNom,tdApell,tdCoBill,tdTelef,tdPasap,tdCiud,tdPais);
        //Añadimos el tr a la tabla
        tabla.append(tr);

        //añadimos la table al div donde se mostrar 
        var divPadre = $("#clientesTable");
        divPadre.append(tabla);
       

}
}
