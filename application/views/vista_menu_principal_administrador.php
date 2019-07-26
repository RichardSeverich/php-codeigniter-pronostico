<!DOCTYPE html>
<html lang="en">
	<head>
	</head>
	<body>	
			<center>
			<h1> MENU PRINCIPAL ADMINISTRADOR</h1>
		
			<img src="<?php echo base_url(); ?>/imagenes/01.jpg" width=”20″ height=”10″ >
			<h4> SELECCIONE UNA OPCION</h4>
			<?php  
				//	<h2> PLASTIFORTE SRL.</h2>
				//INICIO BOTON GESTIONAR USUARIOS 
				$attributes = array('class' => 'form', 'id' => 'btnGestionarUsuarios');
				 echo form_open('controlador_usuarios/direccionar_menu_gestionar_usuarios',$attributes); 
				
				 $attributes = array('style'=>'width:242px; height:70px;','id' => 'submit','name'=>'GestionarUsuarios'); 
				 echo form_submit($attributes,'GESTIONAR USUARIOS');
				 echo form_close();
				 echo '<br>';
			    //FIN BOTON GESTIONAR USUARIOS 
				 
				//INICIO BOTON GESTIONAR PRODUCTOS
				 $attributes = array('class' => 'form', 'id' => 'btnGestionarProductos');
				 echo form_open('controlador_productos/direccionar_menu_gestionar_productos',$attributes); 
				 
				 $attributes = array('style'=>'width:242px; height:70px;','id' => 'submit','name'=>'GestionarProductos');  
				 echo form_submit($attributes,'GESTIONAR PRODUCTOS');
				 echo form_close();
				  echo '<br>';
				 //FIN BOTON GESTIONAR PRODUCTOS
				
				  //INICIO BOTON PRONOSTICO
				 $attributes = array('class' => 'form', 'id' => 'btnGestionarReportes');
				 echo form_open('controlador_pronostico/direccionar_vista_reportes_ventas_administrador',$attributes); 
				
				 $attributes = array('style'=>'width:242px; height:70px;','id' => 'submit','name'=>'GestionarReportes');  
				 echo form_submit($attributes,'REPORTES');
				 echo form_close();
				 echo '<br>';
				  //FIN BOTON GESTIONAR PRONOSTICO
			
				  //INICIO BOTON SALIR
				 $attributes = array('class' => 'form', 'id' => 'btnGestionarPedidos');
				 echo form_open('controlador_usuarios/direccionar_salir_ingresar_sistema_usuarios',$attributes); 
				
				 $attributes = array('style'=>'width:242px; height:70px;','id' => 'submit','name'=>'GestionarPedidos');  
				 echo form_submit($attributes,'SALIR DEL SISTEMA');
				 echo form_close();
				 echo '<br>';
				  //FIN BOTON SALIR
			?>
		</center>
	</body>	
</html>