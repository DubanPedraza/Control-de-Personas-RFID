<?php include 'prueba.php'; ?>
<?php $total_entradas;
      $total_salida;
 ?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<style type="text/css">

#container1 {
  float:left;
	height: 200px;
	margin: 50px auto;
}
#container2 {
  float:right;
	height: 200px;
	margin: 50px auto;
}
	</style>
<div id="container1" style="height: 400px">
      <script type="text/javascript">
  $(function () {
      $('#container1').highcharts({
          chart: {
              type: 'column',
              margin: 75,
              options3d: {
                  enabled: true,
                  alpha: 10,
                  beta: 25,
                  depth: 70
              }
          },
          title: {
              text: 'RESULTADOS DEL EVENTO'
          },
          subtitle: {
              text: ''
          },
          plotOptions: {
              column: {
                  depth: 25
              }
          },
          xAxis: {
  		categories: ['DENTRO DEL EVENTO']
          },
          yAxis: {
              title: {
                  text: null
              }
          },
          series: [{
              name: 'ENTRADAS',
              data: [<?php echo $total_entradas - $total_salida; ?>]

          }]
      });
  });
  		</script>

		</div>
    <div id="container2" style="height: 400px">
          <script type="text/javascript">
      $(function () {
          $('#container2').highcharts({
              chart: {
                  type: 'column',
                  margin: 75,
                  options3d: {
                      enabled: true,
                      alpha: 10,
                      beta: 25,
                      depth: 70
                  }
              },
              title: {
                  text: 'RESULTADOS DEL EVENTO'
              },
              subtitle: {
                  text: 'RELACION ENTRADAS vs SALIDAS'
              },
              plotOptions: {
                  column: {
                    depth: 25
                }
            },
            xAxis: {
        categories: ['ENTRADAS','SALIDAS']
            },
            yAxis: {
                title: {
                    text: null
                }
            },
            series: [{
                name: 'ENTRADAS',
                data: [ <?php echo $total_entradas; ?>]

            },{name: 'SALIDAS',
                data: [null, <?php echo $total_salida; ?>]}]
          });
      });
      		</script>

    		</div>
	</head>
	<body>

    <script src="Highcharts-4.1.5/js/highcharts.js"></script>
    <script src="Highcharts-4.1.5/js/highcharts-3d.js"></script>
    <script src="Highcharts-4.1.5/js/modules/exporting.js"></script>

	</body>
</html>
<?php
/*
/////////////////////Código de actualización///////////////////////////////////////
$self = $_SERVER['PHP_SELF']; //Obtenemos la página en la que nos encontramos
header("refresh:30; url=$self"); //Refrescamos cada 10 segundos
*/
?>
