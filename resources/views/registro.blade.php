<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<div class="container">
    <br><br>
        <div class="row justify-content-csenter">
            <div class="col-12 col-md-8 col-lg-6 pb-5">
                <form action="mail.php" method="post">
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
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre y Apellido" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i style="color: #0080FF !important"  class="fa fa-envelope text-info"></i></div>
                                    </div>
                                    <input type="email" class="form-control" id="nombre" name="email" placeholder="ejemplo@gmail.com" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i style="color: #0080FF" class="fas fa-lock"></i></div>
                                    </div>
                                    <input type="password" id="password" name="password" class="form-control" placeholder="Contraseña" required>
                                </div>
                            </div>

                            <div class="text-center">
                                <input style="background: #0080FF !important" type="submit" value="Enviar" class="btn btn-info btn-block rounded-0 py-2">
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
</div>