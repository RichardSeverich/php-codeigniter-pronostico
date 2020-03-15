<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Controlador_productos extends CI_Controller
{
	function   __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->helper('form');
		$this->load->model('modelo_productos');
		$this->load->model('modelo_ventas');
	}

	public function index()
	{
		$this->load->view('vista_menu_principal');
	}

	public function registrar_productos()
	{
		$datos = array(
			'nombre' => $this->input->post('nombre'),
			'tipo' => $this->input->post('tipo'),
			'medida' => $this->input->post('medida'),
			'stock' => $this->input->post('stock'),
			'precio' => $this->input->post('precio')
		);
		$this->modelo_productos->registrar_producto($datos);
		$this->direccionar_registro_productos();
		echo	'<script language="javascript"> ';
		echo	'alert("SE REGISTRO EXITOSAMENTE");';
		echo	'</script>';
	}
	public function direccionar_menu_gestionar_productos()
	{
		$datos = array(
			'buscar' => $this->input->post('buscar'),
		);
		if ($datos) {
		} else {
			$datos = false;
		}
		$data['productos'] = $this->modelo_productos->obtener_productos($datos);
		$this->load->view('vista_gestionar_productos', $data);
	}

	public function direccionar_menu_principal()
	{
		$this->load->view('vista_menu_principal_administrador');
	}

	public function direccionar_registro_productos()
	{
		$this->load->view('vista_registro_productos');
	}

	public function eliminar_productos($id_producto)
	{
		$resultadobusqueda = $this->modelo_ventas->obtener_ventas_id_producto($id_producto);
		if ($resultadobusqueda) {
			echo	'<script language="javascript"> ';
			echo	'alert("ERROR NO SE ELIMINO, EXISTE VENTAS REALIZADAS CON ESTE PRODUCTO, ELIMINA LAS VENTAS PARA PODER ELIMINAR EL PRODUCTO");';
			echo	'</script>';
		} else {
			$this->modelo_productos->eliminar_productos($id_producto);
			echo	'<script language="javascript"> ';
			echo	'alert("SE ELIMINO EXITOSAMENTE");';
			echo	'</script>';
		}

		$this->direccionar_menu_gestionar_productos();
	}
}
