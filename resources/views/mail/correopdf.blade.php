<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>¡Buen Viaje!</h1>
	<p>
		<?php 
		$nameUsuario = auth()->user()->name;
		 ?>
		Buenos días, Sr/Sra. <?php echo $nameUsuario; ?><br> 
		Buscador de viajes te agradece la confianza por realizar la compra de tu billete de avión con nosotros.
		Puedes realizar la descarga de tu billete que esta adjunto a este correo electrónico.<br>

		Saludos,<br>
		Te deseásemos un Buen viaje!<br>

	</p>
</body>
</html>