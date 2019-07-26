<html>
	<head>
	</head>
	<body>
		<center> 	
			<h1>GESTIONAR USUARIOS</h1>
	
			<?php
			echo'<table border=5px;>';
			echo '<tr>';
	
			// INICIO BOTON BUSCAR USUARIOS
			 echo '<td>';
			$attributes = array('class' => 'form', 'id' => 'btnbuscar');
			echo form_open('controlador_usuarios/direccionar_menu_gestionar_usuarios',$attributes);
			
			$buscar =  array (
			'name' => 'buscar',
			'placeholder' => 'ESCRIBE CEDULA 7 DIGITOS',
			'pattern'   => '[0-9]{7}',
			'style' => 'width:242px; height:70px'
			);
			echo form_label('BUSCAR POR CI ','btnbuscar'); 
			echo form_input($buscar) ;
			
			
			$attributes = array('style'=>'width:242px; height:70px;','id' => 'btnbuscar','name' => 'btnbuscar');
			echo form_submit($attributes,'BUSCAR');	
			echo form_close();
			 echo '</td>';
			//FIN BOTON BUSCAR USUARIOS
			
			// INICIO BOTON REGISTRAR
			 echo '<td>';
			$attributes = array('class' => 'form', 'id' => 'btnregistrar');
			echo form_open('controlador_usuarios/direccionar_registro_usuarios',$attributes); 
	   
			$attributes = array('style'=>'width:242px; height:70px;','id' => 'btnregistrar','name' => 'btnregistrar');
			echo form_submit($attributes,'REGISTRAR');
			echo form_close();
			echo '</td>';
			// FIN BOTON REGISTRAR
			
			// INICIO BOTON SALIR
			echo '<td>';
			$attributes = array('class' => 'form', 'id' => 'btnsalir');
			echo form_open('controlador_usuarios/direccionar_menu_principal',$attributes); 
	   
			$attributes = array('style'=>'width:242px; height:70px;','id' => 'btnsalir','name' => 'btnsalir');
			echo form_submit($attributes,'SALIR');
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
			
			<td class="" align="center" >CI USUARIO</td>
			<td  class=""align="center">CONTRASENA</td>
			<td  class=""align="center">TIPO USUARIO</td>
			<td class="" align="center">NOMBRES</td>
			<td class="" align="center">APELLIDOS</td>
			<td class="" align="center">FECHA DE NACIMIENTO</td>
			<td class="" align="center">DIRECCION</td>
			<td class="" align="center">TELEFONO</td>
			<td class="" align="center">EMAIL</td>
			<td class="" align="center">MODIFICAR</td>
			<td class="" align="center">ELIMINAR</td>
		</tr>
		
		<tr class="">

			<?php
				if($usuarios != FALSE)
				{
					foreach ($usuarios -> result() as $row)
					{
						echo '<tr >';
						
							  //echo '<td>';
								echo '<td>'.$row->ci_usuario.'  </td>';
								echo '<td>'.$row->contrasena.'  </td>';
								echo '<td>'.$row->tipo.'  </td>';
								echo '<td>'.$row->nombres.'  </td>';
								echo '<td>'.$row->apellidos.'  </td>';
								echo '<td>'.$row->fechanacimiento.'  </td>';
								echo '<td>'.$row->direccion.'  </td>';
								echo '<td>'.$row->telefono.'  </td>';
								echo '<td>'.$row->email.'</td>';      
					        	
								echo '<td><a href="'.base_url().'index.php/controlador_usuarios/direccionar_modificar_usuarios/'.$row->ci_usuario.'">'.form_submit($attributes,'MODIFICAR').'</a></td>';   
								
								echo '<td><a href="'.base_url().'index.php/controlador_usuarios/eliminar_usuarios/'.$row->ci_usuario.'">'.form_submit($attributes,'ELIMINAR').'</a></td>'; 

							echo form_close();
					 
						//echo '</td>';  ?ciusuario=
						
						echo '</tr>';
					}
					
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