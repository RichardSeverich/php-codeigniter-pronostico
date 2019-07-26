<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Controlador_usuarios extends CI_Controller 

{
	function   __construct()
	{
		parent::   __construct();
		
		$this->load->helper ('url');
		$this->load->helper ('html');
		$this->load->helper('form');
		$this ->load->model('modelo_usuarios');
		$this ->load->model('modelo_ventas');
	}

	public function index()
	{
		
		$this->load->view('vista_menu_principal');
	}
	
	public function direccionar_menu_gestionar_usuarios()
	{
		
		
		$datos = array (
				'buscar' => $this -> input -> post('buscar'),		
			);
		
		if($datos)
		{ 
		}
		else
		{
			$datos = false;
		}
		$data['usuarios'] = $this -> modelo_usuarios->obtener_usuarios($datos);
		$this->load->view('vista_gestionar_usuarios',$data);
	}
	
	public function direccionar_menu_principal()
	{
		
		$this->load->view('vista_menu_principal_administrador');
	}
	public function direccionar_registro_usuarios()
	{
		
		$this->load->view('vista_registro_usuarios');
	}
	public function direccionar_modificar_usuarios($ci_usuario)
	{
		
		$datos=FALSE;
		$data['usuarios']=$this -> modelo_usuarios->buscar_usuario($ci_usuario);
		$this->load->view('vista_modificar_usuarios',$data);
	}
	function direccionar_salir_ingresar_sistema_usuarios()
	{
		
		$this->load->view('vista_ingresar_sistema_usuarios');
	}
	function registrar_usuarios()
	{
		
		$ci_usuario = $this -> input -> post('ci_usuario');
		$resultadobusqueda = $this ->modelo_usuarios->buscar_usuario($ci_usuario);
		if(!$resultadobusqueda )
		{
			$datos = array (
			'ci_usuario' => $this -> input -> post('ci_usuario'),
			'contrasena' => $this -> input -> post('contrasena'),
			'tipousuario' => $this -> input -> post('tipousuario'),
			'nombres' => $this -> input -> post('nombres'),
			'apellidos' => $this -> input -> post('apellidos'),
			'fechanacimiento' => $this -> input -> post('fechanacimiento'),
			'direccion' => $this -> input -> post('direccion'),
			'telefono' => $this -> input -> post('telefono'),
			'email' => $this -> input -> post('email')
			);
			$this->modelo_usuarios->registrar_usuario($datos);
			//$this->load->view('vista_registro_usuarios');
			$this->direccionar_registro_usuarios();
			echo	'<script language="javascript"> ';
			echo	'alert("SE REGISTRO EXITOSAMENTE");' ;
			echo	'</script>';
		
		}
        else
		{
			echo	'<script language="javascript"> ';
			echo	'alert("EL CI USUARIO YA EXISTE, NO SE REGISTRO");' ;
			echo	'</script>';
			//$this->load->view('vista_registro_usuarios');
			$this->direccionar_registro_usuarios();
		}		
			 
	}
	function modificar_usuarios($ci_usuario)
	{
		$datos = array (

			'contrasena' => $this -> input -> post('contrasena'),
			'tipousuario' => $this -> input -> post('tipousuario'),
			'nombres' => $this -> input -> post('nombres'),
			'apellidos' => $this -> input -> post('apellidos'),
			'fechanacimiento' => $this -> input -> post('fechanacimiento'),
			'direccion' => $this -> input -> post('direccion'),
			'telefono' => $this -> input -> post('telefono'),
			'email' => $this -> input -> post('email')
		);
		
		$this->modelo_usuarios->modificar_usuario($ci_usuario,$datos);
		echo	'<script language="javascript"> ';
		echo	'alert("SE MODIFICO EXITOSAMENTE");' ;
		echo	'</script>';
		$this->direccionar_menu_gestionar_usuarios();   /// asi se llama a una funcion del propio controlador
		
	}
	
	
	public function eliminar_usuarios($ci_usuario)
	{
		
	$resultadobusqueda=$this->modelo_ventas->obtener_ventas_ci_usuario($ci_usuario);
	 if($resultadobusqueda)
	 {
		echo	'<script language="javascript"> ';
		echo	'alert("ERROR NO SE ELIMINO, EXISTE VENTAS REALIZADAS CON ESTE USUARIO, ELIMINA LAS VENTAS PARA PODER ELIMINAR EL USUARIO");' ;
		echo	'</script>';
	 }
	else
	{
		$this->modelo_usuarios->eliminar_usuario($ci_usuario);
		echo	'<script language="javascript"> ';
		echo	'alert("SE ELIMINO EXITOSAMENTE");' ;
		echo	'</script>';
	}
		
		
		$this->direccionar_menu_gestionar_usuarios();
	}
	
	function ingresar_al_sistema_usuarios()
	{
		$ci_usuario = $this -> input -> post('ci_usuario');
		$contrasena = $this -> input -> post('contrasena');
		$resultadobusqueda = $this ->modelo_usuarios->buscar_usuario_contrasena($ci_usuario,$contrasena);
		
		if($resultadobusqueda)
		{
			  $datos['buscar'] = $ci_usuario;
			  $datosusuario=$this->modelo_usuarios->obtener_usuarios($datos);
			  
			  foreach($datosusuario -> result() as $row)
			  {
			  
			  }
			  $tipousuario = $row->tipo;
			
			  if($tipousuario=="Administrador")
			  {
				 $this->load->view('vista_menu_principal_administrador');
			  }
			
			  if($tipousuario=="Vendedor")
			  {
				$this->load->view('vista_menu_principal_Vendedor');
			  }
			    if($tipousuario=="Productor")
			  {
				//$data['ci_usuario']=$ci_usuario;
				$this->load->view('vista_menu_principal_Productor');
			  }
			  
		}
		else
		{
				echo	'<script language="javascript"> ';
				echo	'alert("CI USUARIO O CONTRASENA INCORRECTOS");' ;
				echo	'</script>';
				$this->load->view('vista_ingresar_sistema_usuarios');
		}
	
	}
	
	
	
}
