<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Controlador_pronostico extends CI_Controller
{
  function   __construct()
  {
    parent::__construct();
    $this->load->helper('form');
    $this->load->helper('url');
    $this->load->helper('html');
    $this->load->model('modelo_productos');
    $this->load->model('modelo_ventas');
    $this->load->library('LibreriaPDF/fpdf');
  }

  public function index()
  {
    $this->load->view('vista_menu_principal');
  }

  public function direccionar_menu_pronostico()
  {
    $this->load->view('vista_menu_pronostico');
  }

  public function direccionar_menu_principal()
  {
    $this->load->view('vista_menu_principal_productor');
  }

  public function direccionar_proyeccion_monetaria()
  {
    $datos = FALSE;
    $data['productos'] = $this->modelo_productos->obtener_productos($datos);
    $data['ventas'] = $this->modelo_ventas->obtener_ventas($datos);
    $data['detalle'] = $this->modelo_ventas->obtener_detalle($datos);
    $this->load->view('vista_proyeccion_monetaria', $data);
  }

  public function direccionar_proyeccion_fisica()
  {
    $datos = FALSE;
    $data['productos'] = $this->modelo_productos->obtener_productos($datos);
    $data['ventas'] = $this->modelo_ventas->obtener_ventas($datos);
    $data['detalle'] = $this->modelo_ventas->obtener_detalle($datos);
    $this->load->view('vista_proyeccion_fisica', $data);
  }

  public function direccionar_proyeccion_fisica_anual()
  {
    $datos = FALSE;
    $data['productos'] = $this->modelo_productos->obtener_productos($datos);
    $data['ventas'] = $this->modelo_ventas->obtener_ventas($datos);
    $data['detalle'] = $this->modelo_ventas->obtener_detalle($datos);
    $this->load->view('vista_proyeccion_fisica_anual', $data);
  }

  public function direccionar_proyeccion_monetaria_anual()
  {
    $datos = FALSE;
    $data['productos'] = $this->modelo_productos->obtener_productos($datos);
    $data['ventas'] = $this->modelo_ventas->obtener_ventas($datos);
    $data['detalle'] = $this->modelo_ventas->obtener_detalle($datos);
    $this->load->view('vista_proyeccion_monetaria_anual', $data);
  }

  public function direccionar_vista_reportes_ventas_administrador()
  {
    $datos = FALSE;
    $data['productos'] = $this->modelo_productos->obtener_productos($datos);
    $data['ventas'] = $this->modelo_ventas->obtener_ventas($datos);
    $data['detalle'] = $this->modelo_ventas->obtener_detalle($datos);
    $this->load->view('vista_reportes_ventas_administrador', $data);
  }

  public function direccionar_proyeccion_fisica_resumen()
  {
    $datos = FALSE;
    $data['productos'] = $this->modelo_productos->obtener_productos($datos);
    $data['ventas'] = $this->modelo_ventas->obtener_ventas($datos);
    $data['detalle'] = $this->modelo_ventas->obtener_detalle($datos);
    $this->load->view('vista_proyeccion_fisica_anual_resumen', $data);
  }

  //public function direccionar_proyeccion_fisica_resumen_2($en,$feb,$mar,$abr,$may,$jun,$jul,$ago,$sep,$oct,$nov,$dic)

  public function direccionar_proyeccion_fisica_resumen_2($factor)
  {
    $factor_estacional = stripslashes($factor);
    $factor_estacional = urldecode($factor_estacional);
    $factor_estacional = unserialize($factor_estacional);
    $datos = FALSE;
    $data['factor_enero'] = $factor_estacional[1];
    $data['factor_febrero'] = $factor_estacional[2];
    $data['factor_marzo'] = $factor_estacional[3];
    $data['factor_abril'] = $factor_estacional[4];
    $data['factor_mayo'] = $factor_estacional[5];
    $data['factor_junio'] = $factor_estacional[6];
    $data['factor_julio'] = $factor_estacional[7];
    $data['factor_agosto'] = $factor_estacional[8];
    $data['factor_septiembre'] = $factor_estacional[9];
    $data['factor_octubre'] = $factor_estacional[10];
    $data['factor_noviembre'] = $factor_estacional[11];
    $data['factor_diciembre'] = $factor_estacional[12];
    $data['productos'] = $this->modelo_productos->obtener_productos($datos);
    $data['ventas'] = $this->modelo_ventas->obtener_ventas($datos);
    $data['detalle'] = $this->modelo_ventas->obtener_detalle($datos);
    $this->load->view('vista_proyeccion_fisica_anual_resumen_2', $data);
  }

  public function direccionar_graficar01($factor)
  {
    echo '<script type="text/javascript" language="javascript"> ';
    echo 'window.open("' . base_url() .   'index.php/controlador_pronostico/generar_grafica01/'
      . $factor .
      '","nuevaVentana","width=1000, height=550");';
    echo '</script> ';
    $this->direccionar_proyeccion_fisica_resumen_2($factor);
  }

  public function direccionar_graficar02($factor, $pronostico)
  {
    echo '<script type="text/javascript" language="javascript"> ';
    echo 'window.open("' . base_url() .   'index.php/controlador_pronostico/generar_grafica02/'
      . $pronostico .
      '","nuevaVentana","width=1000, height=550");';
    echo '</script> ';
    $this->direccionar_proyeccion_fisica_resumen_2($factor);
  }

  public function generar_grafica01($factor)
  {
    $factor_estacional = stripslashes($factor);
    $factor_estacional = urldecode($factor_estacional);
    $factor_estacional = unserialize($factor_estacional);
    $data['factor_enero'] = $factor_estacional[1];
    $data['factor_febrero'] = $factor_estacional[2];
    $data['factor_marzo'] = $factor_estacional[3];
    $data['factor_abril'] = $factor_estacional[4];
    $data['factor_mayo'] = $factor_estacional[5];
    $data['factor_junio'] = $factor_estacional[6];
    $data['factor_julio'] = $factor_estacional[7];
    $data['factor_agosto'] = $factor_estacional[8];
    $data['factor_septiembre'] = $factor_estacional[9];
    $data['factor_octubre'] = $factor_estacional[10];
    $data['factor_noviembre'] = $factor_estacional[11];
    $data['factor_diciembre'] = $factor_estacional[12];
    $this->load->view('vista_graficar01', $data);
  }

  public function generar_grafica02($factor)
  {
    $factor_estacional = stripslashes($factor);
    $factor_estacional = urldecode($factor_estacional);
    $factor_estacional = unserialize($factor_estacional);
    $data['factor_enero'] = $factor_estacional[1];
    $data['factor_febrero'] = $factor_estacional[2];
    $data['factor_marzo'] = $factor_estacional[3];
    $data['factor_abril'] = $factor_estacional[4];
    $data['factor_mayo'] = $factor_estacional[5];
    $data['factor_junio'] = $factor_estacional[6];
    $data['factor_julio'] = $factor_estacional[7];
    $data['factor_agosto'] = $factor_estacional[8];
    $data['factor_septiembre'] = $factor_estacional[9];
    $data['factor_octubre'] = $factor_estacional[10];
    $data['factor_noviembre'] = $factor_estacional[11];
    $data['factor_diciembre'] = $factor_estacional[12];
    $this->load->view('vista_graficar02', $data);
  }

  function reportes_pronostico($factor)
  {
    $factor_estacional = stripslashes($factor);
    $factor_estacional = urldecode($factor_estacional);
    $factor_estacional = unserialize($factor_estacional);
    $data['factor_enero'] = $factor_estacional[1];
    $data['factor_febrero'] = $factor_estacional[2];
    $data['factor_marzo'] = $factor_estacional[3];
    $data['factor_abril'] = $factor_estacional[4];
    $data['factor_mayo'] = $factor_estacional[5];
    $data['factor_junio'] = $factor_estacional[6];
    $data['factor_julio'] = $factor_estacional[7];
    $data['factor_agosto'] = $factor_estacional[8];
    $data['factor_septiembre'] = $factor_estacional[9];
    $data['factor_octubre'] = $factor_estacional[10];
    $data['factor_noviembre'] = $factor_estacional[11];
    $data['factor_diciembre'] = $factor_estacional[12];
    $this->load->view('vista_reportes_pronostico', $data);
  }

  function direccionar_repotes_pronostico($factor, $pronostico)
  {
    echo '<script type="text/javascript" language="javascript"> ';
    echo 'window.open("' . base_url() .   'index.php/controlador_pronostico/reportes_pronostico/'
      . $pronostico .
      '","nuevaVentana","width=1000, height=550");';
    echo '</script> ';
    $this->direccionar_proyeccion_fisica_resumen_2($factor);
  }
}
