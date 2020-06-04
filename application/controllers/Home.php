<?php

class Home extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->load->model('user_model');
  }

  function login() {
    $data['message'] = '';
    if ($this->input->post()) {
      list($email, $password) = login_form();
      $user = $this->user_model->read_by_email_and_password($email, $password);
      if ($user) {
        session('user_id', $user->id);
        redirect('dashboard');
      } else {
        $data['message'] = 'Invalid username or password. Please try again!';
      }
    }
    $this->load->view(get_theme() . '/home/login', $data);
  }

}
