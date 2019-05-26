@include('includes.in-billetesPasajeros')
<style type="text/css">
    body{
        background-color: #EAF3FF;
    }
</style>


<a href="/" style="float: left;" class="btn btn-primary" >Volver</a>
	
<h1 align="center" id="titulo" >Billes Comprados</h1>

<script type="text/javascript">
	var registroClientes = <?php echo json_encode($arrayBilletes);?>;
	verBilletesUser(registroClientes);
</script>