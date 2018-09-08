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
 ${demo.css}
 		</style>
 		<script type="text/javascript">
 $(function () {

     $('#container').highcharts({
         chart: {
             type: 'pie',
             options3d: {
                 enabled: true,
                 alpha: 45,
                 beta: 0
             }
         },
         title: {
             text: 'RESULTADOS DEL EVENTO'
         },
         tooltip: {
             pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
         },
         plotOptions: {
             pie: {
                 allowPointSelect: true,
                 cursor: 'pointer',
                 depth: 35,
                 dataLabels: {
                     enabled: true,
                     format: '{point.name}'
                 }
             }
         },
         series: [{
             type: 'pie',
             name: 'Browser share',
             data: [


                 ['TOTAL ENTRADAS', <?php echo $total_entradas; ?>],

                 {   name: 'TOTAL SALIDA',
                     y: <?php echo $total_salida;?>,
                     sliced: true,
                     selected: true
                 }
             ]
         }]
     });
 });
 		</script>
 	</head>
 	<body>

 <script src="Highcharts-4.1.5/js/highcharts.js"></script>
 <script src="Highcharts-4.1.5/js/highcharts-3d.js"></script>
 <script src="Highcharts-4.1.5/js/modules/exporting.js"></script>

 <div id="container" style="height:400px" ></div>
 	</body>
 </html>
