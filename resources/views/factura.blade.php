@include('includes.in-factura')

<style type="text/css">
    body{
        background-color: #EAF3FF;
    }
</style>

<a href="/" style="float: left; margin-left: 1%;" class="btn btn-primary" >Inicio</a>
<h1 align="center" id="titulo" >Factura</h1>


<script type="text/javascript">

	var arrayFactura = <?php echo json_encode($arrayPasajeros);?>;
	var corigen = <?php echo json_encode($origen);?>;
	var cdestino = <?php echo json_encode($destino);?>;
	var fechas = <?php echo json_encode($arrayFechas);?>;
	showFactura(arrayFactura,corigen,cdestino,fechas);
</script>
	


<a class="btn btn-success" style="margin-left: 65%; margin-top: 3%; margin-bottom: 3%;"s href="pdf">DESCARGAR</a>