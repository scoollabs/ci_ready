<?php

class User_model extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  function find_all() {
    return $this->db->get('users')->result();
  }

  function read($id) {
    return $this->db->get_where('users', array('id' => $id))->row();
  }

  function read_by_email_and_password($email, $password) {
    $this->db->where('email', $email);
    $user = $this->db->get('users')->row();
    if ($user && password_valid_email($password, $user->password)) {
      return $user;
    }
    return null;
  }

  function save($user) {
    $this->db->insert('users', $user);
  }

  function update($user, $id) {
    $this->db->update('users', $user, array('id' => $id));
  }

  function delete($id) {
    $this->db->delete('users', array('id' => $id));
  }

}
