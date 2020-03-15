<html>

<head>
</head>

<body>
	<center>
		<h1>VENTA DE PRODUCTOS</h1>

		<?php
		echo '<table border=5px;>';
		echo '<tr>';
		// INICIO BOTON SALIR
		echo '<td>';
		$attributes = array('class' => 'form', 'id' => 'btnsalir');
		echo form_open('controlador_ventas/direccionar_salir_gestionar_ventas', $attributes);
		$attributes = array('style' => 'width:242px; height:70px;', 'id' => 'btnsalir', 'name' => 'btnsalir');
		echo form_submit($attributes, 'ATRAS');
		echo form_close();
		echo '</td>';
		// FIN BOTON SALIR

		echo '</tr>';
		echo '</table>';

		?>
		<br>
		<br>
		<h3 align="center">PRIMERO SELECCIONE UN CLIENTE PARA REALIZAR UNA VENTA</h1>
			<?php
			if ($clientes != FALSE) {
				if ($clientes == "0") {
				} else {
					foreach ($clientes->result() as $row) {
						$ci_cliente = $row->ci_cliente;

						echo '<table border="5px";>';
						echo '<tr>';
						echo '<td>CLIENTE SELECCIONADO<td>';
						echo '</tr>';
						echo '</table>';
						echo '<table border="5px";>';
						echo '<td>CI: ' . $row->ci_cliente . '<td>';
						echo '<td>NOMBRES: ' . $row->nombres . '<td>';
						echo '<td>APELLIDOS: ' . $row->apellidos . '<td>';
						echo '</tr>';
						echo '</table>';
					}
				}
				echo '<br>';
				echo '<br>';
				echo '<h3 align="center">AHORA ELEGIR UNO O VARIOS PRODUCTOS</h1>';
			} else {

				// INICIO BOTON ELEGIR CLIENTES
				echo '<table border=5px;>';
				echo '<tr>';
				echo '<td>';
				$attributes = array('class' => 'form', 'id' => 'btnbuscar');
				echo form_open('controlador_ventas/registrar_ventas_elegir_cliente', $attributes);
				$buscarcliente =  array(
					'name' => 'buscarcliente',
					'placeholder' => 'ESCRIBE CEDULA DE CLIENTE',
					'style' => 'width:242px; height:70px'
				);
				echo form_label('BUSCAR CLIENTES :', 'buscarcliente');
				echo form_input($buscarcliente);
				$attributes = array('style' => 'width:242px; height:70px;', 'id' => 'btnbuscar', 'name' => 'btnbuscar');
				echo form_submit($attributes, 'BUSCAR CLIENTE');
				echo form_close();
				echo '</td>';
				echo '</table>';
				echo '</tr>';
				//FIN BOTON ELEGIR CLIENTE
			}
			?>

	</center>
	<table border="1" style="margin: 0 auto;">
		<tr class="">
			<?php
			if ($productos != FALSE) {
				echo '<tr class="">';
				echo '<td class="" align="center" >ID PRODUCTO</td>';
				echo '<td  class=""align="center">NOMBRE</td>';
				echo '<td  class=""align="center">TIPO</td>';
				echo '<td class="" align="center">MEDIDA</td>';
				echo '<td class="" align="center">STOCK</td>';
				echo '<td class="" align="center">PRECIO</td>';
				echo '<td class="" align="center">CANTIDAD</td>';
				echo '</tr>';
				foreach ($productos->result() as $row) {
					echo '<tr >';
					//echo '<td>';
					echo '<td>' . $row->id_producto . '  </td>';
					echo '<td>' . $row->nombre . '  </td>';
					echo '<td>' . $row->tipo . '   </td>';
					echo '<td>' . $row->medida . ' mm  </td>';
					echo '<td>' . $row->stock . ' mts</td>';
					echo '<td>' . $row->precio . ' bs</td>';
					echo '<td>';
					$attributes = array('class' => 'form', 'id' => 'btnbuscar');
					echo form_open('controlador_ventas/comprar_productos/' . $row->id_producto . '/' . $id_venta . '/' . $ci_cliente . '', $attributes);
					$cantidad =  array(
						'name' => 'cantidad',  //este es el nombre
						'placeholder' => 'ESCRIBE LA CANTIDAD EN MTS',
						'style' => 'width:242px; height:70px'
					);
					echo form_input($cantidad);
					$attributes = array('style' => 'width:242px; height:70px;', 'id' => 'btnbuscar', 'name' => 'btnbuscar');
					echo '</td>';
					echo '<td>' . form_submit($attributes, 'COMPRAR') . '</a></td>';
					echo form_close();
					echo '</tr>';
				}
			} else {
				//echo 'NO HAY REGISTROS';
			}
			?>
		</tr>
	</table>
</body>

</html>