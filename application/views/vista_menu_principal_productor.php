<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>
	<center>
		<h1> MENU PRINCIPAL ADMINISTRADOR</h1>

		<img src="<?php echo base_url(); ?>/imagenes/01.jpg" width=”20″ height=”10″>
		<h4> SELECCIONE UNA OPCION</h4>
		<?php
		//INICIO BOTON PRONOSTICO
		$attributes = array('class' => 'form', 'id' => 'btnGestionarReportes');
		echo form_open('controlador_pronostico/direccionar_menu_pronostico', $attributes);
		$attributes = array('style' => 'width:242px; height:70px;', 'id' => 'submit', 'name' => 'GestionarReportes');
		echo form_submit($attributes, 'GENERAR PRONOSTICO');
		echo form_close();
		echo '<br>';
		//FIN BOTON GESTIONAR PRONOSTICO

		//INICIO BOTON SALIR
		$attributes = array('class' => 'form', 'id' => 'btnGestionarPedidos');
		echo form_open('controlador_usuarios/direccionar_salir_ingresar_sistema_usuarios', $attributes);
		$attributes = array('style' => 'width:242px; height:70px;', 'id' => 'submit', 'name' => 'GestionarPedidos');
		echo form_submit($attributes, 'SALIR DEL SISTEMA');
		echo form_close();
		echo '<br>';
		//FIN BOTON SALIR
		?>
	</center>
</body>

</html>