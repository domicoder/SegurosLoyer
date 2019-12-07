<?php
  class Home extends CI_Controller
  {
    public function view($page = 'main')
    {
      if (!file_exists(APPPATH.'views/pages/'.$page.".php")) {
        show_404();
      }

      $this->load->model('Crud_model');
      $services = $this->Crud_model->get_trailer();

      $this->load->view('templates/header');
      $this->load->view('pages/'.$page, compact("services"));
      $this->load->view('templates/footer');

    }

    public function admin($page)
    {
      if ($page != 'login-admin' && !$this->session->userdata('logged_in')) {
        redirect('admin');
      }
      if (!file_exists(APPPATH.'views/admin/'.$page.".php")) {
        show_404();
      }
      if ($page === 'login-admin') {
        $this->load->view('admin/'.$page);
      }else {
        $this->load->view('templates/header-admin');
        $this->load->view('admin/'.$page);
        $this->load->view('templates/footer-admin');
      }
    }

    public function services(){
      $this->load->model('Crud_model');
      $services = $this->Crud_model->get_trailer();

      $this->load->view('pages/services', compact("services"));
    }

    public function cotizacion(){
      $this->load->model('Crud_model');
      $services = $this->Crud_model->get_trailer();

      $this->load->view('pages/cotizacion', compact("services"));
    }

    public function nosotros(){
      $datos['title'] = "NOSOTROS";
      $this->load->view('pages/nosotros', $datos);
      $this->load->view('templates/footer');
    }

    public function contacto(){
      $datos['title'] = "CONTACTO";
      $this->load->view('pages/contacto', $datos);
      $this->load->view('templates/footer');
    }

    public function servicesDetails(){

      $id = $this->uri->segment(2);

      $this->load->model('Crud_model');
      $service = $this->Crud_model->get_trailer_by_id($id);

      $this->load->view('pages/service-details', compact("service"));
      $this->load->view('templates/footer');
    }

  }

 ?>
