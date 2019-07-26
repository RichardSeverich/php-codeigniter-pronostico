<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Modelo_usuarios extends CI_Model
	{
			function __construct()
			{
				parent:: __construct();
				$this -> load -> database();
			}
			
			function registrar_usuario($datos)
			{
				
				$this -> db->insert('usuarios',array('ci_usuario' => $datos['ci_usuario'],
													 'contrasena' => $datos['contrasena'], 
													 'tipo' => $datos['tipousuario'],
													 'nombres' => $datos['nombres'],
													 'apellidos' => $datos['apellidos'],
													 'fechanacimiento' => $datos['fechanacimiento'], 
													 'direccion' => $datos['direccion'], 
													 'telefono' => $datos['telefono'],
													 'email' => $datos['email'] 

													 ));
			}

			function obtener_usuarios($datos)
			{
				
				if($datos)
				{
					$query = $this ->db->like('ci_usuario',$datos['buscar']);
					$query = $this ->db->get('usuarios');
					if($query->num_rows() > 0) 
					{
						return $query;
					}
					else
					{
						return false;
					}
				}
				else
				{
					$query = $this ->db->get('usuarios');
					if($query->num_rows() > 0) 
					{
						return $query;
					}
					else
					{
						return false;
					}
				}
			}
			
			function buscar_usuario($ci_usuario)
			{
				
					
					$this ->db->where('ci_usuario',$ci_usuario);
					
					$query = $this ->db->get('usuarios');
					
					if($query->num_rows() > 0) 
					{
						return $query;
					}
					else
					{
						return false;
					}
				
			}
		
			function buscar_usuario_contrasena($ci_usuario,$contrasena)
			{
				
					
					$this ->db->where('ci_usuario',$ci_usuario);
					$this ->db->where('contrasena',$contrasena);
					$query = $this ->db->get('usuarios');

					if($query->num_rows() > 0) 
					{
						return $query;
					}
					else
					{
						return false;
					}
				
			}
			
			function modificar_usuario($ci_usuario,$datos)
			{
				$data = array
				(
						'contrasena' => $datos['contrasena'], 
					    'tipo' => $datos['tipousuario'],
						'nombres' => $datos['nombres'],
						'apellidos' => $datos['apellidos'], 
						'fechanacimiento' => $datos['fechanacimiento'], 
						'direccion' => $datos['direccion'], 
						'telefono' => $datos['telefono'],
						'email' => $datos['email'] 
				);
				$this -> db->where('ci_usuario',$ci_usuario);
				$query = $this -> db -> update('usuarios',$data);
			}
			
			function eliminar_usuario($ci_usuario)
			{
				$this->db->where('ci_usuario',$ci_usuario);
				$this->db->delete('usuarios');   //tabla

			}
			
			
	}
	
	
	
?>
	