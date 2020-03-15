<html>

<head>
</head>

<body>
  <center>
    <h1>GESTIONAR PRODUCTOS</h1>
    <?php
    echo '<table border=5px;>';
    echo '<tr>';
    // INICIO BOTON BUSCAR USUARIOS
    echo '<td>';
    $attributes = array('class' => 'form', 'id' => 'btnbuscar');
    echo form_open('controlador_productos/direccionar_menu_gestionar_productos', $attributes);
    $buscar =  array(
      'name' => 'buscar',
      'placeholder' => 'ESCRIBE LA MEDIDA ',
      'pattern'   => '[0-9]{1,100}',
      'style' => 'width:242px; height:70px'
    );
    echo form_label('BUSCAR POR MEDIDA  ', 'buscar');
    echo form_input($buscar);
    $attributes = array('style' => 'width:242px; height:70px;', 'id' => 'btnbuscar', 'name' => 'btnbuscar');
    echo form_submit($attributes, 'BUSCAR');
    echo form_close();
    echo '</td>';
    //FIN BOTON BUSCAR USUARIOS

    // INICIO BOTON REGISTRAR
    echo '<td>';
    $attributes = array('class' => 'form', 'id' => 'btnregistrar');
    echo form_open('controlador_productos/direccionar_registro_productos', $attributes);
    $attributes = array('style' => 'width:242px; height:70px;', 'id' => 'btnregistrar', 'name' => 'btnregistrar');
    echo form_submit($attributes, 'REGISTRAR');
    echo form_close();
    echo '</td>';
    // FIN BOTON REGISTRAR

    // INICIO BOTON SALIR
    echo '<td>';
    $attributes = array('class' => 'form', 'id' => 'btnsalir');
    echo form_open('controlador_productos/direccionar_menu_principal', $attributes);
    $attributes = array('style' => 'width:242px; height:70px;', 'id' => 'btnsalir', 'name' => 'btnsalir');
    echo form_submit($attributes, 'SALIR');
    echo form_close();
    echo '</td>';
    // FIN BOTON SALIR
    echo '</tr>';
    echo '</table>';

    ?>
  </center>
  <br>
  <br>
  <table border="1" style="margin: 0 auto;">
    <tr class="">
      <td class="" align="center">ID PRODUCTO</td>
      <td class="" align="center">NOMBRE</td>
      <td class="" align="center">TIPO</td>
      <td class="" align="center">MEDIDA</td>
      <td class="" align="center">STOCK</td>
      <td class="" align="center">PRECIO POR MTS</td>
      <td class="" align="center">MODIFICAR</td>
      <td class="" align="center">ELIMINAR</td>
    </tr>
    <tr class="">

      <?php
      if ($productos != FALSE) {
        foreach ($productos->result() as $row) {
          echo '<tr >';
          //echo '<td>';
          echo '<td>' . $row->id_producto . '  </td>';
          echo '<td>' . $row->nombre . '  </td>';
          echo '<td>' . $row->tipo . '   </td>';
          echo '<td>' . $row->medida . ' mm  </td>';
          echo '<td>' . $row->stock . ' mts</td>';
          echo '<td>' . $row->precio . ' bs por mts</td>';
          echo '<td><a href="' . base_url() . 'index.php/controlador_productos/direccionar_modificar/' . $row->id_producto . '">' . form_submit($attributes, 'MODIFICAR') . '</a></td>';
          echo '<td><a href="' . base_url() . 'index.php/controlador_productos/eliminar_productos/' . $row->id_producto . '">' . form_submit($attributes, 'ELIMINAR') . '</a></td>';
          echo form_close();
          //echo '</td>';  ?ciusuario=
          echo '</tr>';
        }
      } else {
        echo 'NO HAY REGISTROS';
      }
      ?>
    </tr>
  </table>

</body>

</html>