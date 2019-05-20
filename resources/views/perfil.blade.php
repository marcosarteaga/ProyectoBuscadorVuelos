@include('includes.in-modificarUser')

<?php  

$id = auth()->user()->id;
$nombre = auth()->user()->name ;
$email = auth()->user()->email;
$telefono = auth()->user()->telefono;

?>

<form id="formulario" method="post" action="{{ route('modificar') }}" >
	 {{csrf_field()}}
	<input type="text" name="id" hidden="" value="<?php echo"$id"?>"><br>
	<label>Nombre:</label><br>
	<input type="text" name="name" value="<?php echo"$nombre"?>" disabled><br>
	<label>Email: </label><br>
	<input type="text" name="email" value="<?php echo"$email"?>"  disabled><br>
	<label>Telefono: </label><br>
	<input type="number" name="telefono" value="<?php echo"$telefono"?>" disabled><br><br>
	<button id="boton" disabled="" type="submit" >Guardar</button>
	<button type="button" onclick="modificar()" >Modificar</button>
</form>