<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Ver extends CI_Controller {
  function __construct() {
    parent::__construct();
    $this->load->model("usuarios_model");
    if (!$this->session->userdata("admin")) {
          redirect("../Home");
    }
  }

  public function index() {
    $usuarios = $this->usuarios_model->traerUsuarios();
    $parametros["usuarios"] = $usuarios; 

    $html = $this->load->view("ver", $parametros, true);
    $param["titulodepestaña"]= "Ver Usuarios";
    $param["contenido"]= $html;
    $this->load->view("layout/layout", $param);
  }


}
