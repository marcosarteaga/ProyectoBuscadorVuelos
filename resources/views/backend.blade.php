@include('includes.in-backend');
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
                      <h1 style="font-size:40px;color:#55518a"> <i style="font-size:40px;color:#55518a" class="fas fa-plane"></i>  Clientes</h1>

                    <script type="text/javascript">
                      var registroClientes = <?php echo json_encode($arrayClientes);?>;
                      verClientes(registroClientes);
                    </script>
                    </center>
                </div>

                <!--Modal Billetes de avion -->
            
  
                <!-- Comision a los billetes -->
                <div class="bhoechie-tab-content">
                    <center>
                      <h1 class="glyphicon glyphicon-road" style="font-size:12em;color:#55518a"></h1>
                      <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                      <h3 style="margin-top: 0;color:#55518a">Train Reservation</h3>
                    </center>
                </div>
    











                <!-- Ofertas -->
                <div class="bhoechie-tab-content">
                    <center>
                      <h1 style="margin-top: 0;color:#55518a">OFERTAS</h1>
                      <!--<h1 class="glyphicon glyphicon-home" style="font-size:12em;color:#55518a"></h1>-->
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
                              <form method="POST" action="/backend" enctype="multipart/form-data">
                                @csrf
                                <th scope="row">OFERTA 1</th>
                                <td>
                                  <input  type="file" name="archivoMultimedia">
                                  <input type="hidden" name="ofertaSeleccionada" value="oferta1">
                                </td>
                                <td>
                                  <input class="btn btn-primary" type="submit" value="Subir">
                                </td>
                              </form>
                            </tr>
                            <tr>
                              <form method="POST" action="/backend" enctype="multipart/form-data">
                                @csrf
                                <th scope="row">OFERTA 2</th>
                                <td>
                                  <input  type="file" name="archivoMultimedia">
                                  <input type="hidden" name="ofertaSeleccionada" value="oferta2">
                                </td>
                                <td>
                                  <input class="btn btn-primary" type="submit" value="Subir">
                                </td>
                              </form>
                            </tr>

                            <tr>
                              <form method="POST" action="/backend" enctype="multipart/form-data">
                                @csrf
                                <th scope="row">OFERTA 3</th>
                                <td>
                                  <input  type="file" name="archivoMultimedia">
                                  <input type="hidden" name="ofertaSeleccionada" value="oferta3">
                                </td>
                                <td>
                                  <input class="btn btn-primary" type="submit" value="Subir">
                                </td>
                              </form>
                            </tr>
                          </tbody>
                        </table>
                        @if (session('status'))
                            <div class="alert alert-success">
                              {{session('status')}}
                            </div>
                        @endif
                    </center>
                </div>
            </div>
        </div>
  </div>
</div>


  <!-- Modal para mostrar billetes -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Billete</h4>
        </div>
        <div class="modal-body">

          <script type="text/javascript">
            var div = $("#myModal");
            if (div.hasClass("modal")) {
              console.log("hola");
            }
            

            
          </script>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>



@include('includes.footer');