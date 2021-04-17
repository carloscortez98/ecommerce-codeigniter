<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Mercaderia extends CI_Controller {
  function __construct() {
    parent::__construct();
    $this->load->model("usuarios_model");
    if (!$this->session->userdata("admin")) {
          redirect("../Home");
    }
    $this->load->model("mercaderia_model");
  }


  public function index() {
    $mercaderia = $this->mercaderia_model->traerMercaderia();
    $parametros["mercaderia"] = $mercaderia;

    $html = $this->load->view("administrar", $parametros, true);
    $param["titulodepestaña"]= "Administrar Mercaderia";
    $param["contenido"]= $html;
    $this->load->view("layout/layout", $param);
  }

  public function cargar() {

    $this->form_validation->set_rules("nombre", "Nombrevt", "required|regex_match[/^[A-Za-z\s]+$/]", array('required' => 'Este campo es obligatorio.', 'regex_match' => 'El nombre sólo puede contener letras.'));
    $this->form_validation->set_rules("precio", "Preciovt", "required|integer", array('required' => 'Este campo es obligatorio.', 'integer' => 'El precio sólo debe contener números.'));
    $this->form_validation->set_rules("tipo", "Tipovt", "required|in_list[Pantalon,Short,Campera]", array('required' => 'Este campo es obligatorio.', 'in_list' => 'Debe seleccionar un elemento de la lista.'));
    $this->form_validation->set_rules("descripcion", "Descripcionvt", "required", array('required' => 'Este campo es obligatorio.'));

    // $this->form_validation->set_rules("imagen", "Imagenvt", "required", array('required' => 'Debe cargar una imagen.'));

      if ($this->form_validation->run() == FALSE) {

        $html = $this->load->view("cargar", array(), true);
        $param["titulodepestaña"]= "Cargar Mercaderia";
        $param["contenido"]= $html;
        $this->load->view("layout/layout", $param);

      } else {

        $datosmercaderia = array('nombre' => $this->input->post('nombre'),
                             'precio' => $this->input->post('precio'),
                             'tipo' => $this->input->post('tipo'),
                             'descripcion' => $this->input->post('descripcion'),
                             'imagen' => $this->input->post('imagen'));


        $this->mercaderia_model->cargarMercaderia($datosmercaderia);
        $html = $this->load->view("exito", array(), true);
        $param["titulodepestaña"]= "Exito";
        $param["contenido"]= $html;
        $this->load->view("layout/layout", $param);

      }
  }

  public function eliminar($id) {
    $eliminar = $this->mercaderia_model->eliminarMercaderia($id);

    if ($eliminar) {
      $html = $this->load->view("exito", array(), true);
      $param["titulodepestaña"]= "Exito";
      $param["contenido"]= $html;
      $this->load->view("layout/layout", $param);
    } else {
      redirect("../Mercaderia");
    }
  }

  public function editar($id) {
    $obtenerMercaderia = $this->mercaderia_model->obtenerMercaderia($id);

    if ($obtenerMercaderia) {
      foreach ($obtenerMercaderia as $row) {
        $nombre = $obtenerMercaderia[0]["nombre"];
        $precio = $obtenerMercaderia[0]["precio"];
        $tipo = $obtenerMercaderia[0]["tipo"];
        $descripcion = $obtenerMercaderia[0]["descripcion"];
      }

      $datosmercaderia = array(
                              'id' => $id,
                              'nombre' => $nombre,
                              'precio' => $precio,
                              'tipo' => $tipo,
                              'descripcion' => $descripcion);

      $html = $this->load->view("editar", $datosmercaderia, true);
      $param["titulodepestaña"]= "Editar Mercaderia";
      $param["contenido"]= $html;
      $this->load->view("layout/layout", $param);
    } else {
      redirect("../Mercaderia");
    }

  }

  public function guardar($id) {
    
    $this->form_validation->set_rules("nombre", "Nombrevt", "required|regex_match[/^[A-Za-z\s]+$/]", array('required' => 'Este campo es obligatorio.', 'regex_match' => 'El nombre sólo puede contener letras.'));
    $this->form_validation->set_rules("precio", "Preciovt", "required|integer", array('required' => 'Este campo es obligatorio.', 'integer' => 'El precio sólo debe contener números.'));
    $this->form_validation->set_rules("tipo", "Tipovt", "required|in_list[Pantalon,Short,Campera]", array('required' => 'Este campo es obligatorio.', 'in_list' => 'Debe seleccionar un elemento de la lista.'));
    $this->form_validation->set_rules("descripcion", "Descripcionvt", "required", array('required' => 'Este campo es obligatorio.'));

      if ($this->form_validation->run() == FALSE) {

        $html = $this->load->view("editar", array(), true);
        $param["titulodepestaña"]= "Editar Mercaderia";
        $param["contenido"]= $html;
        $this->load->view("layout/layout", $param);

      } else {

        $datosmercaderia = array(
          "nombre" => $this->input->post("nombre"),
          "precio" => $this->input->post("precio"),
          "tipo" => $this->input->post("tipo"),
          "descripcion" => $this->input->post("descripcion"));

          $this->mercaderia_model->editarMercaderia($id, $datosmercaderia);
          redirect("../Mercaderia");

      }
  }

}
