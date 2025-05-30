<?php
class User_model extends CI_Model {
  public function cek_login($username, $password) {
    return $this->db->get_where('users', [
      'username' => $username,
      'password' => $password
    ])->row();
  }

  public function insert_user($data) {
    return $this->db->insert('users', $data);
  }

  public function get_by_username($username) {
    return $this->db->get_where('users', ['username' => $username])->row();
  }
  
}
