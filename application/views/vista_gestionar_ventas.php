<html>

<head>
</head>

<body>
	<center>
		<h1>GESTIONAR VENTAS</h1>
		<?php
		echo '<table border=5px;>';
		echo '<tr>';

		// INICIO BOTON BUSCAR USUARIOS
		echo '<td>';
		$attributes = array('class' => 'form', 'id' => 'btnbuscar');
		echo form_open('controlador_ventas/direccionar_menu_gestionar_ventas', $attributes); // FORM OPEN
		$buscar =  array(
			'name' => 'buscar',
			'placeholder' => 'ESCRIBE CEDULA 7 DIGITOS',
			'pattern'   => '[0-9]{7}',
			'style' => 'width:242px; height:70px'
		);
		echo form_label('BUSCAR VENTA POR CI CLIENTE  ', 'buscar');
		echo form_input($buscar);
		$attributes = array('style' => 'width:242px; height:70px;', 'id' => 'btnbuscar', 'name' => 'btnbuscar');
		echo form_submit($attributes, 'BUSCAR');
		echo form_close();										
		// FORM CLOPSE
		echo '</td>';
		//FIN BOTON BUSCAR USUARIOS

		// INICIO BOTON REGISTRAR
		echo '<td>';
		$attributes = array('class' => 'form', 'id' => 'btnregistrar');
		$ci_cliente = "0";
		$id_ventas = "0";
		echo form_open('controlador_ventas/direccionar_registro_ventas/' . $ci_cliente . '/' . $id_ventas . '', $attributes);  
		// OPEN
		$attributes = array('style' => 'width:242px; height:70px;', 'id' => 'btnregistrar', 'name' => 'btnregistrar');
		echo form_submit($attributes, 'REGISTRAR VENTA');
		echo form_close();
		echo '</td>';
		// FIN BOTON REGISTRAR

		// INICIO BOTON SALIR
		echo '<td>';
		$attributes = array('class' => 'form', 'id' => 'btnsalir');
		echo form_open('controlador_ventas/direccionar_menu_principal', $attributes);
		$attributes = array('style' => 'width:242px; height:70px;', 'id' => 'btnsalir', 'name' => 'btnsalir');
		echo form_submit($attributes, 'SALIR');
		echo form_close();
		echo '</td>';
		// FIN BOTON SALIR
		echo '</tr>';
		echo '</table>';
		?>
	</center>
	<br>
	<br>
	<table border="1" style="margin: 0 auto;">
		<tr>
			<td class="" align="center">ID-VENTA</td>
			<td class="" align="center">CI-CLIENTE</td>
			<td class="" align="center">CI-USUARIO</td>
			<td class="" align="center">FECHA VENTA</td>
			<td class="" align="center">ID-PRODUCTO</td>
			<td class="" align="center">CANTIDAD</td>
			<td class="" align="center">NOMBRE</td>
			<td class="" align="center">TIPO</td>
			<td class="" align="center">MEDIDA</td>
			<td class="" align="center">PRECIO POR MTS</td>
			<td class="" align="center">PRECIO * CANTIDAD</td>
			<td class="" align="center">MODIFICAR</td>
			<td class="" align="center">ELIMINAR</td>
		</tr>
		<tr class="">
			<?php
			if ($ventas != FALSE) {
				foreach ($ventas->result() as $row) {
					echo '<tr  >';
					//echo '<td>';
					echo '<td>' . $row->id_venta . '  </td>';
					echo '<td>' . $row->ci_cliente . '  </td>';
					echo '<td>' . $row->ci_usuario . '  </td>';
					echo '<td>' . $row->fecha_venta . '  </td>';
					echo '<td></td>';
					echo '<td></td>';
					echo '<td></td>';
					echo '<td></td>';
					echo '<td></td>';
					echo '<td></td>';
					echo '<td></td>';
					echo '<td><a href="' . base_url() . 'index.php/controlador_ventas/direccionar_modificar/' . $row->id_venta . '">' . form_submit($attributes, 'MODIFICAR') . '</a></td>';
					echo '<td><a href="' . base_url() . 'index.php/controlador_ventas/eliminar_ventas/' . $row->id_venta . '">' . form_submit($attributes, 'ELIMINAR') . '</a></td>';
					$cantidad_total_pagar = 0;
					foreach ($detalle->result() as $rowdetalle) {
						if ($rowdetalle->id_venta == $row->id_venta) {
							echo '<tr>';
							echo '<td></td>';
							echo '<td></td>';
							echo '<td></td>';
							echo '<td></td>';
							echo '<td>' . $rowdetalle->id_producto . '  </td>';
							echo '<td>' . $rowdetalle->cantidad . ' mts  </td>';
							foreach ($productos->result() as $rowproducto) {
								if ($rowdetalle->id_producto == $rowproducto->id_producto) {
									$precio_compra = $rowdetalle->cantidad * $rowproducto->precio;
									$cantidad_total_pagar = $cantidad_total_pagar + $precio_compra;
									echo '<td>' . $rowproducto->nombre . ' </td>';
									echo '<td>' . $rowproducto->tipo . '   </td>';
									echo '<td>' . $rowproducto->medida . ' mm </td>';
									echo '<td>' . $rowproducto->precio . ' bs </td>';
									echo '<td>' . $precio_compra . ' bs </td>';
								}
							}
							echo '</tr>';
						}
					}
					echo '<tr>';
					echo '<td></td>';
					echo '<td></td>';
					echo '<td></td>';
					echo '<td></td>';
					echo '<td></td>';
					echo '<td></td>';
					echo '<td></td>';
					echo '<td></td>';
					echo '<td></td>';
					echo '<td>TOTAL</td>';
					echo '<td>' . $cantidad_total_pagar . ' bs </td>';
					echo '</tr>';
					echo form_close();
					//echo '</td>';  ?ciusuario=
					echo '</tr>';
				}
			} else {
				echo 'NO HAY REGISTROS';
			}
			?>

		</tr>
	</table>

</body>

</html>