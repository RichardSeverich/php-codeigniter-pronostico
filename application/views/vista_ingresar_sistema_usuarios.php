<?php 
	$ci_usuario =  array (
		'name' => 'ci_usuario',
		'placeholder' => 'ESCRIBE CEDULA DE IDENTIDAD 7 DIGITOS',
		  //'type' => 'number',
		'pattern'   => '[0-9]{7}',
		'style' => 'width:320px; height:70px',
		 'required' => 'required'
		// 'type' => 'email'  << por ejemplo para poner otras de html
	);
	
	$contrasena =  array (
		'name' => 'contrasena',
		'placeholder' => 'ESCRIBE CONTRASENA DE 5 A 10 CARACTERES',
		'type' => 'password',
		 'pattern'=>'.{5,10}',
		 'style' => 'width:320px; height:70px',
		 'required' => 'required'
	);

?>
<!DOCTYPE html>
<head>

</head>

<body>
			<center>
			<h1>INGRESAR AL SISTEMA USUARIOS</h1>
			<h3>LLENE TODOS LOS CAMPOS: </h3>
			</center> 			
					<?php  
						$attributes = array('class' => 'form', 'id' => 'login');
						echo form_open('controlador_usuarios/ingresar_al_sistema_usuarios',$attributes);
					?>
				<table border="1px" style="margin: 0 auto;" >
				
				
				<tr>
						<td><?php echo form_label('CEDULA DE IDENTIDAD','ciusuario')  ?> </td>
						<td><?php echo form_input($ci_usuario); ?> </td>
				</tr>

				<tr>
						<td><?php echo form_label('CONTRASENA','contrasena') ?> </td>
						<td><?php echo form_input($contrasena) ?>		</td>	
				</tr>
				
				
			</table>
			<br>
			<br>
				<table border="5px" style="margin: 0 auto;" >
				<tr>
					 <td> 
					  <?php         
					        $attributes = array('style'=>'width:242px; height:70px;','id' => 'submit','name'=>'BtmRegistrarUsuarios');  
							echo form_submit($attributes,'INGRESAR');
							echo form_close();
					  ?>
					  </td> 
								
					  
					  <td> 
					  <?php  
							$attributes = array('class' => 'form', 'id' => 'btnregistrousuarios');
							echo form_open('controlador_usuarios/direccionar_pagina_web',$attributes); // primero  pongo el archivo php luego la funcion
							$attributes = array('style'=>'width:242px; height:70px;','id' => 'submit','name'=>'BtmSalir');  
							echo form_submit($attributes,'SALIR');
							echo form_close();
					   ?>
					     </td> 
				</tr>
			</table>
			
				
	
		

</body>

</html>