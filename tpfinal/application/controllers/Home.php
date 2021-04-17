<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
  function __construct() {
    parent::__construct();
    $this->load->model("mercaderia_model");
  }

  public function index() {
    $mercaderia = $this->mercaderia_model->traerRopa();
    $parametros["mercaderia"] = $mercaderia;
    $html = $this->load->view("home", $parametros, true);
    $param["titulodepestaña"]= "Home";
    $param["contenido"]= $html;
    $this->load->view("layout/layout", $param);
  }

  public function detalle($id) {
    $mercaderiaid = $this->mercaderia_model->traerPorId($id);
    $parametros["mercaderiaid"] = $mercaderiaid;

    if ($mercaderiaid) {
      $html = $this->load->view("detalle", $parametros, true);
      $param["titulodepestaña"] = "Detalle";
      $param["contenido"] = $html;
      $this->load->view("layout/layout", $param);
    } else {
      redirect("../Home");
    }

  }

  public function pantalones() {
    $pantalones = $this->mercaderia_model->traerPantalones();
    $parametros["pantalones"] = $pantalones;
    $html = $this->load->view("secciones/pantalones", $parametros, true);
    $param["titulodepestaña"]= "Pantalones";
    $param["contenido"]= $html;
    $this->load->view("layout/layout", $param);
  }

  public function shorts() {
    $shorts = $this->mercaderia_model->traerShorts();
    $parametros["shorts"] = $shorts;
    $html = $this->load->view("secciones/shorts", $parametros, true);
    $param["titulodepestaña"]= "Shorts";
    $param["contenido"]= $html;
    $this->load->view("layout/layout", $param);
  }

  public function camperas() {
    $camperas = $this->mercaderia_model->traerCamperas();
    $parametros["camperas"] = $camperas;
    $html = $this->load->view("secciones/camperas", $parametros, true);
    $param["titulodepestaña"]= "Camperas";
    $param["contenido"]= $html;
    $this->load->view("layout/layout", $param);
  }

}
