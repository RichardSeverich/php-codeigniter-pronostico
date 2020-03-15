<?php
$meses = array('', 'Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sept', 'Oct', 'Nov', 'Dic');
$dinero[1] = $factor_enero;
$dinero[2] = $factor_febrero;
$dinero[3] = $factor_marzo;
$dinero[4] = $factor_abril;
$dinero[5] = $factor_mayo;
$dinero[6] = $factor_junio;
$dinero[7] = $factor_julio;
$dinero[8] = $factor_agosto;
$dinero[9] = $factor_septiembre;
$dinero[10] = $factor_octubre;
$dinero[11] = $factor_noviembre;
$dinero[12] = $factor_diciembre;
?>

<!DOCTYPE>
<html xmlns="">

<head>
	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
	<script type="text/javascript">
		google.load("visualization", "1", {
			packages: ["corechart"]
		});
		google.setOnLoadCallback(drawChart);
		function drawChart() {
			var data = google.visualization.arrayToDataTable([
				['Mes', 'PRONOSTICO'],
				<?php
				for ($x = 1; $x <= 12; $x = $x + 1) {
				?>['<?php echo $meses[$x]; ?>', <?php echo $dinero[$x] ?>],
				<?php } ?>
			]);
			var options = {
				title: 'PRONOSTICO',
				hAxis: {
					title: 'PRONOSTICO DE VENTAS',
					titleTextStyle: {
						color: 'red'
					}
				}
			};
			var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
			chart.draw(data, options);
		}
	</script>
	<title> </title>
</head>
<body>
	<div id="chart_div" style="width: 98%; height: 500px;"></div>
</body>
</html>
