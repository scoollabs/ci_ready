<?php

class Test extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->load->model('user_model');
  }

  function a() {
    $user = array('email' => 'a', 'password' => password_hash('a', PASSWORD_DEFAULT));
    $this->user_model->save($user);
  }

}
