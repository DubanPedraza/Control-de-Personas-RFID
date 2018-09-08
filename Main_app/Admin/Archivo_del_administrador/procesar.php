<?php

	include("conexion.php");


if ((substr($_FILES['excel']['name'],-3)=="csv") && (substr($_FILES['Imagen']['name'],-3)=="jpg") )
	{
		$fecha		= date("Y-m-d");
		$carpeta 	= "tmp_excel/";
		$excel  	= $fecha."-".$_FILES['excel']['name'];
		$Imagen	= $_FILES['Imagen']['name'];
		move_uploaded_file($_FILES['excel']['tmp_name'], "$carpeta$excel");
		move_uploaded_file($_FILES['Imagen']['tmp_name'], "$carpeta$Imagen");
		$newname="ImagenEvento.jpg";

		rename("$carpeta$Imagen", "$carpeta$newname");



		$row = 1;

		$fp = fopen ("$carpeta$excel","r");

		//fgetcsv. obtiene los valores que estan en el csv y los extrae.

		while ($data = fgetcsv ($fp, 10000, ";"))
		{
			//si la linea es igual a 1 no guardamos por que serian los titulos de la hoja del excel.
			if ($row!=1)
			{

				$num = count($data);

				$NOMBRE_EVENTO = $_POST['NOMBRE_EVENTO'];
				$etiqueta=(rand(0,10000));
				$TAG_RFID = $etiqueta;
				$TAG_RFID_HEX= '"'.str_pad(DECHEX($TAG_RFID),4,0,STR_PAD_LEFT).'"';//agrega "", convierte a hexa y hace q sean 4 digitos(agrega 0 a la izquierda)


				//$insertar="INSERT INTO registro_evento (NOMBRES, APELLIDOS, DIRECCION, CELULAR, EMAIL) VALUES ('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]')";
				//$sql = mysqli_query($cn,$insertar) or die( "NO ESCRIBE EN LA BASE DE DATOS");

				$insertar="INSERT INTO registro_evento (NOMBRES, APELLIDOS, DIRECCION, CELULAR, EMAIL, DOCUMENTO, INSTITUCION, CARGO, EDAD, TAG_RFID, TAG_RFID_HEX, NOMBRE_EVENTO)
				                              VALUES ('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]','$data[8]','$TAG_RFID','$TAG_RFID_HEX','$NOMBRE_EVENTO')";
				$sql = mysqli_query($cn,$insertar) or die( "NO ESCRIBE EN LA BASE DE DATOS");


			}


		$row++;

		}

		fclose ($fp);
		echo '<script language="javascript">alert("La importacion de archivo subio satisfactoriamente");history.back();</script>';


		//echo "<div>La importacion de archivo subio satisfactoriamente</div >";
}else {
		echo '<script language="javascript">alert("Archivos no permitidos, revise los formatos o extensiones");history.back();</script>';




  ///echo "<div>Archivos no permitidos, revise los formatos o extensiones</div >";

}
		exit;

?>
