@extends('layouts.app')


<title>Buscador</title>

@include('includes.in-inicio')
@section('content')
<div class="">
  <div class="container col-12">
    <div class="tabing">
    <form method="post" action="/resultado">
      {{ csrf_field() }}
       <ul>
          <li><a class="active" href="#1"><i class="fa fa-plane" aria-hidden="true"></i> Flight</a></li>
       </ul>
       <ul class="mt-4">
        <li><input type="radio" name="tipoViaje[]" value="IdaVuelta" required><label> Ida y Vuelta</label></li>
        <li> <input type="radio" name="tipoViaje[]" value="Ida" required><label> Solo Ida</label> </li>
       </ul>
       <div class="tab-content">
        <div id="1" class="tab1 active">
          <div class="flight-tab row">
              <div class="persent-one">
                <!--<input type="text" name="ciudadOrigen" class="textboxstyle" id="dep" placeholder="Ciudad Origen">-->
                  <label class="fa fa-map-marker ml-5"> Ciudad Origen</label>
                  <?php
                    echo "<select name='ciudadOrigen' class='textboxstyle' id='ciudadOrigenId' placeholder='Ciudad Origen'>";
                    if (isset($ciudades)) {

                      foreach ($ciudades as  $value) {
                        echo "<option value='".$value->id."'>".$value->Nombre."</option>";
                      }
                    
                    }
                    echo "</select>";
                    
                  ?>
              </div>
              <div class="persent-one">
                 <label class="fa fa-map-marker ml-5"> Ciudad Destino</label>
                 <!---<input type="text" name="ciudadDestino" class="textboxstyle" id="arival" placeholder="Ciudad Destino">-->
                 <?php
                    echo "<select name='ciudadDestino' class='textboxstyle' id='ciudadDestinoId' placeholder='Ciudad Destino'>"; 
                    if (isset($ciudades)) {

                      foreach ($ciudades as  $value) {
                        echo "<option value='".$value->id."'>".$value->Nombre."</option>";
                      }
                    
                    }
                    echo "</select>";
                    
                 ?>
              </div>
              <div class="persent-one less-per">
                 <label class="fa fa-calendar ml-5"> Fecha ida</label>
                 <input type="date" name="fechaIda" class="textboxstyle" id="from-date1" placeholder="Fecha Ida" required>
              </div>
              <div class="persent-one less-per">
                 <label class="fa fa-calendar ml-5"> Fecha Vuelta</label>
                 <input type="date" name="fechaVuelta" class="textboxstyle" id="to-date" placeholder="Fecha Vuelta">
              </div>
              <div class="persent-one">
                 <label class="fa fa-user ml-5"> Adultos</label>
                  <select class="textboxstyle"   id="adultos">
                   <option value="1">1 Pasajero</option>
                   <option value="2">2 Pasajero</option>
                   <option value="3">3 Pasajero</option>
                   <option value="4">4 Pasajero</option>
                   <option value="5">5 Pasajero</option>
                 </select>
              </div>
              <div class="persent-one mt-4" >
                 <label class="fa fa-user ml-5"> Niños</label> 
                  <select class="textboxstyle " id="ninos">
                   <option value="0">-- Niños --</option>
                   <option value="1">1 Niño</option>
                   <option value="2">2 Niños</option>
                   <option value="3">3 Niños</option>
                   <option value="4">4 Niños</option>
                   <option value="5">5 Niños</option>
                 </select>
              </div>
              <div class="persent-one less-btn mt-5">
                <!--<a href="{{ asset('resultado') }}"></a>-->
                 <input type="submit" name="submit" value="Buscar" class="btn btn-primary" id="srch">
              </div>
          </div>
        </div>
      </div>
    </form>
    </div>
  </div> 
</div>
<div class="container row col-12">
  <div class="col-4 mt-4" id="div1OFERTAS">
    <?php 
      if (isset($arrayOferta1)) {
        echo"<img class='card-img-top' src='/../oferta1/$arrayOferta1->nombre'>";
      }

    ?>  
 </div>
  <div class="col-4 mt-4" id="div2OFERTAS">
    <?php 
      if (isset($arrayOferta2)) {
        echo"<img class='card-img-top' src='/../oferta2/$arrayOferta2->nombre'>";

      }
    ?>
  </div>
  <div class="col-4 mt-4" id="div3OFERTAS">
    <?php 
    if (isset($arrayOferta3)) {
      echo"<img class='card-img-top' src='/../oferta3/$arrayOferta3->nombre'>";
    }

    ?>
  </div>
</div>
@endsection
@include('includes.footer')