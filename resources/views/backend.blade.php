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
                      <h1 class="glyphicon glyphicon-home" style="font-size:12em;color:#55518a"></h1>
                      <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                      <h3 style="margin-top: 0;color:#55518a">Hotel Directory</h3>
                    </center>
                </div>
            </div>
        </div>
  </div>
</div>
@include('includes.footer');