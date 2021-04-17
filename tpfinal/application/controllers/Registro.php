<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {
  function __construct() {
    parent::__construct();
    if ($this->session->userdata("email")) {
          redirect("../PanelDeControl");
    }
    $this->load->model("usuarios_model");
  }

  public function index() {
    $html = $this->load->view("registro", array(), true);
    $param["titulodepestaña"]= "Registro";
    $param["contenido"]= $html;
    $this->load->view("layout/layout", $param);
  }

  public function enviar() {

    $this->form_validation->set_rules("nombre", "Nombrevt", "required|regex_match[/^[A-Za-z]+$/]", array('required' => 'Este campo es obligatorio.', 'regex_match' => 'Su nombre sólo puede contener letras.'));

    $this->form_validation->set_rules("telefono", "Telefonovt", "integer|max_length[10]", array('integer' => 'Su teléfono sólo puede contener números.', 'max_length' => 'Su teléfono debe contener 10 números.'));

    $this->form_validation->set_rules("email", "Emailvt", "required|valid_email|is_unique[usuarios.email]", array('required' => 'Este campo es obligatorio.', 'valid_email' => 'Su email no cumple con el formato convencional.', 'is_unique' => 'Este email ya está registrado.'));

    $this->form_validation->set_rules("contraseña", "Contraseñavt", "required|min_length[5]", array('required' => 'Este campo es obligatorio.', 'min_length' => 'Su contraseña debe tener más de 4 caracteres.'));

    $this->form_validation->set_rules("confirmar", "Confirmarvt", "required|matches[contraseña]", array('required' => 'Este campo es obligatorio.', 'matches' => 'Las contraseñas no coinciden.'));


      if ($this->form_validation->run() == FALSE) {
        $html = $this->load->view("registro", array(), true);
        $param["titulodepestaña"]= "Registro";
        $param["contenido"]= $html;
        $this->load->view("layout/layout", $param);
      } else {
        $datosform = array('nombre' => $this->input->post('nombre'),
                           'telefono' => $this->input->post('telefono'),
                           'email' => $this->input->post('email'),
                           'contraseña' => password_hash($this->input->post('contraseña'), PASSWORD_BCRYPT));

        $this->usuarios_model->nuevoUsuario($datosform);
        $html = $this->load->view("exito", array(), true);
        $param["titulodepestaña"]= "Exito";
        $param["contenido"]= $html;
        $this->load->view("layout/layout", $param);
    }
  }
}
