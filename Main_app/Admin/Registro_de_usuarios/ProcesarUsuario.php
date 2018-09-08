<?php

require 'conexion_usuarios.php';

$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$password = $_POST['password'];
$confi_password = $_POST['confi_password'];
$Tipo_usuario = $_POST['Tipo_usuario'];

if($password == $confi_password){
$query1="INSERT INTO usuarios (Nombre, Usuario, Password, Tipo_usuario)
values ('$nombre','$usuario', '$password', '$Tipo_usuario')";
 mysqli_query ($con, $query1) or die( "NO ESCRIBE EN LA BASE DE DATOS");
echo '<script language="javascript">alert("El usuario fue creado exitosamente");history.back();</script>';


}else {
  echo '<script language="javascript">alert("La contraseña no coincide");history.back();</script>';

}
mysqli_close($con);

 ?>
