@include('includes.in-backend')
<div class="container">
	<div class="row">
        <div class="col-lg-10 col-md-5 col-sm-8 col-xs-9 bhoechie-tab-container">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
              <div class="list-group">
                <a href="#" class="list-group-item active text-center">
                  <i class="fas fa-ticket-alt"></i><br/>Billetes Vendidos
                </a>
                <a href="#" class="list-group-item text-center">
                 <i class="fas fa-coins" ></i><br/>Comisión
                </a>
                <a href="#" class="list-group-item text-center">
                  <i class="fas fa-tags"></i><br/>Ofertas
                </a>
              </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
                <!-- Billetes vendidos -->
                <div  class="bhoechie-tab-content active">
                    <center id="clientesTable">
                      <h1 style="font-size:40px;color:#55518a"> <i style="font-size:40px;color:#55518a" class="fas fa-plane"></i>  Pasajeros</h1>

                    <script type="text/javascript">
                      var registroClientes = <?php echo json_encode($arrayClientes);?>;
                      verClientes(registroClientes);
                    </script>
                    </center>
                </div>

           
            
  
                <!-- Comision a los billetes -->
                <div class="bhoechie-tab-content">
                    <center>
                      <h1 style="font-size:40px;color:#55518a"> <i style="font-size:40px;color:#55518a" class="fas fa-file-invoice-dollar"></i> Comisión x Billete</h1>
                      
                    </center>
                </div>
    











                <!-- Ofertas -->
                <div class="bhoechie-tab-content">
                    <center>
                      <h1 style="margin-top: 0;color:#55518a">OFERTAS</h1>
                      <!--<h1 class="glyphicon glyphicon-home" style="font-size:12em;color:#55518a"></h1>-->
                      <div class="alert" id="message" style="display: none"></div>
                        <table class="table">
                          <thead>
                            <tr>
                              <th scope="col"></th>
                              <th scope="col">Imagen</th>
                              <th scope="col"></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <form method="post" id="upload_form1" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <th scope="row">OFERTA 1</th>
                                <td>
                                  <input id="archivoMultimedia1"   type="file" name="archivoMultimedia1">
                                  <input type="hidden" name="ofertaSeleccionada" value="oferta1">
                                </td>
                                <td>
                                  <input type="submit" id="insertarImagen1" name="insertarImagen1"  class="btn btn-primary"  value="Subir">

                                </td>
                              </form>
                            </tr>
                            <tr>
                              <form method="post" id="upload_form2" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <th scope="row">OFERTA 2</th>
                                <td>
                                  <input id="archivoMultimedia2"   type="file" name="archivoMultimedia2">
                                  <input type="hidden" name="ofertaSeleccionada" value="oferta2">
                                </td>
                                <td>
                                  <input type="submit" id="insertarImagen2" name="insertarImagen2"  class="btn btn-primary"  value="Subir">

                                </td>
                              </form>
                            </tr>

                            <tr>
                              <form method="post" id="upload_form3" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <th scope="row">OFERTA 3</th>
                                <td>
                                  <input id="archivoMultimedia3"   type="file" name="archivoMultimedia3">
                                  <input type="hidden" name="ofertaSeleccionada" value="oferta3">
                                </td>
                                <td>
                                  <input type="submit" id="insertarImagen3" name="insertarImagen3"  class="btn btn-primary"  value="Subir">

                                </td>
                              </form>
                            </tr>
                          </tbody>
                        </table>
                        <span id="uploaded_image"></span>
                    </center>
                </div>
            </div>
        </div>
  </div>
</div>

@include('includes.footer')

<script>
$(document).ready(function(){

$('#upload_form1').on('submit', function(event){
  event.preventDefault();
  console.log("entra paso1-1");
  $.ajax({
   url:"{{ route('billetes.storeOfertaImage') }}",
   method:"POST",
   data:new FormData(this),
   dataType:'JSON',
   contentType: false,
   cache: false,
   processData: false,
   success:function(data)
   {
    console.log("entra paso2-1");
    $('#archivoMultimedia1').val('');
    $('#message').removeClass('alert-success');
    $('#message').removeClass('alert-danger');
    $('#message').css('display', 'block');
    $('#message').html(data.message);
    $('#message').addClass(data.class_name);
   }
  })
 });

});

$(document).ready(function(){

$('#upload_form2').on('submit', function(event){
  event.preventDefault();
  console.log("entra paso1-2");
  $.ajax({
   url:"{{ route('billetes.storeOfertaImage') }}",
   method:"POST",
   data:new FormData(this),
   dataType:'JSON',
   contentType: false,
   cache: false,
   processData: false,
   success:function(data)
   {
    console.log("entra paso2-2");
    $('#archivoMultimedia2').val('');
    $('#message').removeClass('alert-success');
    $('#message').removeClass('alert-danger');
    $('#message').css('display', 'block');
    $('#message').html(data.message);
    $('#message').addClass(data.class_name);
   }
  })
 });

});



$(document).ready(function(){

$('#upload_form3').on('submit', function(event){
  event.preventDefault();
  console.log("entra paso1-3");
  $.ajax({
   url:"{{ route('billetes.storeOfertaImage') }}",
   method:"POST",
   data:new FormData(this),
   dataType:'JSON',
   contentType: false,
   cache: false,
   processData: false,
   success:function(data)
   {
    console.log("entra paso2-3");
    $('#archivoMultimedia3').val('');
    $('#message').removeClass('alert-success');
    $('#message').removeClass('alert-danger');
    $('#message').css('display', 'block');
    $('#message').html(data.message);
    $('#message').addClass(data.class_name);
   }
  })
 });

});
</script>

