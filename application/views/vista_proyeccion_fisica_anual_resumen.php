<html>

<head>
</head>

<body>
	<center>
		<h1>PRONOSTICO PARTE 1</h1>

		<?php
		echo '<table border=5px;>';
		echo '<tr>';
		// INICIO BOTON SALIR
		echo '<td>';
		$attributes = array('class' => 'form', 'id' => 'btnsalir');
		echo form_open('controlador_pronostico/direccionar_menu_pronostico', $attributes);

		$attributes = array('style' => 'width:242px; height:70px;', 'id' => 'btnsalir', 'name' => 'btnsalir');
		echo form_submit($attributes, 'ATRAS');
		echo form_close();
		echo '</td>';
		// FIN BOTON SALIR

		echo '</tr>';
		echo '</table>';

		?>
	</center>

	<br>
	<br>
	<table align="center" border=1 cellspacing=1 cellpadding=1>
		<tr class="">

			<td>
				<table align="center" border=1 cellspacing=1 cellpadding=1>
					<tr bgcolor="#A5F1EC">
						<td>AÑO</td>
						<td>MES</td>
						<td>VENTAS REALES</td>
					</tr>
					<?php
					if ($productos != FALSE) {
						$cont_vect = 1;
						$años = 2015;
						for ($año = 2012; $años >= $año; $año++) {
					?>


					<?php
							$cantidad_total_sumatoria_enero = 0;
							$cantidad_total_sumatoria_febrero = 0;
							$cantidad_total_sumatoria_marzo = 0;
							$cantidad_total_sumatoria_abril = 	0;
							$cantidad_total_sumatoria_mayo = 0;
							$cantidad_total_sumatoria_junio = 0;
							$cantidad_total_sumatoria_julio = 0;
							$cantidad_total_sumatoria_agosto = 0;
							$cantidad_total_sumatoria_septiembre = 0;
							$cantidad_total_sumatoria_octubre = 0;
							$cantidad_total_sumatoria_noviembre = 0;
							$cantidad_total_sumatoria_diciembre = 0;

							foreach ($productos->result() as $rowproducto) {
								$cantidad_total = 0;
								$cantidad_total_enero = 0;
								$cantidad_total_febrero = 0;
								$cantidad_total_marzo = 0;
								$cantidad_total_abril = 0;
								$cantidad_total_mayo = 0;
								$cantidad_total_junio = 0;
								$cantidad_total_julio = 0;
								$cantidad_total_agosto = 0;
								$cantidad_total_septiembre = 0;
								$cantidad_total_octubre = 0;
								$cantidad_total_noviembre = 0;
								$cantidad_total_diciembre = 0;
								foreach ($ventas->result() as $rowventas) {
									$fecha_venta = $rowventas->fecha_venta;
									$mes_venta = substr($fecha_venta, -7, 2); //EXTRAE EL MES
									$anio_venta = substr($fecha_venta, 6);
									//$mes_venta = (int)$mes_venta;
									if ($anio_venta == $año) {

										foreach ($detalle->result() as $rowdetalle) {

											switch ($mes_venta) {
												case "01":
													if ($rowdetalle->id_producto == $rowproducto->id_producto) {
														$cantidad = $rowdetalle->cantidad;
														$precio = $rowproducto->precio;
														$cantidad_total_enero = $cantidad_total_enero + $cantidad;
													}
													break;
												case "02":
													if ($rowdetalle->id_producto == $rowproducto->id_producto) {
														$cantidad = $rowdetalle->cantidad;
														$precio = $rowproducto->precio;
														$cantidad_total_febrero = $cantidad_total_febrero + $cantidad;
													}
													break;
												case "03":
													if ($rowdetalle->id_producto == $rowproducto->id_producto) {
														$cantidad = $rowdetalle->cantidad;
														$precio = $rowproducto->precio;
														$cantidad_total_marzo = $cantidad_total_marzo + $cantidad;
													}
													break;
												case "04":
													if ($rowdetalle->id_producto == $rowproducto->id_producto) {
														$cantidad = $rowdetalle->cantidad;
														$precio = $rowproducto->precio;
														$cantidad_total_abril = $cantidad_total_abril + $cantidad;
													}
													break;
												case "05":
													if ($rowdetalle->id_producto == $rowproducto->id_producto) {
														$cantidad = $rowdetalle->cantidad;
														$precio = $rowproducto->precio;
														$cantidad_total_mayo = $cantidad_total_mayo + $cantidad;
													}
													break;
												case "06":
													if ($rowdetalle->id_producto == $rowproducto->id_producto) {
														$cantidad = $rowdetalle->cantidad;
														$precio = $rowproducto->precio;
														$cantidad_total_junio = $cantidad_total_junio + $cantidad;
													}
													break;
												case "07":
													if ($rowdetalle->id_producto == $rowproducto->id_producto) {
														$cantidad = $rowdetalle->cantidad;
														$precio = $rowproducto->precio;
														$cantidad_total_julio = $cantidad_total_julio + $cantidad;
													}
													break;
												case "08":
													if ($rowdetalle->id_producto == $rowproducto->id_producto) {
														$cantidad = $rowdetalle->cantidad;
														$precio = $rowproducto->precio;
														$cantidad_total_agosto = $cantidad_total_agosto + $cantidad;
													}
													break;
												case "09":
													if ($rowdetalle->id_producto == $rowproducto->id_producto) {
														$cantidad = $rowdetalle->cantidad;
														$precio = $rowproducto->precio;
														$cantidad_total_septiembre = $cantidad_total_septiembre + $cantidad;
													}
													break;
												case "10":
													if ($rowdetalle->id_producto == $rowproducto->id_producto) {
														$cantidad = $rowdetalle->cantidad;
														$precio = $rowproducto->precio;
														$cantidad_total_octubre = $cantidad_total_octubre + $cantidad;
													}
													break;
												case "11":
													if ($rowdetalle->id_producto == $rowproducto->id_producto) {
														$cantidad = $rowdetalle->cantidad;
														$precio = $rowproducto->precio;
														$cantidad_total_noviembre = $cantidad_total_noviembre + $cantidad;
													}
													break;
												case "12":
													if ($rowdetalle->id_producto == $rowproducto->id_producto) {
														$cantidad = $rowdetalle->cantidad;
														$precio = $rowproducto->precio;
														$cantidad_total_diciembre = $cantidad_total_diciembre + $cantidad;
													}
													break;
												default:
													echo "No entro a ninguno en el switch";
											}
										}
									} // fin if año
								}

								$cantidad_total_sumatoria_enero = $cantidad_total_sumatoria_enero + $cantidad_total_enero;
								$cantidad_total_sumatoria_febrero = $cantidad_total_sumatoria_febrero + $cantidad_total_febrero;
								$cantidad_total_sumatoria_marzo = $cantidad_total_sumatoria_marzo + $cantidad_total_marzo;
								$cantidad_total_sumatoria_abril = 	$cantidad_total_sumatoria_abril + $cantidad_total_abril;
								$cantidad_total_sumatoria_mayo = $cantidad_total_sumatoria_mayo + $cantidad_total_mayo;
								$cantidad_total_sumatoria_junio = $cantidad_total_sumatoria_junio + $cantidad_total_junio;
								$cantidad_total_sumatoria_julio = $cantidad_total_sumatoria_julio + $cantidad_total_julio;
								$cantidad_total_sumatoria_agosto = $cantidad_total_sumatoria_agosto + $cantidad_total_agosto;
								$cantidad_total_sumatoria_septiembre = $cantidad_total_sumatoria_septiembre + $cantidad_total_septiembre;
								$cantidad_total_sumatoria_octubre = $cantidad_total_sumatoria_octubre + $cantidad_total_octubre;
								$cantidad_total_sumatoria_noviembre = $cantidad_total_sumatoria_noviembre + $cantidad_total_noviembre;
								$cantidad_total_sumatoria_diciembre = $cantidad_total_sumatoria_diciembre + $cantidad_total_diciembre;
							}


							$sumatoria_cantidades[$cont_vect] =  $cantidad_total_sumatoria_enero;
							$sumatoria_cantidades[$cont_vect + 1] = $cantidad_total_sumatoria_febrero;
							$sumatoria_cantidades[$cont_vect + 2] = $cantidad_total_sumatoria_marzo;
							$sumatoria_cantidades[$cont_vect + 3] = $cantidad_total_sumatoria_abril;
							$sumatoria_cantidades[$cont_vect + 4] = $cantidad_total_sumatoria_mayo;
							$sumatoria_cantidades[$cont_vect + 5] = $cantidad_total_sumatoria_junio;
							$sumatoria_cantidades[$cont_vect + 6] = $cantidad_total_sumatoria_julio;
							$sumatoria_cantidades[$cont_vect + 7] = $cantidad_total_sumatoria_agosto;
							$sumatoria_cantidades[$cont_vect + 8] = $cantidad_total_sumatoria_septiembre;
							$sumatoria_cantidades[$cont_vect + 9] =  $cantidad_total_sumatoria_octubre;
							$sumatoria_cantidades[$cont_vect + 10] =  $cantidad_total_sumatoria_noviembre;
							$sumatoria_cantidades[$cont_vect + 11] =   $cantidad_total_sumatoria_diciembre;
							$cont_vect = $cont_vect + 12;


							//echo '<td>'; 
							echo '<tr>';
							echo '<td bgcolor= "#A5F1EC" >' . $año . '</td>';
							echo '<td >ENERO</td>';
							echo '<td>' . $cantidad_total_sumatoria_enero . ' mts</td>';
							echo '</tr>';

							echo '<tr>';
							echo '<td></td>';
							echo '<td>FEBRERO</td>';
							echo '<td>' . $cantidad_total_sumatoria_febrero . ' mts</td>';
							echo '</tr>';

							echo '<tr>';
							echo '<td></td>';
							echo '<td>MARZO</td>';
							echo '<td>' . $cantidad_total_sumatoria_marzo . ' mts</td>';
							echo '</tr>';

							echo '<tr>';
							echo '<td></td>';
							echo '<td>ABRIL</td>';
							echo '<td>' . $cantidad_total_sumatoria_abril . ' mts</td>';
							echo '</tr>';


							echo '<tr>';
							echo '<td></td>';
							echo '<td>MAYO</td>';
							echo '<td>' . $cantidad_total_sumatoria_mayo . ' mts</td>';
							echo '</tr>';


							echo '<tr>';
							echo '<td></td>';
							echo '<td>JUNIO</td>';
							echo '<td>' . $cantidad_total_sumatoria_junio . ' mts</td>';
							echo '</tr>';


							echo '<tr>';
							echo '<td></td>';
							echo '<td>JULIO</td>';
							echo '<td>' . $cantidad_total_sumatoria_julio . ' mts</td>';
							echo '</tr>';


							echo '<tr>';
							echo '<td></td>';
							echo '<td>AGOSTO</td>';
							echo '<td>' . $cantidad_total_sumatoria_agosto . ' mts</td>';
							echo '</tr>';

							echo '<tr>';
							echo '<td></td>';
							echo '<td>SEPTIEMBRE</td>';
							echo '<td>' . $cantidad_total_sumatoria_septiembre . ' mts</td>';
							echo '</tr>';

							echo '<tr>';
							echo '<td></td>';
							echo '<td>OCTUBRE</td>';
							echo '<td>' . $cantidad_total_sumatoria_octubre . ' mts</td>';
							echo '</tr>';

							echo '<tr>';
							echo '<td></td>';
							echo '<td>NOVIEMBRE</td>';
							echo '<td>' . $cantidad_total_sumatoria_noviembre . ' mts</td>';
							echo '</tr>';

							echo '<tr>';
							echo '<td></td>';
							echo '<td>DICIEMBRE</td>';
							echo '<td>' . $cantidad_total_sumatoria_diciembre . ' mts</td>';
							echo '</tr>';
							//echo '</td>';	



						} // fin del for años

						echo '</table>';
						echo '</td>';


						//// OTRA TABLA
						echo '<td>';
						echo '<table  align="center" border=1  cellspacing=1 cellpadding=1>';

						echo '<tr bgcolor= "#A5F1EC">  ';
						echo '<td >PROMEDIO MOVIL</td>';
						echo '<td >PROMEDIO MOVIL CENTRADO</td>';
						echo '<td >FACTOR ESTACIONAL</td>';
						echo '</tr>';

						echo '<tr >  ';
						echo '<td >---</td>';
						echo '<td >---</td>';
						echo '<td >---</td>';
						echo '</tr>';
						echo '<tr >  ';
						echo '<td >---</td>';
						echo '<td >---</td>';
						echo '<td >---</td>';
						echo '</tr>';
						echo '<tr >  ';
						echo '<td >---</td>';
						echo '<td >---</td>';
						echo '<td >---</td>';
						echo '</tr>';
						echo '<tr >  ';
						echo '<td >---</td>';
						echo '<td >---</td>';
						echo '<td >---</td>';
						echo '</tr>';
						echo '<tr >  ';
						echo '<td >---</td>';
						echo '<td >---</td>';
						echo '<td >---</td>';
						echo '</tr>';
						echo '<tr >  ';
						echo '<td >---</td>';
						echo '<td >---</td>';
						echo '<td >---</td>';
						echo '</tr>';


						$tamaño_vector = count($sumatoria_cantidades);

						$tamaño_vector = $tamaño_vector - 11;
						$i = 1;
						for ($cont_vect = 1; $tamaño_vector >= $cont_vect; $cont_vect++) {
							$promedios_moviles[$i] = ($sumatoria_cantidades[$cont_vect] +
								$sumatoria_cantidades[$cont_vect + 1] +
								$sumatoria_cantidades[$cont_vect + 2] +
								$sumatoria_cantidades[$cont_vect + 3] +
								$sumatoria_cantidades[$cont_vect + 4] +
								$sumatoria_cantidades[$cont_vect + 5] +
								$sumatoria_cantidades[$cont_vect + 6] +
								$sumatoria_cantidades[$cont_vect + 7] +
								$sumatoria_cantidades[$cont_vect + 8] +
								$sumatoria_cantidades[$cont_vect + 9] +
								$sumatoria_cantidades[$cont_vect + 10] +
								$sumatoria_cantidades[$cont_vect + 11]) / 12;
							$i++;
						}
						$tamaño_vector = count($promedios_moviles);
						for ($cont_vect = 1; $tamaño_vector >= $cont_vect; $cont_vect++) {

							echo '<tr >  ';
							echo '<td >' . $promedios_moviles[$cont_vect] . '</td>';
							if ($tamaño_vector > $cont_vect) {
								$promedio_movil_centrado = ($promedios_moviles[$cont_vect] + $promedios_moviles[$cont_vect + 1]) / 2;

								$factor_estacional[$cont_vect] = 0;
								if ($promedio_movil_centrado != 0) {
									$factor_estacional[$cont_vect] = $sumatoria_cantidades[$cont_vect + 6] / $promedio_movil_centrado; // el 5 es que empiesa a dividir deste el mes 5 pues
								}
								echo '<td >' . $promedio_movil_centrado . '</td>';
								echo '<td >' . $factor_estacional[$cont_vect] . '</td>';
							}


							echo '</tr>';
						}
						$tamaño_vector = count($factor_estacional); //36


						echo '<tr >  ';
						echo '<td >---</td>';
						echo '<td >---</td>';
						echo '<td >---</td>';
						echo '</tr>';
						echo '<tr >  ';
						echo '<td >---</td>';
						echo '<td >---</td>';
						echo '<td >---</td>';
						echo '</tr>';
						echo '<tr >  ';
						echo '<td >---</td>';
						echo '<td >---</td>';
						echo '<td >---</td>';
						echo '</tr>';
						echo '<tr >  ';
						echo '<td >---</td>';
						echo '<td >---</td>';
						echo '<td >---</td>';

						echo '</tr>';
						echo '<tr >  ';
						echo '<td >---</td>';
						echo '<td >---</td>';
						echo '<td >---</td>';
						echo '</tr>';

						echo '</table>';
						echo '</td>';
					} else {
						echo 'NO HAY REGISTROS';
					}
					?>

		</tr>
	</table>




	<?php


	$mediana_enero = ($factor_estacional[7] + $factor_estacional[19] + $factor_estacional[31]) / 3;
	$mediana_febrero = ($factor_estacional[8] + $factor_estacional[20] + $factor_estacional[32]) / 3;
	$mediana_marzo = ($factor_estacional[9] + $factor_estacional[21] + $factor_estacional[33]) / 3;
	$mediana_abril = ($factor_estacional[10] + $factor_estacional[22] + $factor_estacional[34]) / 3;
	$mediana_mayo = ($factor_estacional[11] + $factor_estacional[23] + $factor_estacional[35]) / 3;
	$mediana_junio = ($factor_estacional[12] + $factor_estacional[24] + $factor_estacional[36]) / 3;
	$mediana_julio = ($factor_estacional[1] + $factor_estacional[13] + $factor_estacional[25]) / 3;
	$mediana_agosto = ($factor_estacional[2] + $factor_estacional[14] + $factor_estacional[26]) / 3;
	$mediana_septiembre = ($factor_estacional[3] + $factor_estacional[15] + $factor_estacional[27]) / 3;
	$mediana_octubre = ($factor_estacional[4] + $factor_estacional[16] + $factor_estacional[28]) / 3;
	$mediana_noviembre = ($factor_estacional[5] + $factor_estacional[17] + $factor_estacional[29]) / 3;
	$mediana_diciembre = ($factor_estacional[6] + $factor_estacional[18] + $factor_estacional[30]) / 3;

	$sumatoria_medianas = $mediana_enero + $mediana_febrero + $mediana_marzo + $mediana_marzo + $mediana_abril + $mediana_mayo + $mediana_junio
		+ $mediana_julio + $mediana_agosto  +  $mediana_septiembre + $mediana_octubre + $mediana_noviembre + $mediana_diciembre;

	$factor_estacional_ajustado_enero = $mediana_enero * (12 / $sumatoria_medianas);
	$factor_estacional_ajustado_febrero = $mediana_febrero * (12 / $sumatoria_medianas);
	$factor_estacional_ajustado_marzo = $mediana_marzo * (12 / $sumatoria_medianas);
	$factor_estacional_ajustado_abril = $mediana_abril * (12 / $sumatoria_medianas);
	$factor_estacional_ajustado_mayo = $mediana_mayo * (12 / $sumatoria_medianas);
	$factor_estacional_ajustado_junio = $mediana_junio * (12 / $sumatoria_medianas);
	$factor_estacional_ajustado_julio = $mediana_julio * (12 / $sumatoria_medianas);
	$factor_estacional_ajustado_agosto = $mediana_agosto * (12 / $sumatoria_medianas);
	$factor_estacional_ajustado_septiembre = $mediana_septiembre * (12 / $sumatoria_medianas);
	$factor_estacional_ajustado_octubre = $mediana_octubre * (12 / $sumatoria_medianas);
	$factor_estacional_ajustado_noviembre = $mediana_noviembre * (12 / $sumatoria_medianas);
	$factor_estacional_ajustado_diciembre = $mediana_diciembre * (12 / $sumatoria_medianas);

	$sumatoria_factor_estacional_ajustados = $factor_estacional_ajustado_enero + $factor_estacional_ajustado_febrero + $factor_estacional_ajustado_marzo
		+ $factor_estacional_ajustado_abril + $factor_estacional_ajustado_mayo + $factor_estacional_ajustado_junio
		+ $factor_estacional_ajustado_julio + $factor_estacional_ajustado_agosto + $factor_estacional_ajustado_septiembre
		+ $factor_estacional_ajustado_octubre + $factor_estacional_ajustado_noviembre + $factor_estacional_ajustado_diciembre;

	echo '<br>';
	echo '<br>';
	echo '<table  align="center" border=1 cellspacing=1 cellpadding=1>';
	echo '<tr bgcolor= "#A5F1EC">';
	echo	'<td>MES/AÑO</td>';
	echo	'<td>2012</td>';
	echo	'<td>2013</td>';
	echo	'<td>2014</td>';
	echo	'<td>2015</td>';
	echo	'<td>MEDIANA</td>';
	echo	'<td>INDICE ESTACIONAL</td>';
	echo '</tr>';
	echo '<tr>';
	echo	'<td bgcolor= "#A5F1EC" >ENERO</td>';
	echo	'<td>--</td>';
	echo	'<td>' . $factor_estacional[7] . '</td>';
	echo	'<td>' . $factor_estacional[19] . '</td>';
	echo	'<td>' . $factor_estacional[31] . '</td>';
	echo	'<td>' . $mediana_enero . '</td>';
	echo	'<td>' . $factor_estacional_ajustado_enero . '</td>';
	echo  '</tr> ';
	echo  '<tr>';
	echo	'<td bgcolor= "#A5F1EC">FEBRERO</td>';
	echo	'<td>--</td>';
	echo	'<td>' . $factor_estacional[8] . '</td>';
	echo	'<td>' . $factor_estacional[20] . '</td>';
	echo	'<td>' . $factor_estacional[32] . '</td>';
	echo	'<td>' . $mediana_febrero . '</td>';
	echo	'<td>' . $factor_estacional_ajustado_febrero . '</td>';
	echo ' </tr> ';
	echo  '<tr>';
	echo	'<td bgcolor= "#A5F1EC">MARZO</td>';
	echo	'<td>--</td>';
	echo	'<td>' . $factor_estacional[9] . '</td>';
	echo	'<td>' . $factor_estacional[21] . '</td>';
	echo	'<td>' . $factor_estacional[33] . '</td>';
	echo	'<td>' . $mediana_marzo . '</td>';
	echo	'<td>' . $factor_estacional_ajustado_marzo . '</td>';
	echo  '</tr>';
	echo  '<tr>';
	echo	'<td bgcolor= "#A5F1EC" >ABRIL</td>';
	echo	'<td>--</td>'; // primer anio 
	echo	'<td>' . $factor_estacional[10] . '</td>';  // segundo anio 
	echo	'<td>' . $factor_estacional[22] . '</td>'; // tercer anio 
	echo	'<td>' . $factor_estacional[34] . '</td>'; // cuarto anio 
	echo	'<td>' . $mediana_abril . '</td>';
	echo	'<td>' . $factor_estacional_ajustado_abril . '</td>';
	echo  '</tr> ';
	echo ' <tr>';
	echo	'<td bgcolor= "#A5F1EC" >MAYO</td>';
	echo	'<td>--</td>';
	echo	'<td>' . $factor_estacional[11] . '</td>';
	echo	'<td>' . $factor_estacional[23] . '</td>';
	echo	'<td>' . $factor_estacional[35] . '</td>';
	echo	'<td>' . $mediana_mayo . '</td>';
	echo	'<td>' . $factor_estacional_ajustado_mayo . '</td>';
	echo  '</tr> ';
	echo  '<tr>';
	echo	'<td bgcolor= "#A5F1EC" >JUNIO</td>';
	echo	'<td>--</td>';
	echo	'<td>' . $factor_estacional[12] . '</td>';
	echo	'<td>' . $factor_estacional[24] . '</td>';
	echo	'<td>' . $factor_estacional[36] . '</td>';
	echo	'<td>' . $mediana_junio . '</td>';
	echo	'<td>' . $factor_estacional_ajustado_junio . '</td>';
	echo ' </tr> ';
	echo ' <tr>';
	echo	'<td bgcolor= "#A5F1EC" >JULIO</td>';
	echo	'<td>' . $factor_estacional[1] . '</td>';
	echo	'<td>' . $factor_estacional[13] . '</td>';
	echo	'<td>' . $factor_estacional[25] . '</td>';
	echo	'<td>--</td>';
	echo	'<td>' . $mediana_julio . '</td>';
	echo	'<td>' . $factor_estacional_ajustado_julio . '</td>';
	echo  '</tr> ';
	echo  '<tr>';
	echo	'<td bgcolor= "#A5F1EC" >AGOSTO</td>';
	echo	'<td>' . $factor_estacional[2] . '</td>';
	echo	'<td>' . $factor_estacional[14] . '</td>';
	echo	'<td>' . $factor_estacional[26] . '</td>';
	echo	'<td>--</td>';
	echo	'<td>' . $mediana_agosto . '</td>';
	echo	'<td>' . $factor_estacional_ajustado_agosto . '</td>';
	echo '</tr>';
	echo '<tr>';
	echo	'<td bgcolor= "#A5F1EC" >SEPTIEMBRE</td>';
	echo	'<td>' . $factor_estacional[3] . '</td>';
	echo	'<td>' . $factor_estacional[15] . '</td>';
	echo	'<td>' . $factor_estacional[27] . '</td>';
	echo	'<td>--</td>';
	echo	'<td>' . $mediana_septiembre . '</td>';
	echo	'<td>' . $factor_estacional_ajustado_septiembre . '</td>';
	echo '</tr> ';
	echo '<tr>';
	echo	'<td bgcolor= "#A5F1EC">OCTUBRE</td>';
	echo	'<td>' . $factor_estacional[4] . '</td>';
	echo	'<td>' . $factor_estacional[16] . '</td>';
	echo	'<td>' . $factor_estacional[28] . '</td>';
	echo	'<td>--</td>';
	echo	'<td>' . $mediana_octubre . '</td>';
	echo	'<td>' . $factor_estacional_ajustado_octubre . '</td>';
	echo '</tr> ';
	echo '<tr>';
	echo	'<td bgcolor= "#A5F1EC">NOVIEMBRE</td>';
	echo	'<td>' . $factor_estacional[5] . '</td>';
	echo	'<td>' . $factor_estacional[17] . '</td>';
	echo	'<td>' . $factor_estacional[29] . '</td>';
	echo	'<td>--</td>';
	echo	'<td>' . $mediana_noviembre . '</td>';
	echo	'<td>' . $factor_estacional_ajustado_noviembre . '</td>';
	echo '</tr>';
	echo '<tr>';
	echo	'<td bgcolor= "#A5F1EC">DICIEMBRE</td>';
	echo	'<td>' . $factor_estacional[6] . '</td>';
	echo	'<td>' . $factor_estacional[18] . '</td>';
	echo	'<td>' . $factor_estacional[30] . '</td>';
	echo	'<td>--</td>';
	echo	'<td>' . $mediana_diciembre . '</td>';
	echo	'<td>' . $factor_estacional_ajustado_diciembre . '</td>';
	echo '</tr> ';
	echo '<tr>';
	echo	'<td bgcolor= "#A5F1EC">TOTAL</td>';
	echo	'<td></td>';
	echo	'<td></td>';
	echo	'<td></td>';
	echo	'<td></td>';
	echo	'<td>' . $sumatoria_medianas . '</td>';
	echo	'<td>' . $sumatoria_factor_estacional_ajustados . '</td>';
	echo '</tr> ';
	echo '</table>';
	echo '<br>';
	echo '<br>';
	echo '<table align="center" border=1 cellspacing=1 cellpadding=1 >';
	echo '<tr>';
	// INICIO BOTON SALIR
	echo '<td>';
	$attributes = array('class' => 'form', 'id' => 'btnsalir');
	$factor_estacional[1] = $factor_estacional_ajustado_enero;
	$factor_estacional[2] = $factor_estacional_ajustado_febrero;
	$factor_estacional[3] = $factor_estacional_ajustado_marzo;
	$factor_estacional[4] = $factor_estacional_ajustado_abril;
	$factor_estacional[5] = $factor_estacional_ajustado_mayo;
	$factor_estacional[6] = $factor_estacional_ajustado_junio;
	$factor_estacional[7] = $factor_estacional_ajustado_julio;
	$factor_estacional[8] = $factor_estacional_ajustado_agosto;
	$factor_estacional[9] = $factor_estacional_ajustado_septiembre;
	$factor_estacional[10] = $factor_estacional_ajustado_octubre;
	$factor_estacional[11] = $factor_estacional_ajustado_noviembre;
	$factor_estacional[12] = $factor_estacional_ajustado_diciembre;
	$factor = serialize($factor_estacional);
	$factor = urlencode($factor);
	echo form_open('controlador_pronostico/direccionar_proyeccion_fisica_resumen_2/' .
		//$factor_estacional_ajustado_enero.'/'.
		//$factor_estacional_ajustado_febrero.'/'.
		//$factor_estacional_ajustado_marzo.'/'.
		//$factor_estacional_ajustado_abril.'/'.
		//$factor_estacional_ajustado_mayo.'/'.
		//$factor_estacional_ajustado_junio.'/'.
		//$factor_estacional_ajustado_julio.'/'.
		//$factor_estacional_ajustado_agosto.'/'.
		//$factor_estacional_ajustado_septiembre.'/'.
		//$factor_estacional_ajustado_octubre.'/'.
		//$factor_estacional_ajustado_noviembre.'/'.
		//$factor_estacional_ajustado_diciembre.')',$attributes); 
		$factor . ')', $attributes);
	$attributes = array('style' => 'width:242px; height:70px;', 'id' => 'btnsalir', 'name' => 'btnsalir');
	echo form_submit($attributes, 'SIGUIENTE');
	echo form_close();
	echo '</td>';
	// FIN BOTON SALIR
	echo '</tr>';
	echo '</table>';
	?>
	<table align="center" border=1 cellspacing=1 cellpadding=1>
		<tr>
			<td>
				<table align="center" border=1 cellspacing=1 cellpadding=1>
					<tr>
						<td>Tabla izquierda</td>
				</table>
			</td>
			<td>
				<table align="center" border=1 cellspacing=1 cellpadding=1>
					<tr>
						<td> Tabla derecha </td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</body>

</html>