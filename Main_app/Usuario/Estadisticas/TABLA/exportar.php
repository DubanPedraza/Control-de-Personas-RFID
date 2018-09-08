<?php
include 'conexion.php';

//export.php
$connect = mysqli_connect("localhost", "root", "","opalo_db");
$output = '';
if(isset($_POST["Exportar_excel"]))
{
 $query = "SELECT * FROM estadisticas ORDER BY NOMBRES";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">
         <tr>
             <th>NOMBRES</th>
             <th>APELLIDOS</th>
             <th>DOCUMENTO</th>
             <th>INSTITUCION</th>
             <th>HORA</th>
             <th>ENTRADA_SALIDA</th>
           </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= ' <tr>
                         <td>'.$row["NOMBRES"].'</td>
                         <td>'.$row["APELLIDOS"].'</td>
                         <td>'.$row["DOCUMENTO"].'</td>
                         <td>'.$row["INSTITUCION"].'</td>
                         <td>'.$row["HORA"].'</td>
                         <td>'.$row["ENTRADA_SALIDA"].'</td>
                    </tr> ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}
?>
