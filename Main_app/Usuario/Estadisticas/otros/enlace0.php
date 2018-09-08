<?php

include 'VACIAR_DB.PHP';
/// Asocia las 3 tablas (registro_evento, rfid1 y antenas) de la  base de datos.
$consulta = "SELECT registro_evento.NOMBRES,registro_evento.APELLIDOS,
                    rfid_1.TIME_STAMP, antenas.Ent_Sal
                    FROM (registro_evento
                    INNER JOIN rfid_1 ON registro_evento.TAG_RFID=rfid_1.EPC)
                    INNER JOIN antenas ON  antenas.Antena=rfid_1.ANTENA_PORT";
                    //WHERE antenas.Ent_Sal='SALIDA'
                      //ORDER BY NOMBRES";

///ESCRIBE LA ASOCIACIÓN DE LAS 3 TABLAS (REGISTRO_EVENTO, RFID1 Y ANTENAS) DE LA BASE DE DATOS. EN LA TABLA ESTADÍSTICAS.

$resultado=mysqli_query($con, $consulta);
while($fila=mysqli_fetch_array($resultado)){

   $Almacenar = "INSERT ignore INTO estadisticas (NOMBRES, APELLIDOS, HORA,ENTRADA_SALIDA)
          VALUES ('$fila[0]','$fila[1]','$fila[2]','$fila[3]')";
  mysqli_query($con, $Almacenar)or die( "NO ESCRIBE EN LA BASE DE DATOS");


  }


?>
    <!DOCTYPE html>
    <html>
      <head>
        <meta charset="utf-8">
        <title></title>
      </head>
      <body>
<table border="1" style="text-align:center;">
  <tr>
    <td colspan = "5"> BASE DE DATOS ESTADISTICAS </td>
  </tr>

  <tr>
    <td> ID_ESTADISTICA</td>
    <td> NOMBRES</td>
    <td> APELLIDOS</td>
    <td> HORA </td>
    <td> ENTRADA_SALIDA</td>

  </tr>

  <?php

  $result = mysqli_query($con, "SELECT * FROM estadisticas");
    while($fila=  mysqli_fetch_array($result)){ ?>
  <tr>
    <td> <?php echo $fila['ID_ESTADISTICA'];?></td>
    <td> <?php echo $fila['NOMBRES'];?></td>
    <td> <?php echo $fila['APELLIDOS'];?></td>
    <td> <?php echo $fila['HORA']; ?></td>
    <td> <?php echo $fila['ENTRADA_SALIDA']; ?></td>

  </tr>


  <?php

}
mysqli_close($con);
?>
</table>
      </body>
    </html>
