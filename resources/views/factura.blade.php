@include('includes.in-factura')


<h1 id="titulo" >Factura</h1>


<script type="text/javascript">

	var arrayFactura = <?php echo json_encode($arrayPasajeros);?>;
	var corigen = <?php echo json_encode($origen);?>;
	var cdestino = <?php echo json_encode($destino);?>;
	var fechas = <?php echo json_encode($arrayFechas);?>;
	showFactura(arrayFactura,corigen,cdestino,fechas);
</script>
	


<a href="pdf">DESCARGAR</a>