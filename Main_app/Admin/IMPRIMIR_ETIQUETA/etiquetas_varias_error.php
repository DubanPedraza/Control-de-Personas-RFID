<?php

//Ingresar Productos Cantidades Grandes==============================================
include("../funciones/pv_varias.php");

//$data1=PV_008("Id,codbarras","prov_producto");
//$data1=explode(";;",$data1);

if(!empty($_POST['envio'])){

$v1=$_POST['rfid'];
$retorno=PV_009($v1);
//echo $retorno;	

}
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

<table>
	<tr>
    	<td>RFID</td>
        <td><input type="text" name="rfid"  size="4" maxlength="4" /></td>
        <td>
        	<input type="submit" value="guardar" name="envio"/>
        </td>
    </tr>
</table>        


</form>