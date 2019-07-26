<html>
	<head>
	</head>
	<body>
		<center> 	
			<h1>REPORTES DE VENTAS</h1>
	
			<?php
			echo'<table border=5px;>';
			echo '<tr>';
	
	
			
			// INICIO BOTON SALIR
			echo '<td>';
			$attributes = array('class' => 'form', 'id' => 'btnsalir');
			echo form_open('controlador_usuarios/direccionar_menu_principal',$attributes); 
	   
			$attributes = array('style'=>'width:242px; height:70px;','id' => 'btnsalir','name' => 'btnsalir');
			echo form_submit($attributes,'ATRAS');
			echo form_close();
			echo '</td>';
			// FIN BOTON SALIR
			
		    echo '</tr>';
			echo'</table>';
			
?>
</center>

	<br>
	<br>
	<table border="1px" style="margin: 0 auto;" >
	
		
		
		<tr class="">

				<?php
				if($productos != FALSE)
				{
				$años=2015;  
				for($año=2012;$años>=$año;$año++)
				{
			?>	
			
			<tr >   	
				<td  bgcolor= "#A5F1EC" >PROYECCION DEL AÑO: <?php echo $año ?>	</td>
				
			</tr> 
			<tr  bgcolor= "#A5F1EC">  
			
			<td class="" align="center" >PRODUCTO</td>
			<td class="" align="center" >MEDIDA</td>
			<td class="" align="center" >PRECIO</td>
			<td  class=""align="center">ENERO</td>
			<td  class=""align="center">FEBRERO</td>
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
						$cantidad_total_sumatoria_septiembre =0;
						$cantidad_total_sumatoria_octubre = 0;
						$cantidad_total_sumatoria_noviembre =0;
						$cantidad_total_sumatoria_diciembre = 0;
					
					foreach ($productos -> result() as $rowproducto)
					{
						$cantidad_total=0;
						$cantidad_total_enero=0;
						$cantidad_total_febrero=0;
						$cantidad_total_marzo=0;
						$cantidad_total_abril=0;
						$cantidad_total_mayo=0;
						$cantidad_total_junio=0;
						$cantidad_total_julio=0;
						$cantidad_total_agosto=0;
						$cantidad_total_septiembre=0;
						$cantidad_total_octubre=0;
						$cantidad_total_noviembre=0;
						$cantidad_total_diciembre=0;
						foreach ($ventas -> result() as $rowventas)
						{
							$fecha_venta=$rowventas->fecha_venta;
							$mes_venta=substr($fecha_venta, -7, 2);
							$anio_venta=substr($fecha_venta,6);
					
							//$mes_venta = (int)$mes_venta;
							if($anio_venta==$año)
							{
							foreach ($detalle -> result() as $rowdetalle )
							{
								
								switch ($mes_venta) 
								{
									case "01":
										if($rowdetalle->id_producto==$rowproducto->id_producto	)
										{
										$cantidad=$rowdetalle->cantidad;
										$precio=$rowproducto->precio;
										$cantidad_total_enero=$cantidad_total_enero+$cantidad*$precio;
										
										}
									break;
									case "02":
										if($rowdetalle->id_producto==$rowproducto->id_producto	)
										{
										$cantidad=$rowdetalle ->cantidad;
										$precio=$rowproducto->precio;
										$cantidad_total_febrero=$cantidad_total_febrero+$cantidad*$precio;
									
										}
									break;
									case "03":
										if($rowdetalle->id_producto==$rowproducto->id_producto	)
										{
										$cantidad=$rowdetalle->cantidad;
										$precio=$rowproducto->precio;
										$cantidad_total_marzo=$cantidad_total_marzo+$cantidad*$precio;
										
										}
									break;
									case "04":
										if($rowdetalle->id_producto==$rowproducto->id_producto	)
										{
										$cantidad=$rowdetalle->cantidad;
										$precio=$rowproducto->precio;
										$cantidad_total_abril=$cantidad_total_abril+$cantidad*$precio;
									
										}
									break;
									case "05":
										if($rowdetalle->id_producto==$rowproducto->id_producto	)
										{
										$cantidad=$rowdetalle->cantidad;
										$precio=$rowproducto->precio;
										$cantidad_total_mayo=$cantidad_total_mayo+$cantidad*$precio;
										
										}
									break;
									case "06":
										if($rowdetalle->id_producto==$rowproducto->id_producto	)
										{
										$cantidad=$rowdetalle->cantidad;
										$precio=$rowproducto->precio;
										$cantidad_total_junio=$cantidad_total_junio+$cantidad*$precio;
										
										}
									break;
									case "07":
										if($rowdetalle->id_producto==$rowproducto->id_producto	)
										{
										$cantidad=$rowdetalle->cantidad;
										$precio=$rowproducto->precio;
										$cantidad_total_julio=$cantidad_total_julio+$cantidad*$precio;
										
										}
									break;
									case "08":
										if($rowdetalle->id_producto==$rowproducto->id_producto	)
										{
										$cantidad=$rowdetalle->cantidad;
										$precio=$rowproducto->precio;
										$cantidad_total_agosto=$cantidad_total_agosto+$cantidad*$precio;
									
										}
									break;
									case "09":
										if($rowdetalle->id_producto==$rowproducto->id_producto	)
										{
										$cantidad=$rowdetalle->cantidad;
										$precio=$rowproducto->precio;
										$cantidad_total_septiembre=$cantidad_total_septiembre+$cantidad*$precio;
									
										}
									break;
									case "10":
										if($rowdetalle->id_producto==$rowproducto->id_producto	)
										{
										$cantidad=$rowdetalle->cantidad;
										$precio=$rowproducto->precio;
										$cantidad_total_octubre=$cantidad_total_octubre+$cantidad*$precio;
									
										}
									break;
									case "11":
										if($rowdetalle->id_producto==$rowproducto->id_producto	)
										{
										$cantidad=$rowdetalle->cantidad;
										$precio=$rowproducto->precio;
										$cantidad_total_noviembre=$cantidad_total_noviembre+$cantidad*$precio;
										
										}
									break;
									case "12":
										if($rowdetalle->id_producto==$rowproducto->id_producto	)
										{
										$cantidad=$rowdetalle ->cantidad;
										$precio=$rowproducto->precio;
										$cantidad_total_diciembre=$cantidad_total_diciembre+$cantidad*$precio;
										
										}
									break;
									default:
									echo "No entro a ninguno en el switch";
								}
								
							}
						}// fin del if año
							
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
						echo '<td>'.$rowproducto->nombre.'  </td>';
						echo '<td>'.$rowproducto->medida.' mm </td>';
						echo '<td>'.$rowproducto->precio.' bs por mts       </td>';
						echo '<td>'.$cantidad_total_enero.' bs </td>';
						echo '<td>'.$cantidad_total_febrero.' bs    </td>';
						echo '<td>'.$cantidad_total_marzo.' bs     </td>';
						echo '<td>'.$cantidad_total_abril.' bs </td>';
						echo '<td>'.$cantidad_total_mayo.' bs</td>'; 
						echo '<td>'.$cantidad_total_junio.' bs </td>';   
						echo '<td>'.$cantidad_total_julio.' bs </td>';   
						echo '<td>'.$cantidad_total_agosto.' bs </td>';   
						echo '<td>'.$cantidad_total_septiembre.' bs </td>';   
						echo '<td>'.$cantidad_total_octubre.' bs </td>';   
						echo '<td>'.$cantidad_total_noviembre.' bs </td>';   
						echo '<td>'.$cantidad_total_diciembre.' bs </td>'; 
						echo '<td>'.$cantidad_total_producto.' bs </td>'; 	
						echo '</tr>';
						
					}
					
					
					echo '<tr>';
					echo '<td>TOTAL MENSUAL</td>';
					echo '<td>  </td>';
					echo '<td>  </td>';
					echo '<td>'.$cantidad_total_sumatoria_enero.' bs</td>';
					echo '<td>'.$cantidad_total_sumatoria_febrero.' bs</td>';
					echo '<td>'.$cantidad_total_sumatoria_marzo.' bs</td>';
					echo '<td>'.$cantidad_total_sumatoria_abril.' bs</td>';
					echo '<td>'.$cantidad_total_sumatoria_mayo.' bs</td>';
					echo '<td>'.$cantidad_total_sumatoria_junio.' bs</td>';
					echo '<td>'.$cantidad_total_sumatoria_julio.' bs</td>';
					echo '<td>'.$cantidad_total_sumatoria_agosto.' bs</td>';
					echo '<td>'.$cantidad_total_sumatoria_septiembre.' bs</td>';
					echo '<td>'.$cantidad_total_sumatoria_octubre.' bs</td>';
					echo '<td>'.$cantidad_total_sumatoria_noviembre.' bs</td>';
					echo '<td>'.$cantidad_total_sumatoria_diciembre.' bs</td>';
					
					echo '</tr>';
					
				} // fin del año
			}
				else
				{
					echo 'NO HAY REGISTROS';
					
				}
			?>	
			
		</tr>
	</table>
		
</body>
</html>