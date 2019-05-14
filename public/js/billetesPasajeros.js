function verBilletes(arrayBillete){
	for (var i = 0; i < arrayBillete.length; i++) {
        //creamos la tabla
        var tabla = $("<table>");

        tabla.attr("class","table table-striped custab");
        //Creamos th para los titulos de cada atributo de cliente
        var thfi = $("<th>").text("Fecha Ida");
        var thfv = $("<th>").text("Fecha Vuelta");
        var thhi = $("<th>").text("Hora Ida");
        var thhv = $("<th>").text("Hora Vuelta");
        var theb = $("<th>").text("Estado Billete");
        var thep = $("<th>").text("Estado Pago");
        var thpr = $("<th>").text("Precio");
        var thcpr = $("<th>").text("Comision");

        //Añadimos los titulos a la tabla

        tabla.append(thfi,thfv,thhi,thhv,theb,thep,thpr,thcpr);


        //creamos celda de cada campo de cliente
        var tr = $("<tr>");
        var tdfi = $("<td>").append(arrayBillete[i]["FechaIda"]);
        var tdfv = $("<td>").append(arrayBillete[i]["FechaVuelta"]);
        var tdhi = $("<td>").append(arrayBillete[i]["HoraIDa"]);
        var tdhv = $("<td>").append(arrayBillete[i]["HoraVuelta"]);
        var tdeb = $("<td>").append(arrayBillete[i]["EstadoBillete"]);
        var tdep = $("<td>").append(arrayBillete[i]["EstadoPago"]);
        var tdpr = $("<td>").append(arrayBillete[i]["Precio"]);
        var tdcpr = $("<td>").append(arrayBillete[i]["ComisionPrecio"]);

        //Añadimos los td al tr

        tr.append(tdfi,tdfv,tdhi,tdhv,tdeb,tdep,tdpr,tdcpr);
        //Añadimos el tr a la tabla
        tabla.append(tr);

        //añadimos la table al div donde se mostrar 
        var divPadre = $("#titulo");
        divPadre.append(tabla);
       

}
}