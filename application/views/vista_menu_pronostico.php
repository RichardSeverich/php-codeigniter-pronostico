<!DOCTYPE html>
<html lang="en">
	<head>
	</head>
	<body>
			
			<center>
			<h1> PRONOSTICO</h1>
			<h2> PLASTIFORTE SRL.</h2>
			<?php  
				 

					//INICIO BOTON PROYECCION TERMINOS FISICOS
				 $attributes = array('class' => 'form', 'id' => 'btn');
				 echo form_open('controlador_pronostico/direccionar_proyeccion_fisica',$attributes); 
				 
				 $attributes = array('style'=>'width:300px; height:80px;','id' => 'submit','name'=>'Gestionar');  
				 echo form_submit($attributes,'PROYECCION FISICA TOTAL');
				 echo form_close();
				  echo '<br>';
				 //FIN BOTON 
				
				 //INICIO BOTON PROYECCION TERMINOS MONETARIOS
				$attributes = array('class' => 'form', 'id' => 'btn');
				 echo form_open('controlador_pronostico/direccionar_proyeccion_monetaria',$attributes); 
				
				 $attributes = array('style'=>'width:300px; height:80px;','id' => 'submit','name'=>'Gestionar'); 
				 echo form_submit($attributes,'PROYECCION MONETARIA TOTAL');
				 echo form_close();
				 echo '<br>';
			    //FIN BOTON 
				
				 //INICIO BOTON PROYECCION TERMINOS FISICOS MENSUALES
				$attributes = array('class' => 'form', 'id' => 'btn');
				 echo form_open('controlador_pronostico/direccionar_proyeccion_fisica_anual',$attributes); 
				
				 $attributes = array('style'=>'width:300px; height:80px;','id' => 'submit','name'=>'Gestionar'); 
				 echo form_submit($attributes,'PROYECCION FISICA MENSUAL');
				 echo form_close();
				 echo '<br>';
			    //FIN BOTON 
				
				 //INICIO BOTON PROYECCION TERMINOS MONETARIOS MENSUALES
				$attributes = array('class' => 'form', 'id' => 'btn');
				 echo form_open('controlador_pronostico/direccionar_proyeccion_monetaria_anual',$attributes); 
				
				 $attributes = array('style'=>'width:300px; height:80px;','id' => 'submit','name'=>'Gestionar'); 
				 echo form_submit($attributes,'PROYECCION MONETARIA MENSUAL');
				 echo form_close();
				 echo '<br>';
			    //FIN BOTON 
				
				
				 //INICIO BOTON RESUMEN PROYECCION
				$attributes = array('class' => 'form', 'id' => 'btn');
				 echo form_open('controlador_pronostico/direccionar_proyeccion_fisica_resumen',$attributes); 
				
				 $attributes = array('style'=>'width:300px; height:80px;','id' => 'submit','name'=>'Gestionar'); 
				 echo form_submit($attributes,'PRONOSTICO');
				 echo form_close();
				 echo '<br>';
			    //FIN BOTON 
				 
				  //INICIO BOTON SALIR
				
				$attributes = array('class' => 'form', 'id' => 'btnGestionarUsuarios');
				 echo form_open('controlador_pronostico/direccionar_menu_principal',$attributes); 
				
				 $attributes = array('style'=>'width:300px; height:80px;','id' => 'submit','name'=>'GestionarUsuarios'); 
				 echo form_submit($attributes,'SALIR');
				 echo form_close();
				 echo '<br>';
			    //FIN BOTON SALIR
			
				
	
			?>
		</center>
 
 
	</body>
 
			
</html>