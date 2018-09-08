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

		while ($data = fgetcsv ($fp, 1000, ","))
		{
			//si la linea es igual a 1 no guardamos por que serian los titulos de la hoja del excel.
			if ($row!=1)
			{

				$num = count($data);

				$insertar="INSERT INTO registro_evento (NOMBRES, APELLIDOS, DIRECCION, CELULAR, EMAIL) VALUES ('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]')";
				$sql = mysqli_query($cn,$insertar) or die( "NO ESCRIBE EN LA BASE DE DATOS");

			}


		$row++;

		}

		fclose ($fp);
		echo '<script language="javascript">alert("La importacion de archivo subio satisfactoriamente");</script>';
		//echo "<div>La importacion de archivo subio satisfactoriamente</div >";
}else {
	echo '<script language="javascript">alert("Archivos no permitidos, revise los formatos o extensiones");</script>';
  ///echo "<div>Archivos no permitidos, revise los formatos o extensiones</div >";
	
}





		exit;


?>
