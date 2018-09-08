<?php

include 'conexion.php';

$consulta= mysqli_query($con, "SELECT * FROM estadisticas");
$total_registro=mysqli_num_rows($consulta);
//echo "TOTAL LECTURAS:"." ". $total_registro ."<br>";

$consulta_entrada= mysqli_query($con, "SELECT ENTRADA_SALIDA FROM estadisticas WHERE ENTRADA_SALIDA='ENTRADA'");
$total_entradas=mysqli_num_rows($consulta_entrada);
  //echo "TOTAL ENTRADAS:"." " .$total_entradas ."<br>";


$consulta_salida= mysqli_query($con, "SELECT ENTRADA_SALIDA FROM estadisticas WHERE ENTRADA_SALIDA='SALIDA'");
$total_salida=mysqli_num_rows($consulta_salida);
  //echo "TOTAL SALIDA:"." " .$total_salida ."<br>";

$PORCENTAJE=($total_salida/$total_entradas)*100;
//echo "PORCENTAJE DE SALIDAS:"." ". $PORCENTAJE."%"."<br>";

/*
$consulta_hora= mysqli_query($con, "SELECT HORA FROM estadisticas");
While($Hora=mysqli_fetch_array($consulta_hora)){
$Hora1=TIME($Hora);
$timeZone= (-7*3600)-(52*60)-(48);
$Hora2=Date('H:i:s a',($Hora1/1000000)+$timeZone);

echo $Hora1."  ".$Hora2."<br>";
}


/*
$contador = "SELECT ENTRADA_SALIDA, count(ENTRADA_SALIDA) AS CONTEO
             FROM estadisticas GROUP BY ENTRADA_SALIDA"
$ESTADISTICA= mysqli_query($con, $contador);
echo $ESTADISTICAS;
*/


?>
