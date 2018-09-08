<?php

//Ingresar Productos Cantidades Grandes==============================================
include("../funciones/pv_varias.php");

$data1=PV_008("Id,codbarras","prov_producto");
$data1=explode(";;",$data1);

if(!empty($_POST['envio'])){

$v1=$_POST['v1'];
$v2=$_POST['v2'];

for($b=0;$b<$v2;$b++){
	$retorno=PV_007($v1);
	echo $b.": ".$retorno."<br/>";
	
	if($retorno==1){
		echo PV_006();
		sleep(5);
	}
}
	
}
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

<table>
	<tr>
    	<td>Producto</td>
        <td>
        	<select name='v1'>
            	<?php
                	 for($a=0;$a<count($data1);$a++){
						$datalinea=explode("::",$data1[$a]);
				?>
                		<option value="<?php echo $datalinea[0]; ?>"><?php echo $datalinea[1]; ?></option>
                <?php		
					}
                ?>
            </select>
        </td>
        <td>Cantidad</td>
        <td>
        	<select name='v2'>
            	<?php
					for($a=1;$a<50;$a++){
				?>
               
                	<option value="<?php echo $a; ?>"><?php echo $a; ?></option>
                <?php						
					}
				?>
        </td>
        <td>
        	<input type="submit" value="guardar" name="envio"/>
        </td>
    </tr>
</table>        


</form>