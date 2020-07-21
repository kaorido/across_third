<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginmodel extends CI_Model {

    function check_user($username, $password) {
      $this->db->select('*');
      $this->db->from('tbl_users');
      $this->db->where('username', $username);
      $this->db->where('password', md5($password));
      $query = $this->db->get();
      return $query;
    }
}