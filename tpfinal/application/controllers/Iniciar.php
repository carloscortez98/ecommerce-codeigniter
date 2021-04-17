<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Iniciar extends CI_Controller {
  function __construct() {
    parent::__construct();
    if ($this->session->userdata("email")) {
          redirect("../PanelDeControl");
    }
    $this->load->model("usuarios_model");
  }

  public function index() {
    $html = $this->load->view("iniciar", array(), true);
    $param["titulodepestaña"]= "Iniciar Sesion";
    $param["contenido"]= $html;
    $this->load->view("layout/layout", $param);
  }

  public function enviar() {

    $this->form_validation->set_rules("email", "Vacioemail", "required", array('required' => 'Ingrese sus credenciales.'));

    $this->form_validation->set_rules("contraseña", "Vaciocontraseña", "required", array('required' => 'Ingrese sus credenciales.'));

    $email = $this->input->post("email");
    $usuario = $this->usuarios_model->consultarEmail($email);
    $contraseña = $this->input->post("contraseña");

    if (!$email == "") {
      if ($usuario) {
        if (password_verify($contraseña, $usuario[0]["contraseña"])) {
            foreach($usuario as $row){
                        $sess_array = array(
                            "nombre" => $usuario[0]["nombre"],
                            "apellido" => $usuario[0]["apellido"],
                            "telefono" => $usuario[0]["telefono"],
                            "email" => $usuario[0]["email"]);
                        $this->session->set_userdata($sess_array);
                    }
            redirect("../PanelDeControl");
        } else {
          echo "<h3>Datos incorrectos. Vuelva a ingresar su contraseña.</h3>";
          $html = $this->load->view("iniciar", array(), true);
          $param["titulodepestaña"]= "Iniciar Sesion";
          $param["contenido"]= $html;
          $this->load->view("layout/layout", $param);
        }
      } else {
        echo "<h3>Usted no está registrado.</h3>";
        $html = $this->load->view("iniciar", array(), true);
        $param["titulodepestaña"]= "Iniciar Sesion";
        $param["contenido"]= $html;
        $this->load->view("layout/layout", $param);
      }
    } else if ($this->form_validation->run() == FALSE) {
      $html = $this->load->view("iniciar", array(), true);
      $param["titulodepestaña"]= "Iniciar Sesion";
      $param["contenido"]= $html;
      $this->load->view("layout/layout", $param);
    }

  }

  public function enviarAjx() {

      $email = $this->input->post("email");
      $usuario = $this->usuarios_model->consultarEmail($email);
      $contraseña = $this->input->post("contraseña");


      if (!$email == "") {
        if ($usuario) {
          if (password_verify($contraseña, $usuario[0]["contraseña"])) {
            foreach($usuario as $row){
                        $sess_array = array(
                            "nombre" => $usuario[0]["nombre"],
                            "telefono" => $usuario[0]["telefono"],
                            "email" => $usuario[0]["email"],
                            "admin" => $usuario[0]["admin"]);
                        $this->session->set_userdata($sess_array);
                    }
            echo json_encode(array("Estado"=>"Ok", "Mensaje"=>""));
          } else {
            echo json_encode(array("Estado"=>"Incorrecto", "Mensaje"=>"Contraseña incorrecta."));
          }
        } else {
          echo json_encode(array("Estado"=>"Inexistente", "Mensaje"=>"Usted no está registrado."));
        }
      } else {
        echo json_encode(array("Estado"=>"Incompleto", "Mensaje"=>"Ingrese sus credenciales."));
      }
  }



}
