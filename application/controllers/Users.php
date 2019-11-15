<?php
class Users extends CI_Controller
{
  public function login()
  {
    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');

    if ($this->form_validation->run() === FALSE) {
      $this->load->view('home/admin/devlegend-admin');
    }else {
      //get username
      $username = $this->input->post('username');
      $password = $this->input->post('password');

      //login user
      $user_id = $this->User_model->login($username, $password);

      if ($user_id) {
          //create session
          $user_data = array(
            'user_id' => $user_id,
            'username'=> $username,
            'logged_in' => true
          );

          $this->session->set_userdata($user_data);
          redirect('Home/admin/admin-home');
      }else{
        $this->session->set_flashdata('login_failed','Los datos son invalidos');

        redirect('Home/admin/devlegend-admin');
      }
    }
  }

  public function logout(){
    //unset user data
    $this->session->unset_userdata('logged_in');
    $this->session->unset_userdata('user_id');
    $this->session->unset_userdata('username');

    redirect('Home/admin/devlegend-admin');
  }
}


 ?>
