<?php
include 'VACIAR_DB.PHP';

$consulta = "SELECT registro_evento.NOMBRES,registro_evento.APELLIDOS,registro_evento.TAG_RFID,
                    rfid_1.ID, rfid_1.TIME_STAMP,rfid_1.EPC,
                    antenas.Ent_Sal
                    FROM (registro_evento
                    INNER JOIN rfid_1 ON registro_evento.TAG_RFID=rfid_1.EPC)
                    INNER JOIN antenas ON  antenas.Antena=rfid_1.ANTENA_PORT";
                    //WHERE antenas.Ent_Sal='SALIDA'
                      //ORDER BY NOMBRES";

$resultado=mysqli_query($con, $consulta);
while($fila=mysqli_fetch_array($resultado)){


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



  <tr>
    <td> <?php echo $fila['ID'];?></td>
    <td> <?php echo $fila['NOMBRES'];?></td>
    <td> <?php echo $fila['APELLIDOS'];?></td>
    <td> <?php echo $fila['TAG_RFID'];?></td>
    <td> <?php echo $fila['TIME_STAMP']; ?></td>
    <td> <?php echo $fila['EPC'];?></td>
    <td> <?php echo $fila['Ent_Sal']; ?></td>

  </tr>


  <?php
}
mysqli_close($con);
?>
</table>
      </body>
    </html>
