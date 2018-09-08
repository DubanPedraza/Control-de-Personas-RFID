<?php

	session_start();
		if(isset($_SESSION['usuario'])){

			 if($_SESSION['usuario']['Tipo_usuario'] != "Usuario"){
				  header("Location: ../Admin/");
				}
		}else{
			header('Location: ../../');
		}

 ?>

<!DOCTYPE html>
<html lang="es">
<head>

<link rel="stylesheet" href="css/Encabezado.css">
<link rel="stylesheet" href="css/Fondo.css">

<meta charset="utf-8" />
<title>Menu del administrador</title>

</head>
<body>

	<header class="">
		<div class="wrapper">
		 <div class="">
			 <a   href="http://www.uis.edu.co" target="_blank" ><img src="Imagenes/LogoUis.png"></a>
			 <a   href="http://industrial.uis.edu.co/eisi/" target="_blank" ><img src="Imagenes/LogoEscuelaIndustrial.png" height="70" width="70"></a>
			 <a  href="http://carpintero.uis.edu.co/eisi/grupo/opalo/#views/gm1/inicio" target="_blank" ><img src="Imagenes/Logo-grupo-opalo.jpg" height="70" width="70"></a>
			 <a  target="_blank" > <img src="Imagenes/Iconos_pagina/estadistica.jpg" width="70" height="70"></a>
		 </div>

			<div class="logo">
				 Bienvenido <?php echo $_SESSION['usuario']['Nombre'] ?>
				 <nav>
					 <a  href="../../../salir.php">Cerrar Sesión</a>
	 			</nav>
			</div>
			<nav>
				<ul class="menu">
					<li><a href="../../Registro_de_Participantes/">Registro de participantes</a></li>
					<li><a  href="../">Estadisticas</a>
						<ul>
							<li><a  href="../TABLA">Tabla</a></li>
							<li><a  href="">Grafica</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>


	</header>
	<article>
	<section>
				<div class="" >

					<?php  include 'grafica2.php';
								 //include '../enlace1';

					?>
		</div>
	</section>
</article>
</body>
</html>

<?php
/*
/////////////////////Código de actualización///////////////////////////////////////
$self = $_SERVER['PHP_SELF']; //Obtenemos la página en la que nos encontramos
header("refresh:30; url=$self"); //Refrescamos cada 10 segundos
*/
?>
