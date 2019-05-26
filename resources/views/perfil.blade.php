@include('includes.in-modificarUser')

<?php  

$id = auth()->user()->id;
$nombre = auth()->user()->name ;
$email = auth()->user()->email;
$telefono = auth()->user()->telefono;

?>



<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<a href="/" style="float: left;" class="btn btn-primary" >Volver</a>
	

<style type="text/css">
    body{
        background-color: #EAF3FF;
    }
</style>

<div class="container" >
	<div class="Back">
        <i class="fas fa-user-circle"></i>
    </div>

	<form id="formulario" method="post" action="{{ route('modificar') }}" >
		 {{csrf_field()}}
		<input type="text" name="id" hidden="" value="<?php echo"$id"?>"><br>
		<label>Nombre:</label><br>
		<input class="form-control" type="text" name="name" value="<?php echo"$nombre"?>" disabled><br>
		<label>Email: </label><br>
		<input class="form-control" type="text" name="email" value="<?php echo"$email"?>"  disabled><br>
		<label>Telefono: </label><br>
		<input class="form-control" type="number" name="telefono" value="<?php echo"$telefono"?>" disabled><br><br>
		<div class="buttons">
		<button class="btn btn-primary" id="boton" disabled="" type="submit" >Guardar</button>
		<button  class="btn btn-primary" type="button" onclick="modificar()" >Modificar</button>
		</div>
	</form>
</div>