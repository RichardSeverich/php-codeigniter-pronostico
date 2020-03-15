<html>

<head>
</head>

<body>
  <center>
    <h1>PRONOSTICO PARTE 2</h1>
    <?php
    echo '<table border=5px;>';
    echo '<tr>';
    echo '<tr>';
    // INICIO BOTON GRAFICAR VENTAS REALES
    $factor_estacional[1] = $factor_enero;
    $factor_estacional[2] = $factor_febrero;
    $factor_estacional[3] = $factor_marzo;
    $factor_estacional[4] = $factor_abril;
    $factor_estacional[5] = $factor_mayo;
    $factor_estacional[6] = $factor_junio;
    $factor_estacional[7] = $factor_julio;
    $factor_estacional[8] = $factor_agosto;
    $factor_estacional[9] = $factor_septiembre;
    $factor_estacional[10] = $factor_octubre;
    $factor_estacional[11] = $factor_noviembre;
    $factor_estacional[12] = $factor_diciembre;
    $factor = serialize($factor_estacional);
    $factor = urlencode($factor);
    echo '<td>';
    $attributes = array('class' => 'form', 'id' => 'btnsalir');
    echo form_open('controlador_pronostico/direccionar_graficar01/' . $factor . '', $attributes);
    $attributes = array('style' => 'width:242px; height:70px;', 'id' => 'btnsalir', 'name' => 'btnsalir');
    echo form_submit($attributes, 'GRAFICAR VENTAS REALES');
    echo form_close();
    echo '</td>';
    // FIN BOTON GRAFICAR

    // INICIO BOTON SALIR
    echo '<td>';
    $attributes = array('class' => 'form', 'id' => 'btnsalir');
    echo form_open('controlador_pronostico/direccionar_proyeccion_fisica_resumen', $attributes);
    $attributes = array('style' => 'width:242px; height:70px;', 'id' => 'btnsalir', 'name' => 'btnsalir');
    echo form_submit($attributes, 'ATRAS');
    echo form_close();
    echo '</td>';
    // FIN BOTON SALIR

    // INICIO BOTON SALIR
    echo '<td>';
    $attributes = array('class' => 'form', 'id' => 'btnsalir');
    echo form_open('controlador_pronostico/direccionar_menu_pronostico', $attributes);
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
  <br>
  <br>
  <table align="center" border=1 cellspacing=1 cellpadding=1>
    <tr class="">

      <td>
        <table align="center" border=1 cellspacing=1 cellpadding=1>
          <tr bgcolor="#A5F1EC">
            <td>AÑO</td>
            <td>MES</td>
            <td>PERIODO</td>
            <td>VENTAS</td>
            <td>FACTOR DE TENDENCIA</td>
            <td>INDICE ESTACIONAL AJUSTADO</td>
            <td>PRONOSTICO</td>
          </tr>
          <?php
          if ($productos != FALSE) {
            $cont_vect = 1;
            $años = 2015;
            $ind = 1;
            $array[0] = 0;
            $array[1] = 1;
            $array[2] = 2;
            $array[3] = 3;
            $array[4] = 4;
            $array[5] = 5;
            $array[6] = 6;
            $array[7] = 7;
            $array[8] = 8;
            $array[9] = 9;
            $array[10] = 10;
            $array[11] = 11;
            for ($año = 2012; $años >= $año; $año++) {
          ?>
          <?php
              $cantidad_total_sumatoria_enero = 0;
              $cantidad_total_sumatoria_febrero = 0;
              $cantidad_total_sumatoria_marzo = 0;
              $cantidad_total_sumatoria_abril =   0;
              $cantidad_total_sumatoria_mayo = 0;
              $cantidad_total_sumatoria_junio = 0;
              $cantidad_total_sumatoria_julio = 0;
              $cantidad_total_sumatoria_agosto = 0;
              $cantidad_total_sumatoria_septiembre = 0;
              $cantidad_total_sumatoria_octubre = 0;
              $cantidad_total_sumatoria_noviembre = 0;
              $cantidad_total_sumatoria_diciembre = 0;
              foreach ($productos->result() as $rowproducto) {
                $cantidad_total = 0;
                $cantidad_total_enero = 0;
                $cantidad_total_febrero = 0;
                $cantidad_total_marzo = 0;
                $cantidad_total_abril = 0;
                $cantidad_total_mayo = 0;
                $cantidad_total_junio = 0;
                $cantidad_total_julio = 0;
                $cantidad_total_agosto = 0;
                $cantidad_total_septiembre = 0;
                $cantidad_total_octubre = 0;
                $cantidad_total_noviembre = 0;
                $cantidad_total_diciembre = 0;
                foreach ($ventas->result() as $rowventas) {
                  $fecha_venta = $rowventas->fecha_venta;
                  $mes_venta = substr($fecha_venta, -7, 2); //EXTRAE EL MES
                  $anio_venta = substr($fecha_venta, 6);
                  //$mes_venta = (int)$mes_venta;
                  if ($anio_venta == $año) {
                    foreach ($detalle->result() as $rowdetalle) {
                      switch ($mes_venta) {
                        case "01":
                          if ($rowdetalle->id_producto == $rowproducto->id_producto) {
                            $cantidad = $rowdetalle->cantidad;
                            $precio = $rowproducto->precio;
                            $cantidad_total_enero = $cantidad_total_enero + $cantidad;
                          }
                          break;
                        case "02":
                          if ($rowdetalle->id_producto == $rowproducto->id_producto) {
                            $cantidad = $rowdetalle->cantidad;
                            $precio = $rowproducto->precio;
                            $cantidad_total_febrero = $cantidad_total_febrero + $cantidad;
                          }
                          break;
                        case "03":
                          if ($rowdetalle->id_producto == $rowproducto->id_producto) {
                            $cantidad = $rowdetalle->cantidad;
                            $precio = $rowproducto->precio;
                            $cantidad_total_marzo = $cantidad_total_marzo + $cantidad;
                          }
                          break;
                        case "04":
                          if ($rowdetalle->id_producto == $rowproducto->id_producto) {
                            $cantidad = $rowdetalle->cantidad;
                            $precio = $rowproducto->precio;
                            $cantidad_total_abril = $cantidad_total_abril + $cantidad;
                          }
                          break;
                        case "05":
                          if ($rowdetalle->id_producto == $rowproducto->id_producto) {
                            $cantidad = $rowdetalle->cantidad;
                            $precio = $rowproducto->precio;
                            $cantidad_total_mayo = $cantidad_total_mayo + $cantidad;
                          }
                          break;
                        case "06":
                          if ($rowdetalle->id_producto == $rowproducto->id_producto) {
                            $cantidad = $rowdetalle->cantidad;
                            $precio = $rowproducto->precio;
                            $cantidad_total_junio = $cantidad_total_junio + $cantidad;
                          }
                          break;
                        case "07":
                          if ($rowdetalle->id_producto == $rowproducto->id_producto) {
                            $cantidad = $rowdetalle->cantidad;
                            $precio = $rowproducto->precio;
                            $cantidad_total_julio = $cantidad_total_julio + $cantidad;
                          }
                          break;
                        case "08":
                          if ($rowdetalle->id_producto == $rowproducto->id_producto) {
                            $cantidad = $rowdetalle->cantidad;
                            $precio = $rowproducto->precio;
                            $cantidad_total_agosto = $cantidad_total_agosto + $cantidad;
                          }
                          break;
                        case "09":
                          if ($rowdetalle->id_producto == $rowproducto->id_producto) {
                            $cantidad = $rowdetalle->cantidad;
                            $precio = $rowproducto->precio;
                            $cantidad_total_septiembre = $cantidad_total_septiembre + $cantidad;
                          }
                          break;
                        case "10":
                          if ($rowdetalle->id_producto == $rowproducto->id_producto) {
                            $cantidad = $rowdetalle->cantidad;
                            $precio = $rowproducto->precio;
                            $cantidad_total_octubre = $cantidad_total_octubre + $cantidad;
                          }
                          break;
                        case "11":
                          if ($rowdetalle->id_producto == $rowproducto->id_producto) {
                            $cantidad = $rowdetalle->cantidad;
                            $precio = $rowproducto->precio;
                            $cantidad_total_noviembre = $cantidad_total_noviembre + $cantidad;
                          }
                          break;
                        case "12":
                          if ($rowdetalle->id_producto == $rowproducto->id_producto) {
                            $cantidad = $rowdetalle->cantidad;
                            $precio = $rowproducto->precio;
                            $cantidad_total_diciembre = $cantidad_total_diciembre + $cantidad;
                          }
                          break;
                        default:
                          echo "No entro a ninguno en el switch";
                      }
                    }
                  } // fin if año
                }
                $cantidad_total_sumatoria_enero = $cantidad_total_sumatoria_enero + $cantidad_total_enero;
                $cantidad_total_sumatoria_febrero = $cantidad_total_sumatoria_febrero + $cantidad_total_febrero;
                $cantidad_total_sumatoria_marzo = $cantidad_total_sumatoria_marzo + $cantidad_total_marzo;
                $cantidad_total_sumatoria_abril =   $cantidad_total_sumatoria_abril + $cantidad_total_abril;
                $cantidad_total_sumatoria_mayo = $cantidad_total_sumatoria_mayo + $cantidad_total_mayo;
                $cantidad_total_sumatoria_junio = $cantidad_total_sumatoria_junio + $cantidad_total_junio;
                $cantidad_total_sumatoria_julio = $cantidad_total_sumatoria_julio + $cantidad_total_julio;
                $cantidad_total_sumatoria_agosto = $cantidad_total_sumatoria_agosto + $cantidad_total_agosto;
                $cantidad_total_sumatoria_septiembre = $cantidad_total_sumatoria_septiembre + $cantidad_total_septiembre;
                $cantidad_total_sumatoria_octubre = $cantidad_total_sumatoria_octubre + $cantidad_total_octubre;
                $cantidad_total_sumatoria_noviembre = $cantidad_total_sumatoria_noviembre + $cantidad_total_noviembre;
                $cantidad_total_sumatoria_diciembre = $cantidad_total_sumatoria_diciembre + $cantidad_total_diciembre;
              }

              $sumatoria_cantidades[$cont_vect] =  $cantidad_total_sumatoria_enero;
              $sumatoria_cantidades[$cont_vect + 1] = $cantidad_total_sumatoria_febrero;
              $sumatoria_cantidades[$cont_vect + 2] = $cantidad_total_sumatoria_marzo;
              $sumatoria_cantidades[$cont_vect + 3] = $cantidad_total_sumatoria_abril;
              $sumatoria_cantidades[$cont_vect + 4] = $cantidad_total_sumatoria_mayo;
              $sumatoria_cantidades[$cont_vect + 5] = $cantidad_total_sumatoria_junio;
              $sumatoria_cantidades[$cont_vect + 6] = $cantidad_total_sumatoria_julio;
              $sumatoria_cantidades[$cont_vect + 7] = $cantidad_total_sumatoria_agosto;
              $sumatoria_cantidades[$cont_vect + 8] = $cantidad_total_sumatoria_septiembre;
              $sumatoria_cantidades[$cont_vect + 9] =  $cantidad_total_sumatoria_octubre;
              $sumatoria_cantidades[$cont_vect + 10] =  $cantidad_total_sumatoria_noviembre;
              $sumatoria_cantidades[$cont_vect + 11] =   $cantidad_total_sumatoria_diciembre;
              $cont_vect = $cont_vect + 12;
              $coeficiente_tendencia01 = 5616.2626;
              $coeficiente_tendencia02 = 23.6890;
              //echo '<td>';
              $array[(0 + $ind)] = 0 + $ind;
              $factor_tendencia_enero = $coeficiente_tendencia01 + $coeficiente_tendencia02 * $array[(0 + $ind)];
              $pronostico[0 + $ind] = $factor_tendencia_enero * $factor_enero;
              echo '<tr>';
              echo '<td bgcolor= "#A5F1EC" >' . $año . '</td>';
              echo '<td >ENERO</td>';
              echo '<td>' . (0 + $ind) . '</td>';
              echo '<td>' . $cantidad_total_sumatoria_enero . ' mts</td>';
              echo '<td>' . $factor_tendencia_enero . '</td>';
              echo '<td>' . $factor_enero . '</td>';
              echo '<td>' . $pronostico[0 + $ind] . '</td>';
              echo '</tr>';
              $array[(1 + $ind)] = 1 + $ind;
              $factor_tendencia_febrero = $coeficiente_tendencia01 + $coeficiente_tendencia02 * $array[(1 + $ind)];
              $pronostico[1 + $ind] = $factor_tendencia_febrero * $factor_febrero;
              echo '<tr>';
              echo '<td></td>';
              echo '<td>FEBRERO</td>';
              echo '<td>' . (1 + $ind) . '</td>';
              echo '<td>' . $cantidad_total_sumatoria_febrero . ' mts</td>';
              echo '<td>' . $factor_tendencia_febrero . '</td>';
              echo '<td>' . $factor_febrero . '</td>';
              echo '<td>' . $pronostico[1 + $ind] . '</td>';
              echo '</tr>';
              $array[(2 + $ind)] = 2 + $ind;
              $factor_tendencia_marzo = $coeficiente_tendencia01 + $coeficiente_tendencia02 * $array[(2 + $ind)];
              $pronostico[2 + $ind] = $factor_tendencia_marzo * $factor_marzo;
              echo '<tr>';
              echo '<td></td>';
              echo '<td>MARZO</td>';
              echo '<td>' . (2 + $ind) . '</td>';
              echo '<td>' . $cantidad_total_sumatoria_marzo . ' mts</td>';
              echo '<td>' . $factor_tendencia_marzo . '</td>';
              echo '<td>' . $factor_marzo . '</td>';
              echo '<td>' . $pronostico[2 + $ind] . '</td>';
              echo '</tr>';
              $array[(3 + $ind)] = 3 + $ind;
              $factor_tendencia_abril = $coeficiente_tendencia01 + $coeficiente_tendencia02 * $array[(3 + $ind)];
              $pronostico[3 + $ind] = $factor_tendencia_abril * $factor_abril;
              echo '<tr>';
              echo '<td></td>';
              echo '<td>ABRIL</td>';
              echo '<td>' . (3 + $ind) . '</td>';
              echo '<td>' . $cantidad_total_sumatoria_abril . ' mts</td>';
              echo '<td>' . $factor_tendencia_abril . '</td>'; //
              echo '<td>' . $factor_abril . '</td>';
              echo '<td>' . $pronostico[3 + $ind] . '</td>';
              echo '</tr>';
              $array[(4 + $ind)] = 4 + $ind;
              $factor_tendencia_mayo = $coeficiente_tendencia01 + $coeficiente_tendencia02 * $array[(4 + $ind)];
              $pronostico[4 + $ind] = $factor_tendencia_mayo * $factor_mayo;
              echo '<tr>';
              echo '<td></td>';
              echo '<td>MAYO</td>';
              echo '<td>' . (4 + $ind) . '</td>';
              echo '<td>' . $cantidad_total_sumatoria_mayo . ' mts</td>';
              echo '<td>' . $factor_tendencia_mayo . '</td>';
              echo '<td>' . $factor_mayo . '</td>';
              echo '<td>' . $pronostico[4 + $ind] . '</td>';
              echo '</tr>';
              $array[(5 + $ind)] = 5 + $ind;
              $factor_tendencia_junio = $coeficiente_tendencia01 + $coeficiente_tendencia02 * $array[(5 + $ind)];
              $pronostico[5 + $ind] = $factor_tendencia_junio * $factor_junio;
              echo '<tr>';
              echo '<td></td>';
              echo '<td>JUNIO</td>';
              echo '<td>' . (5 + $ind) . '</td>';
              echo '<td>' . $cantidad_total_sumatoria_junio . ' mts</td>';
              echo '<td>' . $factor_tendencia_junio . '</td>';
              echo '<td>' . $factor_junio . '</td>';
              echo '<td>' . $pronostico[5 + $ind] . '</td>';
              echo '</tr>';
              $array[(6 + $ind)] = 6 + $ind;
              $factor_tendencia_julio = $coeficiente_tendencia01 + $coeficiente_tendencia02 * $array[(6 + $ind)];
              $pronostico[6 + $ind] = $factor_tendencia_julio * $factor_julio;
              echo '<tr>';
              echo '<td></td>';
              echo '<td>JULIO</td>';
              echo '<td>' . (6 + $ind) . '</td>';
              echo '<td>' . $cantidad_total_sumatoria_julio . ' mts</td>';
              echo '<td>' . $factor_tendencia_julio . '</td>';
              echo '<td>' . $factor_julio . '</td>';
              echo '<td>' . $pronostico[6 + $ind] . '</td>';
              echo '</tr>';
              $array[(7 + $ind)] = 7 + $ind;
              $factor_tendencia_agosto = $coeficiente_tendencia01 + $coeficiente_tendencia02 * $array[(7 + $ind)];
              $pronostico[7 + $ind] = $factor_tendencia_agosto * $factor_agosto;
              echo '<tr>';
              echo '<td></td>';
              echo '<td>AGOSTO</td>';
              echo '<td>' . (7 + $ind) . '</td>';
              echo '<td>' . $cantidad_total_sumatoria_agosto . ' mts</td>';
              echo '<td>' . $factor_tendencia_agosto . '</td>';
              echo '<td>' . $factor_agosto . '</td>';
              echo '<td>' . $pronostico[7 + $ind] . '</td>';
              echo '</tr>';
              $array[(8 + $ind)] = 8 + $ind;
              $factor_tendencia_septiembre = $coeficiente_tendencia01 + $coeficiente_tendencia02 * $array[(8 + $ind)];
              $pronostico[8 + $ind] = $factor_tendencia_septiembre * $factor_septiembre;
              echo '<tr>';
              echo '<td></td>';
              echo '<td>SEPTIEMBRE</td>';
              echo '<td>' . (8 + $ind) . '</td>';
              echo '<td>' . $cantidad_total_sumatoria_septiembre . ' mts</td>';
              echo '<td>' . $factor_tendencia_septiembre . '</td>';
              echo '<td>' . $factor_septiembre . '</td>';
              echo '<td>' . $pronostico[8 + $ind] . '</td>';
              echo '</tr>';
              $array[(9 + $ind)] = 9 + $ind;
              $factor_tendencia_octubre = $coeficiente_tendencia01 + $coeficiente_tendencia02 * $array[(9 + $ind)];
              $pronostico[9 + $ind] = $factor_tendencia_octubre * $factor_octubre;
              echo '<tr>';
              echo '<td></td>';
              echo '<td>OCTUBRE</td>';
              echo '<td>' . (9 + $ind) . '</td>';
              echo '<td>' . $cantidad_total_sumatoria_octubre . ' mts</td>';
              echo '<td>' . $factor_tendencia_octubre . '</td>';
              echo '<td>' . $factor_octubre . '</td>';
              echo '<td>' . $pronostico[9 + $ind] . '</td>';
              echo '</tr>';
              $array[(10 + $ind)] = 10 + $ind;
              $factor_tendencia_noviembre = $coeficiente_tendencia01 + $coeficiente_tendencia02 * $array[(10 + $ind)];
              $pronostico[10 + $ind] = $factor_tendencia_noviembre * $factor_noviembre;
              echo '<tr>';
              echo '<td></td>';
              echo '<td>NOVIEMBRE</td>';
              echo '<td>' . (10 + $ind) . '</td>';
              echo '<td>' . $cantidad_total_sumatoria_noviembre . ' mts</td>';
              echo '<td>' . $factor_tendencia_noviembre . '</td>';
              echo '<td>' . $factor_noviembre . '</td>';
              echo '<td>' . $pronostico[10 + $ind] . '</td>';
              echo '</tr>';
              $array[(11 + $ind)] = 11 + $ind;
              $factor_tendencia_diciembre = $coeficiente_tendencia01 + $coeficiente_tendencia02 * $array[(11 + $ind)];
              $pronostico[11 + $ind] = $factor_tendencia_diciembre * $factor_diciembre;
              echo '<tr>';
              echo '<td></td>';
              echo '<td>DICIEMBRE</td>';
              echo '<td>' . (11 + $ind) . '</td>';
              echo '<td>' . $cantidad_total_sumatoria_diciembre . ' mts</td>';
              echo '<td>' . $factor_tendencia_diciembre . '</td>';
              echo '<td>' . $factor_diciembre . '</td>';
              echo '<td>' . $pronostico[11 + $ind] . '</td>';
              echo '</tr>';
              //echo '</td>';  
              $ind = $ind + 12;
            } // fin del for años
            echo '</table>';
            echo '</td>';
            // OTRA TABLA
          } else {
            echo 'NO HAY REGISTROS';
          }
          ?>
    </tr>
  </table>

  <?php
  echo '<br>';
  echo '<table align="center" border=1 cellspacing=1 cellpadding=1 >';
  echo '<tr>';
  // INICIO BOTON GRAFICAR PRONOSTICO
  $valor = $ind;
  $valor = $valor - 12;
  $pronostico_graficar[1] = $pronostico[0 + $valor];
  $pronostico_graficar[2] = $pronostico[1 + $valor];
  $pronostico_graficar[3] = $pronostico[2 + $valor];
  $pronostico_graficar[4] = $pronostico[3 + $valor];
  $pronostico_graficar[5] = $pronostico[4 + $valor];
  $pronostico_graficar[6] = $pronostico[5 + $valor];
  $pronostico_graficar[7] = $pronostico[6 + $valor];
  $pronostico_graficar[8] = $pronostico[7 + $valor];
  $pronostico_graficar[9] = $pronostico[8 + $valor];
  $pronostico_graficar[10] = $pronostico[9 + $valor];
  $pronostico_graficar[11] = $pronostico[10 + $valor];
  $pronostico_graficar[12] = $pronostico[11 + $valor];
  $pronostico_serializado = serialize($pronostico_graficar);
  $pronostico_serializado = urlencode($pronostico_serializado);

  echo '<td>';
  $attributes = array('class' => 'form', 'id' => 'btnsalir');
  echo form_open('controlador_pronostico/direccionar_graficar02/' . $factor . '/' . $pronostico_serializado . '', $attributes);
  $attributes = array('style' => 'width:242px; height:70px;', 'id' => 'btnsalir', 'name' => 'btnsalir');
  echo form_submit($attributes, 'GRAFICAR PRONOSTICO');
  echo form_close();
  echo '</td>';
  // FIN BOTON GRAFICAR

  // INICIO BOTON REPORTES PRODUCCION
  echo '<td>';
  $attributes = array('class' => 'form', 'id' => 'btnsalir');
  echo form_open('controlador_pronostico/direccionar_repotes_pronostico/' . $factor . '/' . $pronostico_serializado . '', $attributes);
  $attributes = array('style' => 'width:242px; height:70px;', 'id' => 'btnsalir', 'name' => 'btnsalir');
  echo form_submit($attributes, 'REPORTES PRODUCCION');
  echo form_close();
  echo '</td>';
  // FIN BOTON GRAFICAR
  echo '</tr>';
  echo '</tr>';
  echo '</table>';
  ?>

</body>

</html>
