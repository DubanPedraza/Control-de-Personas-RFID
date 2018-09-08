<?php

	define("SERVIDOR","localhost");
	define("USUARIO","root");
	define("CLAVE","");
	define("BASE_DATOS","opalo_db");

	///////////////////////////////////////////////////////////////////////////////////////////////////////////////

	$cn=mysqli_connect(SERVIDOR,USUARIO,CLAVE);
	mysqli_select_db($cn,BASE_DATOS) or die(mysql_error());


?>
