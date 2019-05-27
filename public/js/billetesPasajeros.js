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
        tabla.css({fontSize: "18px"});
        divPadre.after(tabla);
       

}
}


function verBilletesUser(arrayBillete){
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
        

        //Añadimos los titulos a la tabla

        tabla.append(thfi,thfv,thhi,thhv,theb,thep,thpr);


        //creamos celda de cada campo de cliente
        var tr = $("<tr>");
        var tdfi = $("<td>").append(arrayBillete[i]["FechaIda"]);
        var tdfv = $("<td>").append(arrayBillete[i]["FechaVuelta"]);
        var tdhi = $("<td>").append(arrayBillete[i]["HoraIDa"]);
        var tdhv = $("<td>").append(arrayBillete[i]["HoraVuelta"]);
        var tdeb = $("<td>").append(arrayBillete[i]["EstadoBillete"]);
        var tdep = $("<td>").append(arrayBillete[i]["EstadoPago"]);
        var tdpr = $("<td>").append(arrayBillete[i]["Precio"]);
       

        //Añadimos los td al tr

        tr.append(tdfi,tdfv,tdhi,tdhv,tdeb,tdep,tdpr);
        //Añadimos el tr a la tabla
        tabla.append(tr);
        tabla.css({fontSize: "18px"});
        //añadimos la table al div donde se mostrar 
        var divPadre = $("#titulo");
        divPadre.after(tabla);
       

}
}




function ResultadosBilletes(elementoPadre,arrayResuldatos,arrayCiudadOrigen,arrayCiudadDestino,precioComision,numeroTotalPasajeros){
        
        var titulo = ('<h3>IDA </3>');
        var divPadre = $("#"+elementoPadre);

        divPadre.append(titulo);

        for (var i = 0; i < arrayResuldatos.length; i++) {
                //creamos la tabla
                var tabla = $("<table>");
                
                tabla.attr("class","table table-striped custab");
                //Creamos th para los titulos de cada atributo de cliente
                var thco = $("<th>").text("Ciudad origen").addClass('table-primary');
                var thcd = $("<th>").text("Ciudad destino").addClass('table-primary');
                var thfi = $("<th>").text("Fecha ida").addClass('table-primary');
                var thhi = $("<th>").text("Hora Ida").addClass('table-primary');
                var thhv = $("<th>").text("Hora Llegada").addClass('table-primary');
                var thpr = $("<th>").text("Precio").addClass('table-primary');

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
                var precioTotalFinal = precioTotal + parseInt(precioComision[0]["comision"]);
                var tdpr = $("<td>").append(precioTotalFinal,"€");
                var tdRadio = $('<input type="radio" class="mt-3 total" name="billeteIda" id="'+precioTotalFinal+'" onclick="sumar();" value="'+arrayResuldatos[i]["id"]+'">');

                //Añadimos los td al tr

                tr.append(tdco,tdcd,tdfi,tdhi,tdhv,tdpr,tdRadio);
                //Añadimos el tr a la tabla
                tabla.append(tr);

                //añadimos la table al div donde se mostrar 
                
                divPadre.append(tabla);
       
        }
        var inputPasajeros = $('<input type="hidden" id="TotalPasajeros"  value="'+numeroTotalPasajeros+'">');
        divPadre.append(inputPasajeros);
}







function ResultadosBilletesIdaVuelta(elementoPadre,arrayResuldatosIda,arrayResuldatosVuelta,arrayCiudadOrigen,arrayCiudadDestino,precioComision,numeroTotalPasajeros){
        
        var tituloIda = ('<h3>IDA </3>');
        var divPadre = $("#"+elementoPadre);

        divPadre.append(tituloIda);

        for (var i = 0; i < arrayResuldatosIda.length; i++) {
                //creamos la tabla
                var tabla = $("<table>");
                
                tabla.attr("class","table table-striped custab");
                //Creamos th para los titulos de cada atributo de cliente
                var thco = $("<th>").text("Ciudad origen").addClass('table-primary');
                var thcd = $("<th>").text("Ciudad destino").addClass('table-primary');
                var thfi = $("<th>").text("Fecha ida").addClass('table-primary');
                var thhi = $("<th>").text("Hora Ida").addClass('table-primary');
                var thhv = $("<th>").text("Hora Llegada").addClass('table-primary');
                var thpr = $("<th>").text("Precio").addClass('table-primary');

                //Añadimos los titulos a la tabla

                tabla.append(thco,thcd,thfi,thhi,thhv,thpr);


                //creamos celda de cada campo de cliente
                var tr = $("<tr>");
                var tdco = $("<td>").append(arrayCiudadOrigen[0]["Nombre"]);
                var tdcd = $("<td>").append(arrayCiudadDestino[0]["Nombre"]);
                var tdfi = $("<td>").append(arrayResuldatosIda[i]["Fecha"]);
                var tdhi = $("<td>").append(arrayResuldatosIda[i]["HoraIda"]);
                var tdhv = $("<td>").append(arrayResuldatosIda[i]["HoraLlegada"]);
                var precioTotal = arrayResuldatosIda[i]["Precio"];
                var precioTotalFinal = precioTotal + parseInt(precioComision[0]["comision"]);
                var tdpr = $("<td>").append(precioTotalFinal,"€");
                var tdRadio = $('<input type="radio" class="mt-3 total" name="billeteIda" id="'+precioTotalFinal+'" onclick="sumar();" value="'+arrayResuldatosIda[i]["id"]+'">');
                
                console.log(precioComision[0]["comision"]);

                //Añadimos los td al tr

                tr.append(tdco,tdcd,tdfi,tdhi,tdhv,tdpr,tdRadio);
                //Añadimos el tr a la tabla
                tabla.append(tr);

                //añadimos la table al div donde se mostrar 
                
                divPadre.append(tabla); 
        }
        var inputPasajeros = $('<input type="hidden" id="TotalPasajeros"  value="'+numeroTotalPasajeros+'">');
        divPadre.append(inputPasajeros);

        var tituloVuelta = ('<h3>VUELTA </3>');
        divPadre.append(tituloVuelta);

        for (var i = 0; i < arrayResuldatosVuelta.length; i++) {
                //creamos la tabla
                var tabla = $("<table>");
                
                tabla.attr("class","table table-striped custab");
                //Creamos th para los titulos de cada atributo de cliente
                var thco = $("<th>").text("Ciudad origen").addClass('table-success');
                var thcd = $("<th>").text("Ciudad destino").addClass('table-success');
                var thfi = $("<th>").text("Fecha ida").addClass('table-success');
                var thhi = $("<th>").text("Hora Ida").addClass('table-success');
                var thhv = $("<th>").text("Hora Llegada").addClass('table-success');
                var thpr = $("<th>").text("Precio").addClass('table-success');

                //Añadimos los titulos a la tabla

                tabla.append(thcd,thco,thfi,thhi,thhv,thpr);


                //creamos celda de cada campo de cliente
                var tr = $("<tr>");
                var tdco = $("<td>").append(arrayCiudadOrigen[0]["Nombre"]);
                var tdcd = $("<td>").append(arrayCiudadDestino[0]["Nombre"]);
                var tdfi = $("<td>").append(arrayResuldatosVuelta[i]["Fecha"]);
                var tdhi = $("<td>").append(arrayResuldatosVuelta[i]["HoraIda"]);
                var tdhv = $("<td>").append(arrayResuldatosVuelta[i]["HoraLlegada"]);
                var precioTotal = arrayResuldatosVuelta[i]["Precio"];
                var precioTotalFinal = precioTotal + parseInt(precioComision[0]["comision"]);
                var tdpr = $("<td>").append(precioTotalFinal,"€");
                var tdRadio = $('<input type="radio" class="mt-3 total" name="billeteVuelta" id="'+precioTotalFinal+'" onclick="sumar();" value="'+arrayResuldatosVuelta[i]["id"]+'">');
                //Añadimos los td al tr

                tr.append(tdcd,tdco,tdfi,tdhi,tdhv,tdpr,tdRadio);
                //Añadimos el tr a la tabla
                tabla.append(tr);

                //añadimos la table al div donde se mostrar 
                
                divPadre.append(tabla);
        }
}


function datosViajeros(elementoPadre,numPasajeros){
        console.log(numPasajeros);
        //Buscamos el elementoPadre
        var elementoPadre = $('#'+elementoPadre);
        for (var i =  1 ; i <= numPasajeros ; i++) {
                
               
                //Creando Div pasajeros
                var divContenedor = $('<div><br><br>').addClass('container');
                var divAccordion  = $('<div style="border-bottom: 1px solid rgba(0,0,0,.125);">').addClass('accordion');
                var divCard = $('<div>').addClass('card card-default');
                var divCardHear = $('<div>').addClass('card-header');


                //Creando titulo div general
                var tituloH4 = $('<h4>').addClass('card-title');
                var aTogle = $('<a data-toggle="collapse" data-parent="#accordion" href="#">');
                var iIcono = $('<i class="glyphicon glyphicon-search text-gold"></i>');
                var TituloNegrita = $('<b>Datos Viajero '+ i +' </b>');

                var divCollapse1 =$('<div id="collapse1" class="collapse show">');
                var divCardBody =$('<div class="card-body">');
                

                //Contenedor Row1
                var divRow1 = $('<div class="row">');

                //divHijo1
                var divHijo1 = $('<div class="col-md-3 col-lg-4">');
                var divForm1=$('<div class="form-group">');

                var labelNombre=$('<label class="control-label">Nombre</label>');
                var inputNombre=$(' <input type="text" class="form-control" required  name="NombrePasajero'+i+'" >');

                divForm1.append(labelNombre,inputNombre);
                divHijo1.append(divForm1);
                divRow1.append(divHijo1);


                //divHijo2
                var divhijo2=$('<div class="col-md-1 col-lg-4">');
                var divForm2=$('<div class="form-group">');
                var labelPapellido=$('<label class="control-label">Primer apellido</label>');
                var inputPapellidos=$('<input type="text" class="form-control" required name="Papellido'+i+'" >');

                divForm2.append(labelPapellido,inputPapellidos);
                divhijo2.append(divForm2);
                divRow1.append(divhijo2);


                //divHijo2segundo apellido
                var divhijo21=$('<div class="col-md-1 col-lg-4">');
                var divForm21=$('<div class="form-group">');
                var labelSapellidos=$('<label class="control-label">Segundo apellido</label>');
                var inputSapellidos=$('<input type="text" class="form-control" required name="Sapellido'+i+'" >');

                divForm21.append(labelSapellidos,inputSapellidos);
                divhijo21.append(divForm21);
                divRow1.append(divhijo21);


                

                //Contenedor Row2
                var divRow2 = $('<div class="row">');


                //divHijo3
                var divhijo3=$('<div class="col-md-1 col-lg-4">');
                var divForm3=$('<div class="form-group">');
                var labelNumeroPasaporte=$('<label class="control-label">Número de documento</label>');
                var inputNumeroPasaporte=$('<input class="form-control" type="text" required name="NumeroDocumento'+i+'"  >');


                //divHijo5
                var divhijo5 =$('<div class="col-md-4 col-lg-4">');
                var divForm5=$('<div class="form-group">');
                var labelSelectDocumento=$('<label class="control-label">Tipo de documento</label><br>')
                var selectDocumento =$('<select class="form-control" name="SelectDocumento'+i+'"  id="SelectDocumento'+i+'">documento</select>');
                var option1=$('<option value="DNI">DNI</option>');
                var option2=$('<option value="Pasaporte">Pasaporte</option>');
                var option3=$('<option value="NIE">NIE</option>');

                selectDocumento.append(option1,option2,option3);

                //divHijo6
                var divhijo6=$('<div class="col-md-2 col-lg-4">');
                var divForm6=$('<div class="form-group">');
                var labelSexo=$('<label class="control-label">Sexo:</label>');
                var selectSexo =$('<select class="form-control" name="SelectSexo'+i+'"  id="SelectSexo'+i+'">Sexo</select>');
                var option1Sexo=$('<option value="Hombre">Hombre</option>');
                var option2Sexo=$('<option value="Mujer">Mujer</option>');

                selectSexo.append(option1Sexo,option2Sexo);


                //Contenedor Row3
                var divRow3 = $('<div class="row">');


                //append titulo "datos personales"
                aTogle.append(iIcono,TituloNegrita);
                tituloH4.append(aTogle);
                divCardHear.append(tituloH4);
                divCollapse1.append(divCardBody);
                divCard.append(divCardHear,divCollapse1);
                divAccordion.append(divCard);
                

                //append select documento
                divForm5.append(labelSelectDocumento,selectDocumento);
                divhijo5.append(divForm5);
                divRow2.append(divhijo5);

                //append input numero documento

                divForm3.append(labelNumeroPasaporte,inputNumeroPasaporte);
                divhijo3.append(divForm3);
                divRow2.append(divhijo3);


                //append input ciudad
                divForm6.append(labelSexo,selectSexo);
                divhijo6.append(divForm6);
                divRow2.append(divhijo6);


                //append rows
                divCardBody.append(divRow1,divRow2);
                divContenedor.append(divAccordion);

                elementoPadre.append(divContenedor);    
        }

        var inputSubmit =$('<input type="submit" value="Pagar" class="btn btn-outline-primary mb-5 mt-4" style="float: right; margin-right:7%">');
        elementoPadre.append(inputSubmit);
}


function sumar() {
        var total = 0;
        var total2=0;
        $(".total").each(function() {
                
                if (isNaN(parseFloat($('input:radio[name=billeteIda]:checked').attr("id")))) {
                        total=  0;
                } else {
                        total= parseFloat($('input:radio[name=billeteIda]:checked').attr("id"));
                }
                if (isNaN(parseFloat($('input:radio[name=billeteVuelta]:checked').attr("id")))) {
                        total2=  0;
                } else {
                        total2=  parseFloat($('input:radio[name=billeteVuelta]:checked').attr("id"));
                }
                
        });
        var pasajerosTotal = $('#TotalPasajeros').val();
        console.log(pasajerosTotal);

        var totalCostes = total+total2;

        var totalBilletes = totalCostes * pasajerosTotal;
        document.getElementById('pTotal').innerHTML = totalBilletes +" €";
}