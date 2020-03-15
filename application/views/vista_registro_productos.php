<?php

$nombre =  array(
  'name' => 'nombre',
  'placeholder' => 'ESCRIBE NOMBRES MINIMO 3 CARACTERES',
  'type' => 'text',
  'pattern'   => '[A-za-z ]{3,40}',
  'style' => 'width:320px; height:70px',
  'required' => 'required'
);

$medida =  array(
  'name' => 'medida',
  'placeholder' => 'ESCRIBE LA MEDIDA DEL ANCHO EN MILIMETROS',
  //'type' => 'number',
  'pattern'   => '[0-9]{1,100}',
  'style' => 'width:320px; height:70px',
  'required' => 'required'
);

$stock =  array(
  'name' => 'stock',
  'placeholder' => 'ESCRIBE EL STOCK EN CANTIDAD DE METROS',
  //'type' => 'number',
  'pattern'   => '[0-9]{1,1000000}',
  'style' => 'width:320px; height:70px',
  'required' => 'required'
);

$precio =  array(
  'name' => 'precio',
  'placeholder' => 'ESCRIBE EL PRECIO POR METRO EN BS',
  //'type' => 'number',
  'pattern'   => '[0-9]{1,1000000}',
  'style' => 'width:320px; height:70px',
  'required' => 'required'
);

?>
<!DOCTYPE html>

<head>

</head>

<body>
  <center>
    <h1>REGISTRO DE PRODUCTOS</h1>
    <h3>LLENE TODOS LOS CAMPOS: </h3>
  </center>
  <?php
  $attributes = array('class' => 'form', 'id' => 'login');
  echo form_open('controlador_productos/registrar_productos', $attributes);
  ?>
  <table border="1px" style="margin: 0 auto;">
    <tr>
      <td><?php echo form_label('NOMBRE PRODUCTO', 'nombre')  ?> </td>
      <td><?php echo form_input($nombre); ?> </td>
    </tr>
    <tr>
      <td><?php echo form_label('TIPO PRODUCTO', 'tipo') ?> </td>
      <td>
        <select name="tipo" class="form" id="inputs" style="width:242px; height:40px">
          <option value="HDPE">HDPE</option>
          <option value="SDR">SDR</option>
          <option value="UF">UF</option>
        </select>
      </td>
    </tr>
    <tr>
      <td><?php echo form_label('MEDIDA (ANCHO)', 'medida') ?> </td>
      <td><?php echo form_input($medida) ?> </td>
    </tr>
    <tr>
      <td><?php echo form_label('STOCK (METROS) ', 'stock') ?> </td>
      <td><?php echo form_input($stock) ?> </td>
    </tr>
    <tr>
      <td><?php echo form_label('PRECIO (Bs)', 'precio') ?> </td>
      <td><?php echo form_input($precio) ?> </td>
    </tr>
  </table>
  <br>
  <br>
  <table border="5px" style="margin: 0 auto;">
    <tr>
      <td>
        <?php
        $attributes = array('style' => 'width:242px; height:70px;', 'id' => 'submit', 'name' => 'BtmRegistrarUsuarios');
        echo form_submit($attributes, 'REGISTRAR');
        echo form_close();
        ?>
      </td>
      <td>
        <?php
        $attributes = array('class' => 'form', 'id' => 'btnregistrousuarios');
        echo form_open('controlador_productos/direccionar_menu_gestionar_productos', $attributes); 
        // primero  pongo el archivo php luego la funcion
        $attributes = array('style' => 'width:242px; height:70px;', 'id' => 'submit', 'name' => 'BtmSalir');
        echo form_submit($attributes, 'ATRAS');
        echo form_close();
        ?>
      </td>
    </tr>
  </table>

</body>

</html>