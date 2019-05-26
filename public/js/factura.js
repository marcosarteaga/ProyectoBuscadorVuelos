function showFactura(arrayFactura,corigen,cdestino,fechas){
	var ciuOri = corigen[0]["Nombre"];
	var ciuDest = cdestino[0]["Nombre"];
	var fvuelta = fechas[0]["FechaVuelta"];
	console.log(fvuelta);
	if (fvuelta!=null) {
		for (var i = 0; i < arrayFactura.length; i++) {
			var numero = 1;
			var dTicket = $("<div>").attr("class","ticket");
				var dStub = $("<div>").attr("class","stub");
					var dTop = $("<div>").attr("class","top");
						var sAdmit = $("<span>").attr("class","admit").text("Vuelo");
						var sLine = $("<span>").attr("class","line");
						var sNum = $("<span>").attr("class","num").text("Number ");
						var sNumbil = $("<span>").text("31415926");
					var dNumGran = $("<div>").attr("class","number number-img");
					var img = $("<img>").attr("src","https://static.wixstatic.com/media/24c9ca_3dcab90e6dfc4f40950793a6af27ca24~mv2.png/v1/fill/w_701,h_274,al_c,usm_0.66_1.00_0.01/avion.png").css({width:"80%"});
					dNumGran.append(img);
					

				var dCheck = $("<div>").attr("class","check");
					var dtNombre = $("<div>").attr("class","divNombre").text("Nombre:");
					var nombre = $("<div>").attr("class","divAtr").append(arrayFactura[i]["Nombre"]);
					var dtPApell = $("<div>").attr("class","divNombre").text("P.Apellido:");
					var pApell = $("<div>").attr("class","divAtr").append(arrayFactura[i]["PrimerApellido"]);

					var dtSApell = $("<div>").attr("class","divNombre").text("S.Apellido:");
					var sApell = $("<div>").attr("class","divAtr").append(arrayFactura[i]["SegundoApellido"]);

					var stDocu = $("<div>").attr("class","divNombre").text("N.Documento:");
					var docu = $("<div>").attr("class","divAtr").append(arrayFactura[i]["NumeroDocumento"]);

					var corigen = $("<div>").attr("class","dorigen").text("C.Origen:");
					var orig = $("<div>").attr("class","dorigen2").append(ciuOri);

					var cdest = $("<div>").attr("class","destino").text("C.Destino:");
					var desti = $("<div>").attr("class","destino2").append(ciuDest);
					var qr = $("<div>").attr("class","qrimg");
					var imgqr = $("<img>").attr("src","http://www.codigos-qr.com/qr/php/qr_img.php?d=https%3A%2F%2Fagenciauniversotravels.com%2F&s=6&e=m");
					imgqr.attr("class","imgqr");
					qr.append(imgqr);


					
					var dInfo = $("<div>").attr("class","info divSection");
						var section1 = $("<section>");
							var dTitle1 = $("<div>").attr("class","title ").text("F.Ida");
							var dDate = $("<div>").append(fechas[i]["FechaIda"]);
						var section2 = $("<section>");
							var dTitle2 = $("<div>").attr("class","title  ").text("H.Ida");
							var dNombre = $("<div>").append(fechas[i]["HoraIda"]);
						var section3 = $("<section>");
							var dTitle3 = $("<div>").attr("class","title  ").text("F.Vuelta");
							var dNumber3 = $("<div>").append(fechas[i]["FechaVuelta"]);
						var section4 = $("<section>");
							var dTitle4 = $("<div>").attr("class","title ").text("H.Vuelta");
							var dNumber4 = $("<div>").append(fechas[i]["HoraVuelta"]);


			sNum.append(sNumbil);
			dTop.append(sAdmit,sLine,sNum);
			dStub.append(dTop,dNumGran);
			section1.append(dTitle1,dDate);
			section2.append(dTitle2,dNombre);
			section3.append(dTitle3,dNumber3);
			section4.append(dTitle4,dNumber4);
			dInfo.append(section1,section2,section3,section4);
			dCheck.append(dtNombre,nombre,dtPApell,pApell,dtSApell,sApell,stDocu,docu,corigen,orig,cdest,desti,imgqr,dInfo);
			dTicket.append(dStub,dCheck);

			var titulo = $("#titulo");
			titulo.after(dTicket);

			

		}
	}else{
		for (var i = 0; i < arrayFactura.length; i++) {
			var numero = 1;
			var dTicket = $("<div>").attr("class","ticket");
				var dStub = $("<div>").attr("class","stub");
					var dTop = $("<div>").attr("class","top");
						var sAdmit = $("<span>").attr("class","admit").text("Vuelo");
						var sLine = $("<span>").attr("class","line");
						var sNum = $("<span>").attr("class","num").text("Number ");
						var sNumbil = $("<span>").text("31415926");
					var dNumGran = $("<div>").attr("class","number number-img");
					var img = $("<img>").attr("src","https://static.wixstatic.com/media/24c9ca_3dcab90e6dfc4f40950793a6af27ca24~mv2.png/v1/fill/w_701,h_274,al_c,usm_0.66_1.00_0.01/avion.png").css({width:"80%"});
					dNumGran.append(img);
					

				var dCheck = $("<div>").attr("class","check");
					var dtNombre = $("<div>").attr("class","divNombre").text("Nombre:");
					var nombre = $("<div>").attr("class","divAtr").append(arrayFactura[i]["Nombre"]);
					var dtPApell = $("<div>").attr("class","divNombre").text("P.Apellido:");
					var pApell = $("<div>").attr("class","divAtr").append(arrayFactura[i]["PrimerApellido"]);

					var dtSApell = $("<div>").attr("class","divNombre").text("S.Apellido:");
					var sApell = $("<div>").attr("class","divAtr").append(arrayFactura[i]["SegundoApellido"]);

					var stDocu = $("<div>").attr("class","divNombre").text("N.Documento:");
					var docu = $("<div>").attr("class","divAtr").append(arrayFactura[i]["NumeroDocumento"]);

					var corigen = $("<div>").attr("class","dorigen").text("C.Origen:");
					var orig = $("<div>").attr("class","dorigen2").append(ciuOri);

					var cdest = $("<div>").attr("class","destino").text("C.Destino:");
					var desti = $("<div>").attr("class","destino2").append(ciuDest);
					var qr = $("<div>").attr("class","qrimg");
					var imgqr = $("<img>").attr("src","http://www.codigos-qr.com/qr/php/qr_img.php?d=https%3A%2F%2Fagenciauniversotravels.com%2F&s=6&e=m");
					imgqr.attr("class","imgqr");
					qr.append(imgqr);


					
					var dInfo = $("<div>").attr("class","info divSection");
						var section1 = $("<section>");
							var dTitle1 = $("<div>").attr("class","title ").text("F.Ida");
							var dDate = $("<div>").append(fechas[i]["FechaIda"]);
						var section2 = $("<section>");
							var dTitle2 = $("<div>").attr("class","title  ").text("H.Ida");
							var dNombre = $("<div>").append(fechas[i]["HoraIda"]);
						var section3 = $("<section>");
							var dTitle3 = $("<div>").attr("class","title  ").text("F.Vuelta");
							
						var section4 = $("<section>");
							var dTitle4 = $("<div>").attr("class","title ").text("H.Vuelta");
							


			sNum.append(sNumbil);
			dTop.append(sAdmit,sLine,sNum);
			dStub.append(dTop,dNumGran);
			section1.append(dTitle1,dDate);
			section2.append(dTitle2,dNombre);
			section3.append(dTitle3);
			section4.append(dTitle4);
			dInfo.append(section1,section2,section3,section4);
			dCheck.append(dtNombre,nombre,dtPApell,pApell,dtSApell,sApell,stDocu,docu,corigen,orig,cdest,desti,imgqr,dInfo);
			dTicket.append(dStub,dCheck);

			var titulo = $("#titulo");
			titulo.after(dTicket);


		}
	}	

}