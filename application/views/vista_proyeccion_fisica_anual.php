<html>

<head>
</head>

<body>
	<center>
		<h1>PROYECCION DE VENTAS EN UNIDADES FISICAS</h1>
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
	<table border="1px" style="margin: 0 auto;">
		<tr class="">
			<?php
			if ($productos != FALSE) {
				$años = 2015;
				for ($año = 2012; $años >= $año; $año++) {
			?>
		<tr>
			<td bgcolor="#A5F1EC">PROYECCION DEL AÑO: <?php echo $año ?> </td>
		</tr>
		<tr bgcolor="#A5F1EC">
			<td class="" align="center">PRODUCTO</td>
			<td class="" align="center">MEDIDA</td>
			<td class="" align="center">PRECIO</td>
			<td class="" align="center">ENERO</td>
			<td class="" align="center">FEBRERO</td>
			<td class="" align="center">MARZO</td>
			<td class="" align="center">ABRIL</td>
			<td class="" align="center">MAYO</td>
			<td class="" align="center">JUNIO</td>
			<td class="" align="center">JULIO</td>
			<td class="" align="center">AGOSTO</td>
			<td class="" align="center">SEPTIEMBRE</td>
			<td class="" align="center">OCTUBRE</td>
			<td class="" align="center">NOVIEMBRE</td>
			<td class="" align="center">DICIEMBRE</td>
			<td class="" align="center">TOTAL PRODUCTO</td>
		</tr>
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

						$cantidad_total_producto = $cantidad_total_enero +
							$cantidad_total_febrero +
							$cantidad_total_marzo +
							$cantidad_total_abril +
							$cantidad_total_mayo +
							$cantidad_total_junio +
							$cantidad_total_julio +
							$cantidad_total_agosto +
							$cantidad_total_septiembre +
							$cantidad_total_octubre +
							$cantidad_total_noviembre +
							$cantidad_total_diciembre;
						echo '<tr >';
						echo '<td>' . $rowproducto->nombre . '  </td>';
						echo '<td>' . $rowproducto->medida . ' mm  </td>';
						echo '<td>' . $rowproducto->precio . '  bs por mts       </td>';
						echo '<td>' . $cantidad_total_enero . ' mts </td>';
						echo '<td>' . $cantidad_total_febrero . ' mts    </td>';
						echo '<td>' . $cantidad_total_marzo . ' mts    </td>';
						echo '<td>' . $cantidad_total_abril . ' mts </td>';
						echo '<td>' . $cantidad_total_mayo . ' mts</td>';
						echo '<td>' . $cantidad_total_junio . ' mts</td>';
						echo '<td>' . $cantidad_total_julio . ' mts </td>';
						echo '<td>' . $cantidad_total_agosto . ' mts</td>';
						echo '<td>' . $cantidad_total_septiembre . ' mts </td>';
						echo '<td>' . $cantidad_total_octubre . ' mts </td>';
						echo '<td>' . $cantidad_total_noviembre . ' mts </td>';
						echo '<td>' . $cantidad_total_diciembre . ' mts </td>';
						echo '<td>' . $cantidad_total_producto . ' mts </td>';     	// aky					
						echo '</tr>';
					}
					echo '<tr>';
					echo '<td>TOTAL MENSUAL</td>';
					echo '<td>  </td>';
					echo '<td>  </td>';
					echo '<td>' . $cantidad_total_sumatoria_enero . ' mts</td>';
					echo '<td>' . $cantidad_total_sumatoria_febrero . ' mts</td>';
					echo '<td>' . $cantidad_total_sumatoria_marzo . ' mts</td>';
					echo '<td>' . $cantidad_total_sumatoria_abril . ' mts</td>';
					echo '<td>' . $cantidad_total_sumatoria_mayo . ' mts</td>';
					echo '<td>' . $cantidad_total_sumatoria_junio . ' mts</td>';
					echo '<td>' . $cantidad_total_sumatoria_julio . ' mts</td>';
					echo '<td>' . $cantidad_total_sumatoria_agosto . ' mts</td>';
					echo '<td>' . $cantidad_total_sumatoria_septiembre . ' mts</td>';
					echo '<td>' . $cantidad_total_sumatoria_octubre . ' mts</td>';
					echo '<td>' . $cantidad_total_sumatoria_noviembre . ' mts</td>';
					echo '<td>' . $cantidad_total_sumatoria_diciembre . ' mts</td>';
				} // fin del for años
			} else {
				echo 'NO HAY REGISTROS';
			}
?>
</tr>
	</table>
</body>

</html>