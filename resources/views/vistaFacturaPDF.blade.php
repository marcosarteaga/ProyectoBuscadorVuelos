<h1 id="titulo" style="margin-left: 10%; margin-top: 2%;">Factura</h1>


<div >

<?php
	for ($i=0; $i <count($arrayPasajeros) ; $i++) {
	echo "<table   cellpadding='10' '>"; 
		echo "<tr>";
			echo "<td ROWSPAN='4'>";
				echo "<img src='img/avionFactura.png'>";
			echo "</td>";
		echo"</tr>";
		echo "<tr>";
			echo "<td>";
				echo "<label><b>Nombre:</b></label>";
				echo "<br>";
					print_r($arrayPasajeros[$i]->Nombre);
				echo "<br>";
				echo "<label><b>Primer Apellido:</b></label>";
				echo "<br>";
					print_r($arrayPasajeros[$i]->PrimerApellido);
				echo "<br>";
				echo "<label><b>Segundo Apellido:</b></label>";
				echo "<br>";
					print_r($arrayPasajeros[$i]->SegundoApellido);
				echo "<br>";
				echo "<label><b>N. Documento:</b></label>";
				echo "<br>";
					print_r($arrayPasajeros[$i]->NumeroDocumento);
				
				
			echo "</td>";
			echo "<td>";
				
				echo "<label><b>Ciudad Origen:</b></label>";
			echo "<br>";
				print_r($origen[0]->Nombre);
			echo "<br>";
			echo "<label><b>Ciudad Origen:</b></label>";
			echo "<br>";
				print_r($destino[0]->Nombre);
			echo "<br>";
				echo "<img width=100px; src='img/codigoQR.jpg'>";
			echo "</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>";
				echo "<label><b>Fecha ida:</b></label>";
				print_r($arrayFechas[0]->FechaIda);
			echo "<br>";
				echo "<label><b>Hora ida:</b></label>";
				print_r($arrayFechas[0]->HoraIda);	
			echo "</td>";
			echo "<td>";
				echo "<label><b>Fecha Vuelta:</b></label>";
				print_r($arrayFechas[0]->FechaVuelta);
			echo "<br>";
				echo "<label><b>Hora Vuelta:</b></label>";
				print_r($arrayFechas[0]->HoraIda);	
			echo "</td>";
		echo "</tr>";
	echo "</table>";
	echo "<br>";
	}
 ?>
</div>