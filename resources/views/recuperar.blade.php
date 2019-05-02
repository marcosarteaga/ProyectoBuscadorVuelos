
    
<title>registro</title>

@include('includes.in-recuperar');

<div class="container">
    <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Nueva Contraseña</h3>
                </div>
                <div class="panel-body">
                    <form role="form">
                        <div class="row">
                             <div class="form-group col-xs-12">
                                    <input type="password" name="correo" id="pass" class="form-control input-sm floatlabel" placeholder="Correo Electronico">
                            </div>
                            <div class="form-group col-xs-12">
                                    <input type="password" name="contraseña" id="pass" class="form-control input-sm floatlabel" placeholder="Introducir Contraseña">
                            </div>
                            <div class="form-group col-xs-12">
                                    <input type="password" name="contraseña2" id="pass" class="form-control input-sm floatlabel" placeholder="Confirmar Contraseña">
                            </div>
                        </div>
                        <input type="submit" value="Confirmar" class="btn btn-info btn-block">
                    </form>                        
                </div>
            </div>                    
        </div>            
    </div>        
</div>

@include('includes.footer');