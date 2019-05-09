@include('includes.in-backend');
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
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
                <!-- flight section -->
                <div class="bhoechie-tab-content active">
                    <center>
                      <h1 class="glyphicon glyphicon-plane" style="font-size:14em;color:#55518a"></h1>
                      <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                      <h3 style="margin-top: 0;color:#55518a">Flight Reservation</h3>
                    </center>
                </div>
                <!-- train section -->
                <div class="bhoechie-tab-content">
                    <center>
                      <h1 class="glyphicon glyphicon-road" style="font-size:12em;color:#55518a"></h1>
                      <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                      <h3 style="margin-top: 0;color:#55518a">Train Reservation</h3>
                    </center>
                </div>
    
                <!-- hotel search -->
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
                                <th scope="row">OFERTA 1</th>
                                <td>
                                  <input  type="file" name="archivoMultimedia">
                                </td>
                                <td>
                                  <input class="btn btn-primary" type="submit" value="Subir">
                                </td>
                              </form>
                            </tr>
                            <tr>
                              <form method="POST" action="/backend" enctype="multipart/form-data">
                                <th scope="row">OFERTA 2</th>
                                <td>
                                  <input  type="file" name="archivoMultimedia">
                                </td>
                                <td>
                                  <input class="btn btn-primary" type="submit" value="Subir">
                                </td>
                              </form>
                            </tr>

                            <tr>
                              <form method="POST" action="/backend" enctype="multipart/form-data">
                                <th scope="row">OFERTA 3</th>
                                <td>
                                  <input  type="file" name="archivoMultimedia">
                                </td>
                                <td>
                                  <input class="btn btn-primary" type="submit" value="Subir">
                                </td>
                              </form>
                            </tr>


                          </tbody>
                        </table>
                    </center>
                </div>
            </div>
        </div>
  </div>
</div>
@include('includes.footer');