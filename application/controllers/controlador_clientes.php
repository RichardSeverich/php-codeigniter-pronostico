<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Controlador_clientes extends CI_Controller
{
	function   __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->model('modelo_clientes');
		$this->load->model('modelo_ventas');
	}

	public function direccionar_menu_gestionar_clientes()
	{
		$datos = array(
			'buscar' => $this->input->post('buscar'),
		);
		if ($datos) {
		} else {
			$datos = false;
		}
		$data['clientes'] = $this->modelo_clientes->obtener_clientes($datos);
		$this->load->view('vista_gestionar_clientes', $data);
	}

	public function direccionar_menu_principal()
	{
		$this->load->view('vista_menu_principal_vendedor');
	}

	public function eliminar_clientes($ci_cliente)
	{
		$resultadobusqueda = $this->modelo_ventas->obtener_ventas_ci_cliente($ci_cliente);
		if ($resultadobusqueda) {
			echo	'<script language="javascript"> ';
			echo	'alert("ERROR NO SE ELIMINO, EXISTE VENTAS REALIZADAS CON ESTE CLIENTE, ELIMINA LAS VENTAS PARA PODER ELIMINAR EL CLIENTE");';
			echo	'</script>';
		} else {
			$this->modelo_clientes->eliminar_clientes($ci_cliente);
			echo	'<script language="javascript"> ';
			echo	'alert("SE ELIMINO EXITOSAMENTE");';
			echo	'</script>';
		}
		$this->direccionar_menu_gestionar_clientes();
	}
}
