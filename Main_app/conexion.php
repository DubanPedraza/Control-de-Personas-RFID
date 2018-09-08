<?php

 $mysqli =new mysqli("localhost","root","","opalo_db");
  if ($mysqli->connect_error):

    echo "Error al conectarse con MySQL debido al error".$mysqli->connect_error;
  endif;

?>
