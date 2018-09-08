<?php

function PV_006(){

	//Primero se realiza la busqueda de las lineas grabadas en la base de datos
	include("conexion.php");
	$enlace2 = new mysqli($dbhost, $dbuser,$dbpass, $dbname);

	$query="SELECT CONCAT(prov_nombres.nombre,prov_color.nombre,prov_tallas.talla) as nombre,prov_producto.codbarras,prov_movimientoproducto.RFID FROM prov_movimientoproducto
LEFT JOIN prov_producto ON prov_producto.Id=prov_movimientoproducto.producto_id
LEFT JOIN prov_nombres ON prov_nombres.Id=prov_producto.nombre
LEFT JOIN prov_tallas ON prov_tallas.Id=prov_producto.talla_id
LEFT JOIN prov_color ON prov_color.Id=prov_producto.color_id
WHERE etiquetado='1'";


	//Sobreescribir archivo imprimiendo.txt --ubicacion en com_pages

	if ($result = $enlace2->query($query)) {

		 while ($row = $result->fetch_row()) {

			$et_nombre=$row[0];
			$et_barras=$row[1];
			$et_fecha=gmdate('Y-m-d');
			$et_RFID=$row[2];

			$zpl="^XA \n";
			$zpl.="^FO250, 70^ADN, 15, 15^FD UIS - LOGISTICA^FS \n";
			$zpl.="^FO50, 120^ADN, 12, 12^FD ".$et_nombre."^FS \n";
			$zpl.="^FO50, 150^ADN, 12, 12^FD FECHA ENTRADA:".$et_fecha."^FS \n";
			$zpl.="^FO50, 180^ADN, 12, 12^FD SERIAL:".$et_RFID."^FS \n";
			$zpl.="^FO50, 210^ADN, 12, 12^FD CANT:1 PAR ^FS \n";
			$zpl.="^FO20,296^BY2 \n";
			$zpl.="^BCN,60,Y,N,N \n";
			$zpl.="^FD".$et_barras."^FS \n";
			//$zpl.="^RS,350,,1,N^FS \n";
			$zpl.="^RS,F13,,1,N^FS \n";
			$zpl.="^RB96,96^FS \n";
			$zpl.="^RFW,E^FD".$et_RFID."^FS \n";
			$zpl.="^XZ\n";
		 }
	}


	$file_et = "..\\pages\\imprimiendo.txt";
	//$file_et = "pages\\imprimiendo.txt";
    $fp_et = fopen($file_et, "w");
	fwrite($fp_et,$zpl);
	fclose($fp_et);

	/*sE COMENTAN PARA TRABAJAR EN LA CASA*/
	sleep(15);
	pclose(popen("start /B impresora.bat", "r"));
	sleep(5);		//eSTE SLEEP ES DE 5*/


	 //Cambiando estado a etiquetado
	$sql="UPDATE prov_movimientoproducto SET etiquetado='2' WHERE etiquetado='1' ";


	if ($enlace2->query($sql) === TRUE) {
		//echo "New record created successfully".$sql;
	} else {
		//echo "Error: " . $sql . "<br>" . $enlace2->error;
	}

	 mysqli_close($enlace2);
	 return "Etiqueta Impresa";

}


//Funcion para ingresar productos por cantidad

function PV_007($producto){

	include("Resources/config.php");
	// Create connection
	$enlace2 = new mysqli($dbhost, $dbuser,$dbpass, $dbname);

	// Check connection
	if ($enlace2->connect_error) {
		die("Connection failed: " . $enlace2->connect_error);
	}

	$sql="insert into prov_movimientoproducto (producto_id,tipo,cantidad,estado_id) values ('$producto','2','1','3')";

	/*$opfileb=fopen("porque.txt","w");
	fwrite($opfileb, $sql);
	fclose($opfileb);*/


	if ($enlace2->query($sql) === TRUE) {
		$enlace2->close();
		return "1";
	} else {
		$enlace2->close();
		return "0";
	}

}


/*Combo para tablas de Id, nombre desde pages*/

function PV_008($campos,$tabla){

	include("Resources/config.php");
	$enlace2 = new mysqli($dbhost, $dbuser,$dbpass, $dbname);
	mysqli_set_charset($enlace2, "utf8");

	$alldata="";
	$query="SELECT $campos from $tabla ORDER BY Id";

	/*$opfileb=fopen("porque.txt","w");
	fwrite($opfileb, $query);
	fclose($opfileb);*/

	if ($result = $enlace2->query($query)) {

		 while ($row = $result->fetch_row()) {


			 $alldata.=$row[0]."::".$row[1].";;";

		 }
	}

	mysqli_close($enlace2);

	$alldata=substr($alldata,0,-2);

	return $alldata;
}

//---Generador de Etiquetas con Errores

function PV_009($rfid){

	//Primero se realiza la busqueda de las lineas grabadas en la base de datos
	include("Resources/config.php");
	$enlace2 = new mysqli($dbhost, $dbuser,$dbpass, $dbname);

	$query="SELECT CONCAT(prov_nombres.nombre,prov_color.nombre,prov_tallas.talla) as nombre,prov_producto.codbarras,prov_movimientoproducto.RFID FROM prov_movimientoproducto
LEFT JOIN prov_producto ON prov_producto.Id=prov_movimientoproducto.producto_id
LEFT JOIN prov_nombres ON prov_nombres.Id=prov_producto.nombre
LEFT JOIN prov_tallas ON prov_tallas.Id=prov_producto.talla_id
LEFT JOIN prov_color ON prov_color.Id=prov_producto.color_id
WHERE RFID='$rfid' ";


	//Sobreescribir archivo imprimiendo.txt --ubicacion en com_pages

	if ($result = $enlace2->query($query)) {

		 while ($row = $result->fetch_row()) {

			$et_nombre=$row[0];
			$et_barras=$row[1];
			$et_fecha=gmdate('Y-m-d');
			$et_RFID=$row[2];

			$zpl="^XA \n";
			$zpl.="^FO250, 70^ADN, 15, 15^FD UIS - LOGISTICA^FS \n";
			$zpl.="^FO50, 120^ADN, 12, 12^FD ".$et_nombre."^FS \n";
			$zpl.="^FO50, 150^ADN, 12, 12^FD FECHA ENTRADA:".$et_fecha."^FS \n";
			$zpl.="^FO50, 180^ADN, 12, 12^FD SERIAL:".$et_RFID."^FS \n";
			$zpl.="^FO50, 210^ADN, 12, 12^FD CANT:1 PAR ^FS \n";
			$zpl.="^FO20,296^BY2 \n";
			$zpl.="^BCN,60,Y,N,N \n";
			$zpl.="^FD".$et_barras."^FS \n";
			//$zpl.="^RS,350,,1,N^FS \n";
			$zpl.="^RS,F14,,1,N^FS \n";
			$zpl.="^RB96,96^FS \n";
			$zpl.="^RFW,E^FD".$et_RFID."^FS \n";
			$zpl.="^XZ\n";
		 }
	}
	 mysqli_close($enlace2);


	$file_et = "..\\pages\\imprimiendo.txt";
	//$file_et = "pages\\imprimiendo.txt";
    $fp_et = fopen($file_et, "w");
	fwrite($fp_et,$zpl);
	fclose($fp_et);

	/*sE COMENTAN PARA TRABAJAR EN LA CASA*/
	sleep(15);
	pclose(popen("start /B impresora.bat", "r"));
	sleep(5);		//eSTE SLEEP ES DE 5*/

    return "Etiqueta Impresa";

}


?>

?>
