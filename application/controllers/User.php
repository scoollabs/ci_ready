<?php

class User extends CI_Controller {

  function __construct() {
    parent::__construct();
  }

  function dashboard() {
    $this->layout->view('user/dashboard');
  }

}
