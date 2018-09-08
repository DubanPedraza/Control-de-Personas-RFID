
 <?php

include 'VACIAR_DB.PHP';
/// Asocia las 3 tablas (registro_evento, rfid1 y antenas) de la  base de datos.
$consulta = "SELECT registro_evento.NOMBRES,registro_evento.APELLIDOS,registro_evento.DOCUMENTO,registro_evento.INSTITUCION,
                    rfid_1.TIME_STAMP, antenas.Ent_Sal
                    FROM (registro_evento
                    INNER JOIN rfid_1 ON registro_evento.TAG_RFID_HEX=rfid_1.EPC)
                    INNER JOIN antenas ON  antenas.Antena=rfid_1.ANTENA_PORT";
                    //WHERE antenas.Ent_Sal='SALIDA'
                      //ORDER BY NOMBRES";

///ESCRIBE LA ASOCIACIÓN DE LAS 3 TABLAS (REGISTRO_EVENTO, RFID1 Y ANTENAS) DE LA BASE DE DATOS. EN LA TABLA ESTADÍSTICAS.

$resultado=mysqli_query($con, $consulta);
while($fila=mysqli_fetch_array($resultado)){

  /*
    if (mysqli_num_rows($resultado)>0) {
      $nuevo_registro="SELECT NOMBRES,APELLIDOS,HORA,ENTRADA_SALIDA
                       FROM estadisticas
                       WHERE NOMBRES='$fila[0]'AND APELLIDOS='$fila[1]' AND HORA='$fila[2]' AND ENTRADA_SALIDA='$fila[3]'";
              echo "$nuevo_registro". "<br>";
    }
  else{*/

  mysqli_query($con,"alter ignore table estadisticas add unique index idx_ESTADISTICAS(NOMBRES,APELLIDOS,DOCUMENTO,INSTITUCION,HORA,ENTRADA_SALIDA)");
     $Almacenar = "INSERT ignore INTO estadisticas (NOMBRES, APELLIDOS, DOCUMENTO,INSTITUCION,HORA,ENTRADA_SALIDA)
          VALUES ('$fila[0]','$fila[1]','$fila[2]','$fila[3]','$fila[4]','$fila[5]')";
  mysqli_query($con, $Almacenar)or die( "NO ESCRIBE EN LA BASE DE DATOS");


  }


?>

    