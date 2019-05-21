@include('includes.in-billetesPasajeros')
<h1 align="center"  id="titulo" >Billetes</h1>

<script type="text/javascript">
	var registroClientes = <?php echo json_encode($arrayBilletes);?>;
	verBilletes(registroClientes);
</script>

