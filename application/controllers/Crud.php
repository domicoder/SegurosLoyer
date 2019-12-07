<?php

class Crud extends CI_Controller
{
  public function borrar($page =''){
    if ($page != 'login-admin' && !$this->session->userdata('logged_in')) {
      redirect('Home/admin/login-admin');
    }

    $data['trailer'] = null;
    $this->load->view('templates/header-admin');
    $this->load->view('admin/admin-eliminar', $data);
    $this->load->view('templates/footer-admin');
  }

  public function create($page = ''){
    if ($page != 'login-admin' && !$this->session->userdata('logged_in')) {
      redirect('Home/admin/login-admin');
    }

    $this->form_validation->set_rules('titulo', 'Titulo', 'required');
    $this->form_validation->set_rules('genero', 'Genero', 'required');
    $this->form_validation->set_rules('director', 'Director', 'required');
    $this->form_validation->set_rules('cdate', 'Cdate', 'required');
    $this->form_validation->set_rules('url', 'Url', 'required');
    $this->form_validation->set_rules('descripcion', 'Descripcion', 'required');

    if ($this->form_validation->run() === FALSE) {
      $this->load->view('templates/header-admin');
      $this->load->view('admin/admin-create');
      $this->load->view('templates/footer-admin');
    }else{
      $this->Crud_model->create_trailer();
      $this->session->set_flashdata('creation_success','Los datos del plan fueron insertados.');
      redirect('crud/create/admin-create');
    }

  }

  public function edit($id = null){
    $data['trailer'] = null;
    $this->load->view('templates/header-admin');
    $this->load->view('admin/admin-modificar', $data);
    $this->load->view('templates/footer-admin');
  }

  public function read(){
    $data['trailer'] = null;
    
    $this->load->view('templates/header-admin');
    $this->load->view('admin/admin-buscar', $data);
    $this->load->view('templates/footer-admin');
  }

  public function update(){
    $this->Crud_model->update_trailer();
    redirect('crud/edit');
  }

  

  public function buscar($page =''){
    if ($page != 'login-admin' && !$this->session->userdata('logged_in')) {
      redirect('Home/admin/login-admin');
    }
    $this->form_validation->set_rules('busqueda', 'Busqueda', 'required');
    if ($this->form_validation->run() === FALSE) {
      $this->load->view('templates/header-admin');
      $this->load->view('admin/'.$page);
      $this->load->view('templates/footer-admin');
    }else {
      $datos['trailer'] = $this->Crud_model->read_trailer();
    }
    $this->load->view('templates/header-admin');
    $this->load->view('admin/'.$page, $datos);
    $this->load->view('templates/footer-admin');
  }

  public function delete($id){
    $this->Crud_model->delete_trailer($id);
    redirect('crud/borrar');
  }

}


 ?>
