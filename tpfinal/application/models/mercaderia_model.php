<?php defined('BASEPATH') OR exit('No direct script access allowed');

class mercaderia_model extends CI_Model {
  function __construct() {
    parent::__construct();
  }


  public function traerRopa() {
    $this->db->select("*");
    $this->db->from("mercaderia");
    $consulta = $this->db->get();
    $resultados = $consulta->result_array();
    return $resultados;
  }

  public function traerPorId($id) {
    $this->db->select("nombre, precio, descripcion");
    $this->db->from("mercaderia");
    $this->db->where("id", $id);
    $consulta = $this->db->get();
    $resultados = $consulta->result_array();
    return $resultados;
  }

  public function traerPantalones() {
    $this->db->select("*");
    $this->db->from("mercaderia");
    $this->db->where("tipo", "Pantalon");
    $consulta = $this->db->get();
    $resultados = $consulta->result_array();
    return $resultados;
  }

  public function traerShorts() {
    $this->db->select("*");
    $this->db->from("mercaderia");
    $this->db->where("tipo", "Short");
    $consulta = $this->db->get();
    $resultados = $consulta->result_array();
    return $resultados;
  }

  public function traerCamperas() {
    $this->db->select("*");
    $this->db->from("mercaderia");
    $this->db->where("tipo", "Campera");
    $consulta = $this->db->get();
    $resultados = $consulta->result_array();
    return $resultados;
  }

  public function cargarMercaderia($datosmercaderia) {
    $this->db->insert("mercaderia",
    array("nombre"=>$datosmercaderia["nombre"],
          "precio"=>$datosmercaderia["precio"],
          "tipo"=>$datosmercaderia["tipo"],
          "descripcion"=>$datosmercaderia["descripcion"],
          "imagen"=>$datosmercaderia["imagen"]));
  }

  function traerMercaderia() {
    $this->db->select("id, nombre, precio, tipo, descripcion");
    $this->db->from("mercaderia");
    $consulta = $this->db->get();
    $resultados = $consulta->result_array();
    return $resultados;
  }

  function eliminarMercaderia($id) {
    $this->db->where("id", $id);
    $this->db->delete("mercaderia");
  }

  function obtenerMercaderia($id) {
    $this->db->select("*");
    $this->db->from("mercaderia");
    $this->db->where("id", $id);
    $consulta = $this->db->get();
    $resultados = $consulta->result_array();
    return $resultados;
  }

  function editarMercaderia($id, $datosmercaderia) {
    $this->db->where("id", $id);
    $this->db->update("mercaderia", $datosmercaderia);
  }

}
