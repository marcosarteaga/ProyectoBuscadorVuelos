<!DOCTYPE html>
<html>
<head>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/inicio.css">
<!------ Include the above in your HEAD tag ---------->


  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title></title>

</head>
<body>

    <div class="flight-engine">
               <div class="container">
                  <div class="tabing">
                     <ul>
                        <li><a class="active" href="#1"><i class="fa fa-plane" aria-hidden="true"></i> Flight</a>
                     </ul>
                     <ul>
                      <li><input type="checkbox" name="ida"><label>Ida y Vuelta</label></li>
                      
                      <li> <input type="checkbox" name="ida"><label>Solo Ida</label> </li>
                     </ul>
                     <div class="tab-content">
                        <div id="1" class="tab1 active">
                           <div class="flight-tab row">
                              <div class="persent-one">
                                 <i class="fa fa-map-marker" aria-hidden="true"></i>
                                 <input type="text" name="dep" class="textboxstyle" id="dep" placeholder="Ciudad Origen">
                              </div>
                              <div class="persent-one">
                                 <i class="fa fa-map-marker" aria-hidden="true"></i>
                                 <input type="text" name="dep" class="textboxstyle" id="arival" placeholder="Ciudad Destino">
                              </div>
                              <div class="persent-one less-per">
                                 <i class="fa fa-calendar" aria-hidden="true"></i>
                                 <input type="text" name="dep" class="textboxstyle" id="from-date1" placeholder="Fecha Ida">
                              </div>
                              <div class="persent-one less-per">
                                 <i class="fa fa-calendar" aria-hidden="true"></i>
                                 <input type="text" name="dep" class="textboxstyle" id="to-date" placeholder="Fecha Vuelta">
                              </div>
                              <div class="persent-one">
                                 <i class="fa fa-user" aria-hidden="true"></i>
                                  <select class="textboxstyle" id="passenger">
                                   <option>1 Pasajero</option>
                                   <option>2 Pasajero</option>
                                   <option>3 Pasajero</option>
                                   <option>4 Pasajero</option>
                                   <option>5 Pasajero</option>
                                 </select>
                              </div>
                              <div class="persent-one less-btn">
                                <a href="{{ asset('resultado') }}">
                                 <input type="button" name="submit" value="Search" class="btn btn-info cst-btn" id="srch">
                                 </a>
                              </div>
                           </div>
                           <!-- flight tab -->
                        </div>
                        <!-- tab 1 -->
                         <div id="2" class="tab1">
                           <div class="flight-tab row">
                              <div class="persent-one">
                                 <i class="fa fa-map-marker" aria-hidden="true"></i>
                                 <input type="text" name="dep" class="textboxstyle" id="dep" placeholder="From City or airport">
                              </div>
                              <div class="persent-one">
                                 <i class="fa fa-map-marker" aria-hidden="true"></i>
                                 <input type="text" name="dep" class="textboxstyle" id="arival" placeholder="To City or airport">
                              </div>
                              <div class="persent-one less-per">
                                 <i class="fa fa-calendar" aria-hidden="true"></i>
                                 <input type="text" name="dep" class="textboxstyle" id="from-date1" placeholder="Depart">
                              </div>
                              <div class="persent-one less-per">
                                 <i class="fa fa-calendar" aria-hidden="true"></i>
                                 <input type="text" name="dep" class="textboxstyle" id="to-date" placeholder="Returrn">
                              </div>
                              <div class="persent-one">
                                 <i class="fa fa-user" aria-hidden="true"></i>
                                 <div class="textboxstyle" id="passenger">01 Passenger</div>
                              </div>
                              <div class="persent-one less-btn">
                                 <input type="Submit" name="submit" value="Search" class="btn btn-info cst-btn" id="srch">
                              </div>
                           </div>
                           <!-- flight tab -->
                        </div>
                        <!-- tab 1 -->
                     </div>
                     </div>
                     <!-- tab content -->
                  </div>
                  <!-- tabbing -->
               </div>
            </div>

</body>
</html>