<?php
$ci_usuario =  array(
  'name' => 'ci_usuario',
  'placeholder' => 'ESCRIBE CEDULA DE IDENTIDAD 7 DIGITOS',
  //'type' => 'number',
  'pattern'   => '[0-9]{7}',
  'style' => 'width:320px; height:70px',
  'required' => 'required'
  // 'type' => 'email'  << por ejemplo para poner otras de html
);

$contrasena =  array(
  'name' => 'contrasena',
  'placeholder' => 'ESCRIBE CONTRASENA DE 5 A 10 CARACTERES',
  'type' => 'password',
  'pattern' => '.{5,10}',
  'style' => 'width:320px; height:70px',
  'required' => 'required'
);

$nombres =  array(
  'name' => 'nombres',
  'placeholder' => 'ESCRIBE NOMBRES MINIMO 3 CARACTERES',
  'type' => 'text',
  'pattern'   => '[A-za-z ]{3,40}',
  'style' => 'width:320px; height:70px',
  'required' => 'required'
);

$apellidos =  array(
  'name' => 'apellidos',
  'placeholder' => 'ESCRIBE APELLIDOS MINIMO 3 CARACTERES',
  'type' => 'text',
  'pattern'   => '[A-za-z ]{3,40}',
  'style' => 'width:320px; height:70px',
  'required' => 'required'
);

$fechanacimiento =  array(
  'type' => 'date',
  'max' => '1997-01-01',
  'min' => '1970-01-01',
  'name' => 'fechanacimiento',
  'style' => 'width:320px; height:70px',
  'placeholder' => 'fecha de nacimiento de 1970 a 1997'
);

$direccion =  array(
  'name' => 'direccion',
  'placeholder' => 'ESCRIBE LA DIRCCION MINIMO 5 CARACTERES',
  'type' => 'text',
  'pattern'   => '[0-9A-za-z.- ]{5,50}',
  'style' => 'width:320px; height:70px',
  'required' => 'required'
);

$telefono =  array(
  'name' => 'telefono',
  'placeholder' => 'ESCRIBE TELEFONO/CELULAR DE 7 A 8 DIGITOS ',
  //'type' => 'number',
  'pattern'   => '[0-9]{7,8}',
  'style' => 'width:320px; height:70px',
  'required' => 'required'
);

$email =  array(
  'name' => 'email',
  'placeholder' => 'ESCRIBE CORREO MINIMOS 4 CARACTERES',
  'type' => 'email',
  'pattern' => '.{4,50}',
  'style' => 'width:320px; height:70px',
  'required' => 'required'
);

?>
<!DOCTYPE html>

<head>

</head>

<body>
  <center>
    <h1>REGISTRO DE USUARIOS</h1>
    <h3>LLENE TODOS LOS CAMPOS: </h3>
  </center>
  <?php
  $attributes = array('class' => 'form', 'id' => 'login');
  echo form_open('controlador_usuarios/registrar_usuarios', $attributes);
  ?>
  <table border="1px" style="margin: 0 auto;">
    <tr>
      <td><?php echo form_label('CEDULA DE IDENTIDAD', 'ciusuario')  ?> </td>
      <td><?php echo form_input($ci_usuario); ?> </td>
    </tr>
    <tr>
      <td><?php echo form_label('CONTRASENA', 'contrasena') ?> </td>
      <td><?php echo form_input($contrasena) ?> </td>
    </tr>
    <tr>
      <td><?php echo form_label('TIPO USUARIO', 'tipousuario') ?> </td>
      <td>
        <select name="tipousuario" class="form" id="inputs" style="width:242px; height:40px">
          <option value="Administrador">Administrador</option>
          <option value="Vendedor">Vendedor</option>
          <option value="Productor">Productor</option>
        </select>
      </td>
    </tr>
    <tr>
      <td><?php echo form_label('NOMBRES', 'nombres') ?> </td>
      <td><?php echo form_input($nombres) ?></td>
    </tr>
    <tr>
      <td><?php echo form_label('APELLIDOS', 'apellidos') ?> </td>
      <td><?php echo form_input($apellidos) ?></td>
    </tr>
    <tr>
      <td><?php echo form_label('FECHA DE NACIMIENTO', 'fechanacimiento') ?> </td>
      <td><?php echo form_input($fechanacimiento) ?></td>

    </tr>
    <tr>
      <td><?php echo form_label('DIRECCION', 'direccion') ?> </td>
      <td><?php echo form_input($direccion) ?></td>
    </tr>
    <tr>
      <td><?php echo form_label('TELEFONOS', 'telefono') ?></td>
      <td><?php echo form_input($telefono) ?></td>
    </tr>
    <tr>
      <td><?php echo form_label('CORREO', 'email') ?></td>
      <td><?php echo form_input($email) ?></td>
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
        echo form_open('controlador_usuarios/direccionar_menu_gestionar_usuarios', $attributes);
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