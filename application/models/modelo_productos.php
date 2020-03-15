<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Modelo_productos extends CI_Model
{
  function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  function registrar_producto($datos)
  {
    $this->db->insert('productos', array(
      'nombre' => $datos['nombre'],
      'tipo' => $datos['tipo'],
      'medida' => $datos['medida'],
      'stock' => $datos['stock'],
      'precio' => $datos['precio']
    ));
  }

  function obtener_productos($datos)
  {
    if ($datos) {
      $query = $this->db->like('medida', $datos['buscar']);
      $query = $this->db->get('productos');
      if ($query->num_rows() > 0) {
        return $query;
      } else {
        return false;
      }
    } else {
      $query = $this->db->get('productos');
      if ($query->num_rows() > 0) {
        return $query;
      } else {
        return false;
      }
    }
  }

  function buscar_producto($id_producto)
  {
    $this->db->where('id_producto', $id_producto);
    $query = $this->db->get('productos');
    if ($query->num_rows() > 0) {
      return $query;
    } else {
      return false;
    }
  }

  function modificar_stock($id_producto, $cantida_stock_nueva)
  {
    $data = array(
      'stock' => $cantida_stock_nueva
    );
    $this->db->where('id_producto', $id_producto);
    $query = $this->db->update('productos', $data);
  }

  function buscar_usuario_contrasena($ciusuario, $contrasena)
  {
    $this->db->where('ciusuario', $ciusuario);
    $this->db->where('contrasena', $contrasena);
    $query = $this->db->get('usuarios');

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

  function eliminar_productos($id_producto)
  {
    $this->db->where('id_producto', $id_producto);
    $this->db->delete('productos');   //tabla
  }
}
