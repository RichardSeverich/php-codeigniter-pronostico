<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Modelo_ventas extends CI_Model
{
  function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  function registrar_ventas($datos)
  {
    $this->db->insert('ventas', array(
      'ci_cliente' => $datos['ci_cliente'],
      'ci_usuario' => $datos['ci_usuario'],
      'fecha_venta' => $datos['fecha']
    ));
  }

  function registrar_detalle($datos)
  {
    $this->db->insert('detalle', array(
      'id_venta' => $datos['id_venta'],
      'id_producto' => $datos['id_producto'],
      'cantidad' => $datos['cantidad']
    ));
  }

  function obtener_ventas($datos)
  {
    if ($datos) {
      $query = $this->db->like('ci_cliente', $datos['buscar']);
      $query = $this->db->get('ventas');
      if ($query->num_rows() > 0) {
        return $query;
      } else {
        return false;
      }
    } else {
      $query = $this->db->get('ventas');
      if ($query->num_rows() > 0) {
        return $query;
      } else {
        return false;
      }
    }
  }

  function obtener_detalle($datos)
  {
    $query = $this->db->get('detalle');
    if ($query->num_rows() > 0) {
      return $query;
    } else {
      return false;
    }
  }

  function obtener_ventas_ci_usuario($ci_usuario)
  {
    $this->db->where('ci_usuario', $ci_usuario);
    $query = $this->db->get('ventas');
    if ($query->num_rows() > 0) {
      return $query;
    } else {
      return false;
    }
  }

  function obtener_ventas_id_producto($id_producto)
  {
    $this->db->where('id_producto', $id_producto);
    $query = $this->db->get('detalle');
    if ($query->num_rows() > 0) {
      return $query;
    } else {
      return false;
    }
  }

  function obtener_ventas_ci_cliente($ci_cliente)
  {
    $this->db->where('ci_cliente', $ci_cliente);
    $query = $this->db->get('clientes');
    if ($query->num_rows() > 0) {
      return $query;
    } else {
      return false;
    }
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

  function eliminar_ventas($id_venta)
  {
    $this->db->where('id_venta', $id_venta);
    $this->db->delete('ventas');   //tabla
    $this->db->where('id_venta', $id_venta);
    $this->db->delete('detalle');   //tabla
  }
}
