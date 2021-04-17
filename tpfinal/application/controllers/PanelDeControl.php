<?php defined('BASEPATH') OR exit('No direct script access allowed');

class PanelDeControl extends CI_Controller {
  function __construct() {
    parent::__construct();
    if (!$this->session->userdata("email")) {
          redirect("../Iniciar");
    }
  }

  public function index() {
    $html = $this->load->view("panel", array(), true);
    $param["titulodepestaña"]= "Panel de Control";
    $param["contenido"]= $html;
    $this->load->view("layout/layout", $param);
  }

  public function cerrar() {
    $this->session->sess_destroy();
    redirect("../Iniciar");
  }

}
