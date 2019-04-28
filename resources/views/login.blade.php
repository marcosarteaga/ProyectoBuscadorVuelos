<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Elegant Account Login Form with Avatar Icon</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
<div class="login-form">    
    <form action="{{ asset('inicio') }}" method="get">
		<div class="avatar"><i class="material-icons">&#xE7FF;</i></div>
    	<h4 class="modal-title">Login </h4>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Usuario" required="required">
        </div>
        <div class="form-group">
            <input type="Password" class="form-control" placeholder="Contraseña" required="required">
        </div>
        <div class="form-group small clearfix">
            <label class="checkbox-inline"><input type="checkbox"> Recuerdame</label>
            <a href="{{ asset('recuperar') }}" class="forgot-link">¿Has olvidado tu contraseña?</a>
        </div> 
        <input type="submit" class="btn btn-primary btn-block btn-lg" value="Login">              
    </form>			
    <div class="text-center small">¿No tienes cuenta? <a href="{{ asset('registro') }}" >Regístrate</a></div>
</div>
</body>
</html>  