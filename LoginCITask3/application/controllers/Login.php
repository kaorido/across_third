<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
  public function __construct() {
    parent::__construct();
    $this->load->model('Loginmodel'); 
  }

	public function index()
	{
		$this->load->view('Loginview');
  }

function auth() {
  $username  = $this->input->post('username',TRUE);
  $password  = $this->input->post('password',TRUE);
  $result    = $this->Loginmodel->check_user($username, $password);
  if($result->num_rows() > 0) {
    $data  = $result->row_array();
    $name  = $data['username'];
    $email = $data['email'];
    $level = $data['level'];
    $sesdata = array(
      'username'  => $username,
      'email'     => $email,
      'level'     => $level,
      'logged_in' => TRUE
    );
    $this->session->set_userdata($sesdata);
    if($level === '1') {
      redirect('Admin');
    } elseif($level === '2') {
      redirect('Projleader');
    } else {
      redirect('Staff');
    }
    } else {
      echo "<script>alert('access denied');history.go(-1);</script>>";
    }
    $this->load->view('Loginview');
  }
  
  function Logout() {
    $this->session->sess_destroy();
    redirect('Login');
  }
}