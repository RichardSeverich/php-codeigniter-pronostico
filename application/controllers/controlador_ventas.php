<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Controlador_ventas extends CI_Controller
{
  function   __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->helper('html');
    $this->load->helper('form');
    $this->load->model('modelo_ventas');
    $this->load->model('modelo_productos');
    $this->load->model('modelo_clientes');
  }
  public function index()
  {
    $this->load->view('vista_menu_principal_vendedor');
  }

  public function direccionar_menu_gestionar_ventas()
  {
    $datos = array(
      'buscar' => $this->input->post('buscar'),
    );
    if ($datos) {
    } else {
      $datos = false;
    }
    $data['ventas'] = $this->modelo_ventas->obtener_ventas($datos);
    $datos = false;
    $data['detalle'] = $this->modelo_ventas->obtener_detalle($datos);
    $data['productos'] = $this->modelo_productos->obtener_productos($datos);
    $this->load->view('vista_gestionar_ventas', $data);
  }

  public function direccionar_menu_principal()
  {
    $this->load->view('vista_menu_principal_vendedor');
  }

  public function direccionar_salir_gestionar_ventas()
  {
    $this->direccionar_menu_gestionar_ventas();
  }

  public function direccionar_registro_ventas($ci_cliente, $id_venta)
  {
    if ($ci_cliente != "0") {
      $datos = false;
      $data['productos'] = $this->modelo_productos->obtener_productos($datos);
      $data['clientes'] = $this->modelo_clientes->buscar_cliente($ci_cliente);
      $data['ci_cliente'] = $ci_cliente;
      $data['id_venta'] = $id_venta;
    } else {
      $data['clientes'] = "0";
      $data['productos'] = false;
      $data['ci_cliente'] = $ci_cliente;
      $data['id_venta'] = $id_venta;
    }
    $this->load->view('vista_registro_ventas', $data);
  }

  public function registrar_ventas_elegir_cliente() 
  {
    $ci_cliente = $this->input->post('buscarcliente');
    $datos = false;
    $data['clientes'] = $this->modelo_clientes->buscar_cliente($ci_cliente);
    if ($data['clientes'] !=  false) {
      foreach ($data['clientes']->result() as $row) {
        $ci_cliente = $row->ci_cliente;
      }
      $ci_usuario = '7593633';
      $this->registrar_ventas($ci_cliente, $ci_usuario);
      $datos = false;
      $data['ventas'] = $this->modelo_ventas->obtener_ventas($datos);
      foreach ($data['ventas']->result() as $row) {
        $id_venta = $row->id_venta;
      }
    } else {
      echo  '<script language="javascript"> ';
      echo  'alert("EL CLIENTE NO EXISTE");';
      echo  '</script>';
      $ci_cliente = "0";
      $id_venta = "0";
    }
    $this->direccionar_registro_ventas($ci_cliente, $id_venta);
  }

  function registrar_ventas($ci_cliente, $ci_usuario)
  {
    $datos['ci_cliente'] = $ci_cliente;
    $datos['ci_usuario'] = $ci_usuario;
    $datos['fecha'] = date('d/m/Y');
    $this->modelo_ventas->registrar_ventas($datos);
  }

  public function comprar_productos($id_producto, $id_venta, $ci_cliente)
  {
    //CONTROLAR LA CANTIDAD EXISTENTE Y RESTAR XD :D :D :D 
    $cantidad = $this->input->post('cantidad');
    $datos['cantidad'] = $cantidad;
    $datos['id_producto'] = $id_producto;
    $datos['id_venta'] = $id_venta;
    $producto = $this->modelo_productos->buscar_producto($id_producto);
    foreach ($producto->result() as $row) {
      $cantida_stock = $row->stock;
    }
    if ($cantida_stock >= $cantidad) {
      $this->modelo_ventas->registrar_detalle($datos);
      $cantida_stock_nueva = $cantida_stock - $cantidad;
      $this->modelo_productos->modificar_stock($id_producto, $cantida_stock_nueva);
      echo  '<script language="javascript"> ';
      echo  'alert("EL PRODUCTO SE VENDIO CORRECTAMENTE");';
      echo  '</script>';
    } else {
      echo  '<script language="javascript"> ';
      echo  'alert("NO SE PUEDE VENDER PORQUE LA CANTIDAD INGRESADA SOBREPASA LA CANTIDAD DE STOCK DISPONIBLE DEL PRODUCTO");';
      echo  '</script>';
    }
    $this->direccionar_registro_ventas($ci_cliente, $id_venta);
    //$this -> modelo_ventas->registrar_detalle($datos);
    //$this ->  direccionar_registro_ventas($ci_cliente, $id_venta);
  }

  public function eliminar_ventas($id_ventas)
  {
    $detalle = $this->modelo_ventas->obtener_detalle($id_ventas);
    //$productos=$this->modelo_ventas->obtener_productos($id_ventas);
    if ($detalle) {
      foreach ($detalle->result() as $rowdetalle) {
        if ($rowdetalle->id_venta == $id_ventas) {
          $productos = $this->modelo_productos->buscar_producto($rowdetalle->id_producto);
          foreach ($productos->result() as $rowproducto) {
            $stock_actual = $rowproducto->stock;
          }
          $stock_nuevo = $stock_actual +  $rowdetalle->cantidad;
          $this->modelo_productos->modificar_stock($rowdetalle->id_producto, $stock_nuevo);
        }
      }
      $this->modelo_ventas->eliminar_ventas($id_ventas);
      echo  '<script language="javascript"> ';
      echo  'alert("SE ELIMINO EXITOSAMENTE");';
      echo  '</script>';
    } else {
      $this->modelo_ventas->eliminar_ventas($id_ventas);
      echo  '<script language="javascript"> ';
      echo  'alert("SE ELIMINO EXITOSAMENTE");';
      echo  '</script>';
    }
    $this->direccionar_menu_gestionar_ventas();
  }
}
