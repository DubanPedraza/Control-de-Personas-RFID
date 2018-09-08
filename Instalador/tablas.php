<?php  
//Hacer que foo sea la base de datos actual
if (!$conexion) {
    die('No se pudo conectar : ' . mysql_error());
}
$bd_seleccionada = mysqli_select_db($conexion,$Name_DB);
if (!$bd_seleccionada) {
    die ('No se puede usar:opalo_db' . mysql_error());
}
////TABLA DE ANTENAS///
		$Crea_tabla_1 ="CREATE TABLE `antenas` (
		  `ID_ANTENA` int(50) NOT NULL,
		  `Antena` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
		  `Ent_Sal` varchar(100) CHARACTER SET utf8 DEFAULT NULL
		) ENGINE=InnoDB DEFAULT CHARSET=latin1;";

		   if(mysqli_query($conexion,$Crea_tabla_1))
			 {				 
			  echo"Tabla Antenas creada <br>";						  
			 }
			 
			else
			 {
			  echo"Tabla Antenas no creada <br>";
			 }
			 
		$Datos_subidos_1 = "INSERT INTO `antenas` (`ID_ANTENA`, `Antena`, `Ent_Sal`) VALUES
		(1, '2', 'ENTRADA'),
		(2, '3', 'SALIDA');";	

		 if(mysqli_query($conexion,$Datos_subidos_1))
			 {				
			  echo"Datos Subidos a tabla de Antenas <br>";						  
			 }
			 
			else
			 {
			  echo"Datos no subidos a tabla de Antenas<br>";
			 }
////TABLA DE Estadisticas///

$Crea_tabla_2 ="CREATE TABLE `estadisticas` (
  `ID_ESTADISTICA` int(50) NOT NULL,
  `NOMBRES` varchar(100) DEFAULT NULL,
  `APELLIDOS` varchar(100) DEFAULT NULL,
  `DOCUMENTO` varchar(100) DEFAULT NULL,
  `INSTITUCION` varchar(100) DEFAULT NULL,
  `HORA` varchar(100) DEFAULT NULL,
  `ENTRADA_SALIDA` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

		   if(mysqli_query($conexion,$Crea_tabla_2))
			 {				 
			  echo"Tabla Estadisticas creada <br>";						  
			 }
			 
			else
			 {
			  echo"Tabla Estadisticas no creada <br>";
			 }

////TABLA DE REGISTRO EVENTO///

		$Crea_tabla_3 ="CREATE TABLE `registro_evento` (
  `ID_EVENTO` int(100) NOT NULL,
  `NOMBRES` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `APELLIDOS` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `DIRECCION` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `CELULAR` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `EMAIL` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `DOCUMENTO` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `INSTITUCION` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `CARGO` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `EDAD` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `TAG_RFID` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `ETIQUETADO` enum('1','2') DEFAULT '1' COMMENT '''1''-NO,''2''-SI',
  `TAG_RFID_HEX` varchar(100) DEFAULT NULL,
  `NOMBRE_EVENTO` varchar(100) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";

		   if(mysqli_query($conexion,$Crea_tabla_3))
			 {				 
			  echo"Tabla registro evento creada <br>";						  
			 }
			 
			else
			 {
			  echo"Tabla registro evento no creada <br>";
			 }
			 
	////TABLA DEL READER///
		$Crea_tabla_4 ="CREATE TABLE `rfid_1` (
  `ID` int(50) NOT NULL,
  `READER_NAME` varchar(50) NOT NULL,
  `MAC_ADDRESS` text NOT NULL,
  `EPC` text NOT NULL,
  `ANTENA_PORT` text NOT NULL,
  `TIME_STAMP` text NOT NULL,
  `PEAK_RSSI` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";

		   if(mysqli_query($conexion,$Crea_tabla_4))
			 {				 
			  echo"Tabla del Lector creada <br>";						  
			 }
			 
			else
			 {
			  echo"Tabla del Lector no creada <br>";
			 }
			 
	////TABLA DE USUARIOS///
		$Crea_tabla_5 ="CREATE TABLE `usuarios` (
  `ID_USUARIO` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Usuario` varchar(100) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Tipo_usuario` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

		   if(mysqli_query($conexion,$Crea_tabla_5))
			 {				 
			  echo"Tabla usuarios creada <br>";						  
			 }
			 
			else
			 {
			  echo"Tabla usuarios no creada <br>";
			 }
			 
		$Datos_subidos_5 = "INSERT INTO `usuarios` (`ID_USUARIO`, `Nombre`, `Usuario`, `Password`, `Tipo_usuario`) VALUES
(1, 'Javier Eduardo Arias Osorio', 'Javier', 'admin123', 'Admin');";	

		 if(mysqli_query($conexion,$Datos_subidos_5))
			 {				
			  echo"Datos Subidos a tabla de usuarios <br>";						  
			 }
			 
			else
			 {
			  echo"Datos no subidos a tabla de usuarios<br>";
			 }
				
  // mysqli_close($conexion);

   
   


?>