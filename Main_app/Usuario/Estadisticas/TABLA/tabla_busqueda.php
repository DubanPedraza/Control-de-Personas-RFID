<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/tabla.css">
  </head>
  <body>
    <section class="principal">
        <h1></h1>

         <div class="form-1-2">
           <label for="caja_busqueda">Buscar:</label>
           <input type="text" name="caja_busqueda" id="caja_busqueda"> </input>
         </div>

         <div class="Exportar.php">
           <form action="exportar.php" method="post">
             <input type="submit" name="Exportar_excel"  class="bnt bnt-sucess" value="Exportar a excel">
           </form>
         </div>
         
         <div class="tabla_datos" id="datos">

         </div>
    </section>
    <script src="js/jquery.min.js"></script>
    <script src="js/main.js">

    </script>

  </body>
</html>
