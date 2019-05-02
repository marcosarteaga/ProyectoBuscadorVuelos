
<title>Login</title>
  
@include('includes.head');


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


@include('includes.footer');