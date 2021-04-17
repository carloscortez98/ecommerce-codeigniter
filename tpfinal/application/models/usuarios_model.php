<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {
  function __construct() {
    parent::__construct();
  }

  function nuevoUsuario($datosform) {
    $this->db->insert("usuarios",
    array("nombre"=>$datosform["nombre"],
          "telefono"=>$datosform["telefono"],
          "email"=>$datosform["email"],
          "contraseña"=>$datosform["contraseña"]));
  }

  function consultaUsuario($email, $contraseña) {
    $this->db->select("*");
    $this->db->from("usuarios");
    $this->db->where("email", $email);
    $this->db->where("contraseña", $contraseña);
    $consulta = $this->db->get();
    $resultados = $consulta->result_array();
    return $resultados;
  }

  function consultarEmail($email) {
    $this->db->select("*");
    $this->db->from("usuarios");
    $this->db->where("email", $email);
    $consulta = $this->db->get();
    $resultados = $consulta->result_array();
    return $resultados;
  }

  function traerUsuarios() {
    $this->db->select("id, nombre, email, telefono");
    $this->db->from("usuarios");
    $consulta = $this->db->get();
    $resultados = $consulta->result_array();
    return $resultados;
  }

}
