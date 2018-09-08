<?php

$mysqli = mysqli_connect("localhost", "root", "","opalo_db");

$salida = "";
$query = "SELECT * FROM estadisticas ORDER BY  NOMBRES";

if (isset($_POST['consulta'])){
     $q = $mysqli->real_escape_string($_POST['consulta']);
     $query = "SELECT  ID_ESTADISTICA, NOMBRES, APELLIDOS,DOCUMENTO,INSTITUCION, HORA,ENTRADA_SALIDA FROM estadisticas
      WHERE NOMBRES LIKE '%".$q."%' OR APELLIDOS LIKE '%".$q."%'  OR DOCUMENTO LIKE '%".$q."%' OR INSTITUCION LIKE '%".$q."%' OR HORA LIKE '%".$q."%' OR ENTRADA_SALIDA LIKE '%".$q."%'";
}

$resultado = $mysqli-> query($query);
if($resultado->num_rows > 0){

      $salida.="<table class='tabla_datos'>
                  <thead>
                      <tr>
                          <td>NOMBRES</td>
                          <td>APELLIDOS</td>
						              <td>DOCUMENTO</td>
                          <td>INSTITUCION</td>
                          <td>HORA</td>
                          <td>ENTRADA_SALIDA</td>
                        </tr>
                  </thead>
                  <tbody>";

      while($fila = $resultado->fetch_assoc()){
        $salida.="<tr>
                    <td>".$fila['NOMBRES']."</td>
                    <td>".$fila['APELLIDOS']."</td>
					          <td>".$fila['DOCUMENTO']."</td>
                    <td>".$fila['INSTITUCION']."</td>
                    <td>".$fila['HORA']."</td>
                    <td>".$fila['ENTRADA_SALIDA']."</td>
                  </tr>";
      }
      $salida.="</tbody></table>";
} else{

   //ECHO'<script language="javascript">alert("No se encontraron coincidencias!!!");</script>';

    $salida.="No se encontraron coincidencias!!!";

}
  echo $salida;

  $mysqli->close();

?>
