<?php

require 'conexion.php';

$NOMBRE_EVENTO = $_POST['NOMBRE_EVENTO'];
$NOMBRE = $_POST['NOMBRE'];
$APELLIDOS = $_POST['APELLIDOS'];
$DIRECCION = $_POST['DIRECCION'];
$CELULAR = $_POST['CELULAR'];
$E_MAIL = $_POST['E_MAIL'];
$DOCUMENTO = $_POST['DOCUMENTO'];
$INSTITUCION = $_POST['INSTITUCION'];
$CARGO = $_POST['CARGO'];
$EDAD = $_POST['EDAD'];
$etiqueta=(rand(0,10000));
$TAG_RFID = $etiqueta;
$TAG_RFID_HEX= '"'.str_pad(DECHEX($TAG_RFID),4,0,STR_PAD_LEFT).'"';//agrega "", convierte a hexa y hace q sean 4 digitos(agrega 0 a la izquierda)

$query1="INSERT INTO registro_evento (NOMBRES, APELLIDOS, DIRECCION, CELULAR, EMAIL, DOCUMENTO, INSTITUCION, CARGO, EDAD, TAG_RFID,TAG_RFID_HEX,NOMBRE_EVENTO)
values ('$NOMBRE','$APELLIDOS', '$DIRECCION', '$CELULAR', '$E_MAIL', '$DOCUMENTO', '$INSTITUCION', '$CARGO', '$EDAD','$TAG_RFID','$TAG_RFID_HEX','$NOMBRE_EVENTO')";
 mysqli_query ($con, $query1) or die( "NO ESCRIBE EN LA BASE DE DATOS");
echo '<script language="javascript">alert("El usuario fue creado exitosamente");history.back();</script>';

mysqli_close($con);

 ?>
