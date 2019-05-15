@include('includes.in-resultadosBusqueda')
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mostrar Resultados</title>
</head>
<body>
	<div class="container">
		<h2 style="margin-top: 5%">Resultados de la búsqueda</h2>
		<div id="divContenidoResultado">
			
		</div>	
	</div>
</body>
</html>

<script type="text/javascript">
	var arrayResuldatos = <?php echo json_encode($resultadoBusquedaFinal);?>;
	var arrayCiudadOrigen = <?php echo json_encode($ciudaOrigenBusqueda);?>;
	var arrayCiudadDestino = <?php echo json_encode($ciudadDestinoBusqueda);?>;
	ResultadosBilletes('divContenidoResultado',arrayResuldatos,arrayCiudadOrigen,arrayCiudadDestino,100);
</script>