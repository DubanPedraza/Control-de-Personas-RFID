<?php
  set_time_limit(300);
	session_start();
		if(isset($_SESSION['usuario'])){

			 if($_SESSION['usuario']['Tipo_usuario'] != "Admin"){
				  header("Location: ../../Usuario/");
				}
		}else{
			header('Location: ../../../');
		}
 ?>

<!DOCTYPE html>
<html lang="es">
<head>

<link rel="stylesheet" href="css/Encabezado.css">
<link rel="stylesheet" href="css/Fondo.css">

<meta charset="utf-8" />
<title>Subir Ficheros con excel</title>
<script type="text/javascript">

	function cargarHojaExcel()
	{
		if(frmcargararchivo.NOMBRE_EVENTO.value=="")
		{
			alert("Eror. Debe Ingresar el nombre del evento");
			frmcargararchivo.NOMBRE_EVENTO.focus();
			return false;
		}
		if(document.frmcargararchivo.excel.value=="")
		{
			alert("Eror. Debe subir un archivo");
			document.frmcargararchivo.excel.focus();
			return false;
		}
		if(document.frmcargararchivo.Imagen.value=="")
		{
			alert("Eror. Debe subir un archivo");
			document.frmcargararchivo.Imagen.focus();
			return false;
		}

		document.frmcargararchivo.action = "procesar.php";
		document.frmcargararchivo.submit();

	}

</script>
</head>
<body>

	<header class="">
		<div class="wrapper">
		 <div class="">
			 <a   href="http://www.uis.edu.co" target="_blank" ><img src="Imagenes/LogoUis.png"></a>
			 <a   href="http://industrial.uis.edu.co/eisi/" target="_blank" ><img src="Imagenes/LogoEscuelaIndustrial.png" height="70" width="70"></a>
			 <a  href="http://carpintero.uis.edu.co/eisi/grupo/opalo/#views/gm1/inicio" target="_blank" ><img src="Imagenes/Logo-grupo-opalo.jpg" height="70" width="70"></a>
			 <a   target="_blank" > <img  src="Imagenes/Iconos_pagina/Archivo.jpg" width="70" height="70"></a>
		 </div>

			<div class="logo">
				 Bienvenido <?php echo $_SESSION['usuario']['Nombre'] ?>
				 <nav>
					 <a  href="../../salir.php">Cerrar Sesión</a>
	 			</nav>
			</div>
			<nav>
			 	<ul class="menu">
					<li><a href="">Archivos del evento</a></li>
					<li><a href="../Registro_de_usuarios/">Registro de usuarios</a></li>
					<li><a href="../Registro_de_Participantes/">Registro de participantes</a></li>
					<li><a  href="../Estadisticas/">Estadisticas</a>
						<ul>
							<li><a  href="../Estadisticas/TABLA/">Tabla</a></li>
							<li><a  href="../Estadisticas/GRAFICA/">Grafica</a></li>
						</ul>
						</li>
				</ul>
			</nav>

		</div>
	</header>
	<article>
	<section>
		<div class="main">
			<h1>INFORMACION PARA EL EVENTO</h1>
			 <form name="frmcargararchivo" method="post" enctype="multipart/form-data"><br>
				 <p>Nombre del Evento</p>
	 			<input type="text" name="NOMBRE_EVENTO" value=""><br>
			  <p>Subir excel en formato .csv</p>
			  <p><input type="file" name="excel" id="excel" /><br>
				<p>Subir Imagen en formato .jpg</p>
			  <p><input type="file" name="Imagen" id="Imagen" /><br>
				<input type="button" value="subir" onclick="cargarHojaExcel()" /></p>
				 <?php include '../IMPRIMIR_ETIQUETA/imprimir_etiqueta2.php'; ?>

			</form>
		</div>
	</section>
</article>
</body>
</html>
