<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('User_model');
  }

  public function index() {
    $this->load->view('auth/login');
  }

  public function register() {
    $this->load->view('auth/register');
  }

  public function login() {
    $username = $this->input->post('username');
    $password = md5($this->input->post('password'));
  
    $user = $this->User_model->cek_login($username, $password);
  
    if ($user) {
      $this->session->set_userdata('username', $username);
      redirect('dashboard');
    } else {
      $data['error'] = 'Username atau password salah!';
      $this->load->view('auth/login', $data);
    }
  }  

  public function proses_register() {
    $data = [
      'username' => $this->input->post('username'),
      'password' => md5($this->input->post('password'))
    ];
    $this->User_model->insert_user($data);
    redirect('auth');
  }

  public function logout() {
    $this->session->sess_destroy();
    redirect('auth');
  }  
}
