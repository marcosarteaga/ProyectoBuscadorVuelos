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
        var thApell = $("<th>").text("Primer Apellido");
        var thApell2 = $("<th>").text("Segundo Apellido");
        var thPasa = $("<th>").text("Documento");
        var thAcci = $("<th>").text("Billete");

        //Añadimos los titulos a la tabla

        tabla.append(thNom,thApell,thApell2,thPasa,thAcci);


        //creamos celda de cada campo de cliente
        var tr = $("<tr>");
        var tdNom = $("<td>").append(arrayBillete[i]["Nombre"]);
        var tdApell = $("<td>").append(arrayBillete[i]["PrimerApellido"]);
        var tdApell2 = $("<td>").append(arrayBillete[i]["SegundoApellido"]);
        var tdPasap = $("<td>").append(arrayBillete[i]["NumeroDocumento"]);
        var tdAcci = $("<td>");

        //creamos un boton
        var btnVerBill = $("<a>");

        //creamos una i para el icono del boton
        var icono = $("<i>").attr("class","far fa-eye");

        //añadimos la clase al boton
        btnVerBill.attr("class","btn btn-info btn-xs");
        
        

        //Añadimos el enlace con el codigo de billete al boton
        btnVerBill.attr({"href":"/billete/"+arrayBillete[i]['id']});

        //añadimos el icono al boton
        btnVerBill.append(icono);

        //añadimos el boton a un td
        tdAcci.append(btnVerBill);

        
        
        //Añadimos los td al tr

        tr.append(tdNom,tdApell,tdApell2,tdPasap,tdAcci);
        //Añadimos el tr a la tabla
        tabla.append(tr);

        //añadimos la table al div donde se mostrar 
        var divPadre = $("#clientesTable");
        divPadre.append(tabla);
       

}
}