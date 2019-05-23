@include('includes.in-resultadosBusqueda')
<?php 
session_start();

$numeroAdultos= $_SESSION["NumeroAdultos"]=$_POST["adultos"];


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mostrar Resultados</title>
</head>
<body>
	<div class="container">
		<form method="get" action="datosviajeros">
		<h2 style="margin-top: 5%">Resultados de la búsqueda</h2>
		<div id="divContenidoResultado">
			

		</div>
		
			<input type="submit" class="btn btn-outline-primary mt-4" value="Comprar" style="float: right; margin-bottom: 5%;">
		</form>	
	</div>
</body>
</html>
<?php

$TipoDeViaje = $_POST['tipoViaje'];

if ($TipoDeViaje[0]=='Ida') {
	?>
	<script type="text/javascript">
		var arrayResuldatos = <?php echo json_encode($resultadoBusquedaFinal);?>;
		var arrayCiudadOrigen = <?php echo json_encode($ciudaOrigenBusqueda);?>;
		var arrayCiudadDestino = <?php echo json_encode($ciudadDestinoBusqueda);?>;
		var arrayComision = <?php echo json_encode($comisionActual);?>;

		ResultadosBilletes('divContenidoResultado',arrayResuldatos,arrayCiudadOrigen,arrayCiudadDestino,arrayComision);	
	</script>
<?php
}
else{
?>
<script type="text/javascript">
		var arrayResuldatosIda = <?php echo json_encode($resultadoBusquedaIda);?>;
		var arrayResuldatosVuelta = <?php echo json_encode($resultadoBusquedaVuelta);?>;
		var arrayCiudadOrigen = <?php echo json_encode($ciudaOrigenBusqueda);?>;
		var arrayCiudadDestino = <?php echo json_encode($ciudadDestinoBusqueda);?>;
		var arrayComision = <?php echo json_encode($comisionActual);?>;

		ResultadosBilletesIdaVuelta('divContenidoResultado',arrayResuldatosIda,arrayResuldatosVuelta,arrayCiudadOrigen,arrayCiudadDestino,arrayComision);

</script>
<?php	
}
?>




