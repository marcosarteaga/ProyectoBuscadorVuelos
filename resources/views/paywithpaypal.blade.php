<link rel="stylesheet" type="text/css" href="https://www.w3schools.com/w3css/4/w3.css">
<style type="text/css">
    body{
        background-color: #EAF3FF;
    }
</style>


<div  class="w3-container" >
	@if($message = Session::get('Succes'))
	<div class="w3-panel w3-green w3-display-container">
		<span onclick="this.parentElement.style.display='none'" class="w3-button w3-green w3-large w3-display-topright" >&times;</span>
		<p>{{!! $message !!}}</p>
		
	</div>

	<?php Session::forget('succes');   ?>
	@endif

	@if($message = Session::get('error'))
	<div class="w3-panel w3-green w3-display-container">
		<span onclick="this.parentElement.style.display='none'" class="w3-button w3-red w3-large w3-display-topright" >&times;</span>
		<p>{{!! $message !!}}</p>
		
	</div>

	<?php Session::forget('error');   ?>
	@endif



	<form class="w3-container w3-display-middle w3-card-4 " method="POST" id="payment-form"  action="{!! URL::to('/paypal') !!}">
	  {{ csrf_field() }}
	  <h2 align="center" class="w3-text-blue">Pago</h2>
	  <p>Este pago sera realizado a través de la plataforma de Paypal</p>
	  <p>
	  <br>      
	  <label class="w3-text-blue"><b>Cantidad a pagar:</b></label>
	  <?php echo "<input class='w3-input w3-border' name='amount' type='number' value='$totalPagar' readonly='readonly' >"; ?></p>
	  <center>
	  <button  class="w3-btn w3-blue">Pagar en Paypal</button></p>
	  </center>
	</form>
</div>