
<title>Login</title>



@include('includes.in-login')


<div class="login-form">    
    <form method="POST" action="{{ route('login') }}">
        @csrf
		<div class="avatar"><i class="material-icons">&#xE7FF;</i></div>
    	<h4 class="modal-title">Login </h4>
        <div class="form-group">
            <input placeholder="Usuario" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            <input  placeholder="Contraseña" required="required" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autocomplete="current-password"> 
            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group small clearfix">
            <label class="checkbox-inline" for="remember"><input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Recuerdame') }}</label>

            @if (Route::has('password.request'))
                <a class=" forgot-link" href="{{ route('password.request') }}">
                    {{ __('¿Has olvidado tu contraseña?') }}
                </a>
            @endif 
        </div> 
        <button type="submit" class="btn btn-primary btn-block btn-lg">
            {{ __('Login') }}
        </button>

                      
    </form>			
    <div class="text-center small">¿No tienes cuenta?

    @if (Route::has('register'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Regístrate') }}</a>
        </li>
    @endif
    </div>

@include('includes.footer')