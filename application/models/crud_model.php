<?php
  class Crud_model extends CI_Model
  {
    public function __construct(){
      $this->load->database();
    }

    public function create_trailer(){
      $data = array(
        'titulo' => $this->input->post('titulo'),
        'genero' => $this->input->post('genero'),
        'director' => $this->input->post('director'),
        'estreno' => $this->input->post('cdate'),
        'portada' => $this->input->post('portada'),
        'link' => $this->input->post('url'),
        'descripcion' => $this->input->post('descripcion'),
      );

      return $this->db->insert('plan', $data);
    }

    public function read_trailer(){
      $titulo = $this->input->post('busqueda');
      $query = $this->db->get_where('plan', array('titulo' => $titulo));
      return $query->row_array();
    }

    public function update_trailer(){
      $data = array(
        'titulo' => $this->input->post('titulo'),
        'genero' => $this->input->post('genero'),
        'director' => $this->input->post('director'),
        'estreno' => $this->input->post('cdate'),
        'portada' => $this->input->post('portada'),
        'link' => $this->input->post('url'),
        'descripcion' => $this->input->post('descripcion'),
      );
      $this->db->where('id', $this->input->post('id'));
      return $this->db->update('plan', $data);
    }

    public function get_trailer(){
      return $this->db->query('SELECT * FROM plan')->result();
    }

    public function get_trailer_by_id($id){
      return $this->db->query('SELECT * FROM plan WHERE `id` ='.$id)->result();
    }

    public function delete_trailer($id){
      $this->db->where('id', $id);
      $this->db->delete('plan');
      return true;
    }

  }

 ?>
