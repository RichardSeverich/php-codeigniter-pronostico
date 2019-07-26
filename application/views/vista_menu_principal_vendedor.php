<!DOCTYPE html>
<html lang="en">
	<head>
	</head>
	<body>
			
			
			<center>
			<h1> MENU PRINCIPAL VENDEDOR</h1>
			<img src="<?php echo base_url(); ?>/imagenes/01.jpg" width=”20″ height=”10″ >
			
			<h4> SELECCIONE UNA OPCION</h4>
			<?php  
				//<h2> PLASTIFORTE SRL.</h2>
				 //INICIO BOTON GESTIONAR ClIENTES
				 $attributes = array('class' => 'form', 'id' => 'btnGestionarClientes');
				 echo form_open('controlador_clientes/direccionar_menu_gestionar_clientes',$attributes); 
				
				 $attributes = array('style'=>'width:242px; height:70px;','id' => 'submit','name'=>'GestionarClientes');  
				 echo form_submit($attributes,'GESTIONAR CLIENTES');
				 echo form_close();
				 echo '<br>';
				  //FIN BOTON GESTIONAR CLIENTES
				  
				  
				 //INICIO BOTON GESTIONAR VENTAS
				 $attributes = array('class' => 'form', 'id' => 'btnGestionarVentas');
				 echo form_open('controlador_ventas/direccionar_menu_gestionar_ventas',$attributes); 
				
				 $attributes = array('style'=>'width:242px; height:70px;','id' => 'submit','name'=>'GestionarVentas');  
				 echo form_submit($attributes,'GESTIONAR VENTAS');
				 echo form_close();
				 echo '<br>';
				  //FIN BOTON GESTIONAR VENTAS
				  
		
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