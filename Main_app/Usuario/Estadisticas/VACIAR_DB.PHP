<?php
include 'conexion.php';

$BORRAR_ESTADISTICAS="TRUNCATE estadisticas ";
mysqli_query($con,$BORRAR_ESTADISTICAS) or die( "NO BORRA LA BASE DE DATOS ESTADISTICAS");

?>
