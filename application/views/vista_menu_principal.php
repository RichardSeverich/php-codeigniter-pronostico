<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>

  <center>
    <h1> MENU PRINCIPAL</h1>
    <h2> PLASTIFORTE SRL.</h2>
    <?php
    //INICIO BOTON GESTIONAR USUARIOS 
    $attributes = array('class' => 'form', 'id' => 'btnGestionarUsuarios');
    echo form_open('controlador_usuarios/direccionar_menu_gestionar_usuarios', $attributes);
    $attributes = array('style' => 'width:242px; height:70px;', 'id' => 'submit', 'name' => 'GestionarUsuarios');
    echo form_submit($attributes, 'GESTIONAR USUARIOS');
    echo form_close();
    echo '<br>';
    //FIN BOTON GESTIONAR USUARIOS 

    //INICIO BOTON GESTIONAR PRODUCTOS
    $attributes = array('class' => 'form', 'id' => 'btnGestionarProductos');
    echo form_open('controlador_productos/direccionar_menu_gestionar_productos', $attributes);
    $attributes = array('style' => 'width:242px; height:70px;', 'id' => 'submit', 'name' => 'GestionarProductos');
    echo form_submit($attributes, 'GESTIONAR PRODUCTOS');
    echo form_close();
    echo '<br>';
    //FIN BOTON GESTIONAR PRODUCTOS

    //INICIO BOTON GESTIONAR ClIENTES
    $attributes = array('class' => 'form', 'id' => 'btnGestionarClientes');
    echo form_open('controlador_clientes/direccionar_menu_gestionar_clientes', $attributes);
    $attributes = array('style' => 'width:242px; height:70px;', 'id' => 'submit', 'name' => 'GestionarClientes');
    echo form_submit($attributes, 'GESTIONAR CLIENTES');
    echo form_close();
    echo '<br>';
    //FIN BOTON GESTIONAR CLIENTES

    //INICIO BOTON GESTIONAR VENTAS
    $attributes = array('class' => 'form', 'id' => 'btnGestionarVentas');
    echo form_open('controlador_ventas/direccionar_menu_gestionar_ventas', $attributes);
    $attributes = array('style' => 'width:242px; height:70px;', 'id' => 'submit', 'name' => 'GestionarVentas');
    echo form_submit($attributes, 'GESTIONAR VENTAS');
    echo form_close();
    echo '<br>';
    //FIN BOTON GESTIONAR VENTAS

    //INICIO BOTON PRONOSTICO
    $attributes = array('class' => 'form', 'id' => 'btnGestionarReportes');
    echo form_open('controlador_pronostico/direccionar_menu_pronostico', $attributes);
    $attributes = array('style' => 'width:242px; height:70px;', 'id' => 'submit', 'name' => 'GestionarReportes');
    echo form_submit($attributes, 'GENERAR PRONOSTICO');
    echo form_close();
    echo '<br>';
    //FIN BOTON GESTIONAR PRONOSTICO

    //INICIO BOTON PLANIFICACION DE PRODUCCION
    $attributes = array('class' => 'form', 'id' => 'btnGestionarPedidos');
    echo form_open('controlador_pedidos/direccionar_menu_gestionar_pedidos', $attributes);
    $attributes = array('style' => 'width:242px; height:70px;', 'id' => 'submit', 'name' => 'GestionarPedidos');
    echo form_submit($attributes, 'PLANIFICACION DE PRODUCCION');
    echo form_close();
    echo '<br>';
    //FIN BOTON GESTIONAR PEDIDOS

    //INICIO BOTON PLANIFICACION DE PRODUCCION
    $attributes = array('class' => 'form', 'id' => 'btnGestionarPedidos');
    echo form_open('controlador_pedidos/direccionar_menu_gestionar_pedidos', $attributes);
    $attributes = array('style' => 'width:242px; height:70px;', 'id' => 'submit', 'name' => 'GestionarPedidos');
    echo form_submit($attributes, 'SALIR DEL SISTEMA');
    echo form_close();
    echo '<br>';
    //FIN BOTON GESTIONAR PEDIDOS

    ?>
  </center>


</body>


</html>