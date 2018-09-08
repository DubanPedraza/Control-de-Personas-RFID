<?php
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
<title>Registro de usuarios</title>
<script type="text/javascript">

	function revisar(){

		if(formulario.nombre.value==""){alert("Eror. Debe Ingresar su Nombre");return false;}
		if(formulario.usuario.value==""){alert("Eror. Debe Ingresar su Usuario");return false;}
		if(formulario.password.value==""){alert("Eror. Debe Ingresar su Clave");return false;}
		if(formulario.confi_password.value==""){alert("Eror. Debe Confirmar su Clave");return false;}

   formulario.action="ProcesarUsuario.php"
	 formulario.submit();
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
			 <a  target="_blank" > <img src="Imagenes/Iconos_pagina/Registro_usuarios.jpg"width="70" height="70"></a>
		 </div>

			<div class="logo">
				 Bienvenido<?php echo $_SESSION['usuario']['Nombre'] ?>
				 <nav>
					 <a  href="../../salir.php">Cerrar Sesión</a>
	 			</nav>

			</div>
			<nav>
				<ul class="menu">
					<li><a href="../Archivo_del_administrador/">Archivos del evento</a></li>
					<li><a href="">Registro de usuarios</a></li>
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
<div class="main">
	<form name="formulario" method="post">

    <label ><b>Nombre del Usuario</b></label>
		<input type="text" name="nombre"><br>
		<label><b>Ingresa el Usuario</b></label>
		<input type="text" name="usuario"><br>
		<label<<b>Ingresa tu contraseña</b></label>
		<input type="password" name="password"><br>
	  <label><b>Repite tu contraseña</b></label>
		<input type="password" name="confi_password"><br>
		<label><b>Selecciona el tipo de usuario</b></label>
		<select name="Tipo_usuario">
				<option >Admin</option>
				<option>Usuario</option>
		</select><br>
		<input type="button" value="Registar" onclick="revisar()"/>

	</form>
</div>

	<article>
	<section>

	</section>
</article>
</body>
</html>
