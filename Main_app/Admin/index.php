<?php
	session_start();
		if(isset($_SESSION['usuario'])){

			 if($_SESSION['usuario']['Tipo_usuario'] != "Admin"){
				  header("Location: ../Usuario/");
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
		 </div>

			<div class="logo">
				 Bienvenido <?php echo $_SESSION['usuario']['Nombre'] ?>
				 <nav>
					 <a  href="../salir.php">Cerrar Sesión</a>
	 			</nav>
			</div>
			<nav>
			 	<ul class="menu">
					<li><a href="Archivo_del_administrador/">Archivos del evento</a></li>
					<li><a href="Registro_de_usuarios/">Registro de usuarios</a></li>
					<li><a href="Registro_de_Participantes/">Registro de participantes</a></li>
				  <li><a  href="Estadisticas/">Estadisticas</a>
							<ul>
								<li><a  href="/Estadisticas/tabla_busqueda.php">Tabla</a></li>
								<li><a  href="/Estadisticas/GRAFICA/grafica2.php">Grafica</a></li>
							</ul>
							</li>
			 	</ul>
			</nav>

		</div>
	</header>
	<article>
	<section>

	</section>
</article>
</body>
</html>
