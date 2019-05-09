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
        var thAcci = $("<th>").text("Acción");

        //Añadimos los titulos a la tabla

        tabla.append(thNom,thApell,thCoBi,thTel,thPasa,thCiud,thPais,thAcci);


        //creamos celda de cada campo de cliente
        var tr = $("<tr>");
        var tdNom = $("<td>").append(arrayBillete[i]["Nombre"]);
        var tdApell = $("<td>").append(arrayBillete[i]["Apellidos"]);
        var tdCoBill = $("<td>").append(arrayBillete[i]["CodiBillete"]);
        var tdTelef = $("<td>").append(arrayBillete[i]["Telefono"]);
        var tdPasap = $("<td>").append(arrayBillete[i]["Pasaporte"]);
        var tdCiud = $("<td>").append(arrayBillete[i]["Ciudad"]);
        var tdPais = $("<td>").append(arrayBillete[i]["Pais"]);
        var tdAcci = $("<td>");

        //creamos un boton
        var btnVerBill = $("<button>");

        //creamos una i para el icono del boton
        var icono = $("<i>").attr("class","far fa-eye");

        //añadimos la clase al boton
        btnVerBill.attr("class","btn btn-info btn-xs");
        btnVerBill.attr("type","submit");
        btnVerBill.attr("id","btnmodal");

        //añadimos atributo modal al boton
        btnVerBill.attr("data-toggle","modal");
        btnVerBill.attr("data-target","#myModal");

        //Añadimos el enlace con el codigo de billete al boton
        btnVerBill.attr("href","{{ action('billetes@showBillete', ['id' => "+arrayBillete[i]["id"]+"]) }}");

        //añadimos el icono al boton
        btnVerBill.append(icono);

        //añadimos el boton a un td
        tdAcci.append(btnVerBill);

        
        
        //Añadimos los td al tr

        tr.append(tdNom,tdApell,tdCoBill,tdTelef,tdPasap,tdCiud,tdPais,tdAcci);
        //Añadimos el tr a la tabla
        tabla.append(tr);

        //añadimos la table al div donde se mostrar 
        var divPadre = $("#clientesTable");
        divPadre.append(tabla);
       

}
}
