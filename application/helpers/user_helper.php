<?php

function login_form() {
  $obj = &get_instance();
  return array(
    $obj->input->post('email'),
    $obj->input->post('password'),
  );
}

function user_form() {
  $obj = &get_instance();
  return array(
    'email' => $obj->input->post('email'),
    'password' => $obj->input->post('password'),
  );
}

function user_form_validate() {
  $obj = &get_instance();
  $obj->form_validation->set_rules('email', 'Email', 'required');
  $obj->form_validation->set_rules('password', 'Password', 'required');
}
