<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/registro.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>registro</title>
</head>
<body>
    <div class="container">
        <div class="row centered-form">
            <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Registro</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <div class="row">
                                <div class="form-group col-xs-12">
                                        <input type="text" name="rut" id="rut_postulante" class="form-control input-sm floatlabel" placeholder="Nombre">
                                </div>
                                <div class="form-group col-xs-12">
                                        <input type="text" name="nombre_postulante" id="nombre" class="form-control input-sm floatlabel" placeholder="Apellidos">
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="apellidoP" id="nombre" class="form-control input-sm floatlabel" placeholder="Gmail">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                      <div class="form-group">
                                        <input type="text" name="apellidoM" id="a_paterno" class="form-control input-sm floatlabel" placeholder="Telefono">
                                    </div>
                                </div>
                                 <div class="form-group col-xs-12">
                                        <input type="password" name="contraseña" id="pass" class="form-control input-sm floatlabel" placeholder="Contraseña">
                                </div>
                            </div>
                            <input type="submit" value="Registrar" class="btn btn-info btn-block">
                        </form>                        
                    </div>
                </div>                    
            </div>            
        </div>        
    </div>

</body>
</html>