
<title>Datos Viajeros</title>
  
@include('includes.in-datosviajeros')

<?php
session_start();
if (isset($_GET['billeteIda'])) {
    if (isset($_GET['billeteVuelta'])) {
        $idBilleteIda = $_GET['billeteIda'];
        $idBilleteVuelta = $_GET['billeteVuelta'];
    }
    else{
        $idBilleteIda = $_GET['billeteIda'];
          
    }
    
}


$numerosPasajeros = $_SESSION["NumeroAdultos"];
$numerosNinosPasajeros = $_SESSION["NumeroNinos"];

echo $numerosNinosPasajeros;

 ?>


<div class="mb-5">
    <h2 style="margin-top: 2%; margin-left: 7%;">Datos Billetes</h2>
    <form id="formulario" method="post" action="/pagar">
        {{ csrf_field() }}
        <?php  
        echo"<input type='hidden' name='NumeroDePasajeros' value='$numerosPasajeros'>";
        echo"<input type='hidden' name='NumeroDeNinos' value='$numerosNinosPasajeros'>";
        if (isset($idBilleteIda)) {
            if (isset($idBilleteVuelta)) {
                echo"<input type='hidden' name='IdBilleteIda' value='$idBilleteIda'>";
                echo"<input type='hidden' name='IdBilleteVuelta' value='$idBilleteVuelta'>";
            }
            else{
                echo"<input type='hidden' name='IdBilleteIda' value='$idBilleteIda'>";
            }
        }
            
        ?>
    </form>
    
</div>


@include('includes.footer')

<script type="text/javascript"> 

    var numeroPasajeros = '<?php echo $numerosPasajeros;?>'
    var numerosNinosPas = '<?php echo $numerosNinosPasajeros;?>'
    var sumapas = parseInt(numeroPasajeros)+parseInt(numerosNinosPas);
    
    console.log(numerosNinosPas);
    
    datosViajeros('formulario',sumapas);
</script>