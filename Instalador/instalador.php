<?PHP
$host="localhost";
$usuario="root";
$password="";
$Name_DB="opalo_db";


 $conexion=mysqli_connect($host,$usuario,$password);
   if(!$conexion)
      {
        die("no se establecio conexion".mysql_error());
      }
	  
	 $Borrar_DB="DROP DATABASE $Name_DB"; 
	 
	 if(mysqli_query($conexion,$Borrar_DB))
      {
      echo"Base Borrada <br>";
	  } 
	  
     $sentencia="create database $Name_DB";

   if(mysqli_query($conexion,$sentencia))
      {
      echo"Base de datos creada <br>";
	  include 'tablas.php';
	  } else{
	echo "Base de datos ya existe <br>"; 	  
	  }
	  echo "<br>";
	  echo "<br>";
	  echo "<br>";
	  Echo "Instalacion Finalizada, en 10 segundos sera redirigido a la Pagina Principal";
	  sleep(10);
	  
	header('Location: http://localhost/PROYECTOS/OPALO/');

  mysqli_close($conexion);
  
  
?>