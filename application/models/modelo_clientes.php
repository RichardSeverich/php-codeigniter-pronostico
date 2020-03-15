<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Modelo_clientes extends CI_Model
{
  function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  function registrar_clientes($datos)
  {
    $this->db->insert('usuarios', array(
      'ci_cliente' => $datos['ci_cliente'],
      'nombres' => $datos['nombres'],
      'apellidos' => $datos['apellidos'],
      'direccion' => $datos['direccion'],
      'telefono' => $datos['telefono']

    ));
  }

  function obtener_clientes($datos)
  {
    if ($datos) {
      $query = $this->db->like('ci_cliente', $datos['buscar']);
      $query = $this->db->get('clientes');
      if ($query->num_rows() > 0) {
        return $query;
      } else {
        return false;
      }
    } else {
      $query = $this->db->get('clientes');
      if ($query->num_rows() > 0) {
        return $query;
      } else {
        return false;
      }
    }
  }

  function buscar_cliente($ci_cliente)
  {
    $this->db->where('ci_cliente', $ci_cliente);
    $query = $this->db->get('clientes');
    if ($query->num_rows() > 0) {
      return $query;
    } else {
      return false;
    }
  }

  function modificar_usuario($ciusuario, $datos)
  {
    $data = array(
      'contrasena' => $datos['contrasena'],
      'tipo' => $datos['tipousuario'],
      'nombres' => $datos['nombres'],
      'apellidos' => $datos['apellidos'],
      'fechanacimiento' => $datos['fechanacimiento'],
      'direccion' => $datos['direccion'],
      'telefono' => $datos['telefono'],
      'email' => $datos['email']
    );
    $this->db->where('ciusuario', $ciusuario);
    $query = $this->db->update('usuarios', $data);
  }

  function eliminar_clientes($ci_cliente)
  {
    $this->db->where('ci_cliente', $ci_cliente);
    $this->db->delete('clientes');   //tabla

  }
}
