<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto extends CI_Controller {
  function __construct() {
    parent::__construct();
  }

  public function index() {
    $html = $this->load->view("contacto", array(), true);
    $param["titulodepestaña"]= "Contacto";
    $param["contenido"]= $html;
    $this->load->view("layout/layout", $param);
  }

}
