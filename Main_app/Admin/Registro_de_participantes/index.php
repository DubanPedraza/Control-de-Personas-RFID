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
<title>Registro de participantes</title>
<script type="text/javascript">

	function revisar(){
    if(formulario.NOMBRE_EVENTO.value==""){alert("Eror. Debe Ingresar el nombre del evento");return false;}
		if(formulario.NOMBRE.value==""){alert("Eror. Debe Ingresar su Nombre");return false;}
		if(formulario.APELLIDOS.value==""){alert("Eror. Debe Ingresar sus Apellidos");return false;}
		if(formulario.DIRECCION.value==""){alert("Eror. Debe Ingresar su Dirección");return false;}
		if(formulario.CELULAR.value==""){alert("Eror. Debe Ingresae su Dirección");return false;}
		if(formulario.E_MAIL.value==""){alert("Eror. Debe Ingresar su E-mail");return false;}
		if(formulario.DOCUMENTO.value==""){alert("Eror. Debe Ingresar su Documento de identidad");return false;}
		if(formulario.INSTITUCION.value==""){alert("Eror. Debe Ingresar su Institución");return false;}
		if(formulario.CARGO.value==""){alert("Eror. Debe Ingresar su Cargo");return false;}
		if(formulario.EDAD.value==""){alert("Eror. Debe Ingresar su Edad");return false;}

   formulario.action="ProcesarParticipantes.php"
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
			 <a  target="_blank" > <img src="Imagenes/Iconos_pagina/Registro-participantes.png"width="70" height="70"></a>
		 </div>

			<div class="logo">
				 Bienvenido <?php echo $_SESSION['usuario']['Nombre'] ?>
				 <nav>
					 <a  href="../../salir.php">Cerrar Sesión</a>
	 			</nav>

			</div>
			<nav>
			<ul class="menu">
				<li><a href="../Archivo_del_administrador/">Archivos del evento</a></li>
				<li><a href="../Registro_de_usuarios/">Registro de usuarios</a></li>
				<li><a href="">Registro de participantes</a></li>
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

		<label ><b>NOMBRE DEL EVENTO</b></label>
		<input type="text" name="NOMBRE_EVENTO"><br>
   <label ><b>NOMBRE</b></label>
	 <input type="text" name="NOMBRE"><br>
	 <label><b>APELLIDOS</b></label>
	 <input type="text" name="APELLIDOS"><br>
	 <label ><b>DIRECCION</b></label>
	 <input type="text" name="DIRECCION"><br>
	 <label><b>CELULAR</b></label>
	 <input type="text" name="CELULAR"><br>
	 <label ><b>E-MAIL</b></label>
	 <input type="text" name="E_MAIL"><br>
	 <label><b>DOCUMENTO</b></label>
	 <input type="text" name="DOCUMENTO"><br>
	 <label ><b>INSTITUCION</b></label>
	 <input type="text" name="INSTITUCION"><br>
	 <label><b>CARGO</b></label>
	 <input type="text" name="CARGO"><br>
	 <label ><b>EDAD</b></label>
	 <input type="text" name="EDAD"><br>
	 <input type="button"  value="Registar" onclick="revisar()" />
	 <?php include '../IMPRIMIR_ETIQUETA/imprimir_etiqueta.php'; ?>
	</form>
</div>

	<article>
	<section>

	</section>
</article>
</body>
</html>
