<title>Registro Usuario</title>
  
@include('includes.in-registro')

<div class="container ">
    <br><br>
        <div class="row justify-content-csenter" style="width: 100%;margin-left: 25%;">
            <div class="col-12 col-md-8 col-lg-6 pb-5">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div  class="card border-primary rounded-0">
                        <div style="background: #0080FF !important" class="card-header p-0">
                            <div style="background: #0080FF !important"  class="bg-info text-white text-center py-2">
                                <h3><i class="far fa-id-card"></i> Registro</h3>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i style="color: #0080FF !important" class="fa fa-user text-info"></i></div>
                                    </div>
                                   

                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre y Apellido">

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif

                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i style="color: #0080FF !important"  class="fa fa-envelope text-info"></i></div>
                                    </div>

                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="ejemplo@gmail.com">

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i style="color: #0080FF" class="fas fa-lock"></i></div>
                                    </div>

                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autocomplete="new-password" placeholder="Contraseña">

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif


                                </div>
                            </div>


                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i style="color: #0080FF" class="fas fa-lock"></i></div>
                                    </div>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar contraseña">
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-info btn-block rounded-0 py-2">
                                    {{ __('Registrarse') }}
                                </button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
</div>

@include('includes.footer')