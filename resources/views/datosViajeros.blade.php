
<title>Datos Viajeros</title>
  
@include('includes.head');


<div class="container">
    <div id="accordion">
        <br>
        <br>
        <div class="card card-default">
            <div class="card-header">
                <h4 class="card-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                        <i class="glyphicon glyphicon-search text-gold"></i>
                        <b>Datos Personales</b>
                    </a>
                </h4>
            </div>
            <div id="collapse1" class="collapse show">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 col-lg-4">
                            <div class="form-group">
                                <label class="control-label">Nombre</label>
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-1 col-lg-4">
                            <div class="form-group">
                                <label class="control-label">Apellidos</label>
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-1 col-lg-4">
                            <div class="form-group">
                                <label class="control-label">Número de Pasaporte</label>
                                <input class="form-control" type="text" />
                            </div>
                        </div>                        
                    </div>

                    <div class="row">
                        <div class="col-md-2 col-lg-4">
                            <div class="form-group">
                                <label class="control-label">Fecha de nacimiento</label>
                                <div class="input-group date">
                                    <input class="form-control" type="text" />
                                   <span class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button">
                                            <i class="fa fa-calendar"></i>
                                        </button></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="form-group">
                                <label class="control-label">Dirección</label>
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-2 col-lg-4">
                            <div class="form-group">
                                <label class="control-label">Ciudad</label>
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-3 col-lg-4">
                            <div class="form-group">
                                <label class="control-label">Provincia</label>
                                <input type="text" class="form-control" />
                            </div>
                        </div>

                        <div class="col-md-3 col-lg-4">
                            <div class="form-group">
                                <label class="control-label">Codigo postal</label>
                                <input type="text" class="form-control" />
                            </div>
                        </div>

                        <div class="col-md-3 col-lg-4">
                            <div class="form-group">
                                <label class="control-label">País</label>
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>  
</div>

@include('includes.footer');