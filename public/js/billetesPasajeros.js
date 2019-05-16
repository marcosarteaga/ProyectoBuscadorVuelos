function verBilletes(arrayBillete){
	for (var i = 0; i < arrayBillete.length; i++) {
        //creamos la tabla
        var tabla = $("<table>");

        tabla.attr("class","table table-striped custab display");
        tabla.attr("id","table_id");
        
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



function ResultadosBilletes(elementoPadre,arrayResuldatos,arrayCiudadOrigen,arrayCiudadDestino,precioComision){
        
        for (var i = 0; i < arrayResuldatos.length; i++) {
        //creamos la tabla
        var tabla = $("<table>");
        
        tabla.attr("class","table table-striped custab");
        //Creamos th para los titulos de cada atributo de cliente
        var thco = $("<th>").text("Ciudad origen");
        var thcd = $("<th>").text("Ciudad destino");
        var thfi = $("<th>").text("Fecha ida");
        var thhi = $("<th>").text("Hora Ida");
        var thhv = $("<th>").text("Hora Llegada");
        var thpr = $("<th>").text("Precio");

        //Añadimos los titulos a la tabla

        tabla.append(thco,thcd,thfi,thhi,thhv,thpr);


        //creamos celda de cada campo de cliente
        var tr = $("<tr>");
        var tdco = $("<td>").append(arrayCiudadOrigen[0]["Nombre"]);
        var tdcd = $("<td>").append(arrayCiudadDestino[0]["Nombre"]);
        var tdfi = $("<td>").append(arrayResuldatos[i]["Fecha"]);
        var tdhi = $("<td>").append(arrayResuldatos[i]["HoraIda"]);
        var tdhv = $("<td>").append(arrayResuldatos[i]["HoraLlegada"]);
        var precioTotal = arrayResuldatos[i]["Precio"];
        var precioTotalFinal = precioTotal + precioComision;
        var tdpr = $("<td>").append(precioTotalFinal);

        //Añadimos los td al tr

        tr.append(tdco,tdcd,tdfi,tdhi,tdhv,tdpr);
        //Añadimos el tr a la tabla
        tabla.append(tr);

        //añadimos la table al div donde se mostrar 
        var divPadre = $("#"+elementoPadre);
        divPadre.append(tabla);
       

}
}