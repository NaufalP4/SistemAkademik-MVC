<?php
class Dashboard extends CI_Controller {

  public function __construct() {
    parent::__construct();
    if (!$this->session->userdata('username')) {
      redirect('auth');
    }
  }
  
  public function index() {
    $data['title'] = 'Dashboard';
    $data['total_dosen'] = $this->db->count_all('datadosen');
    $data['total_mahasiswa'] = $this->db->count_all('datamahasiswa');
    $data['total_kelas'] = $this->db->count_all('datakelas');
    $data['total_matakuliah'] = $this->db->count_all('datamatakuliah');
    $this->load->view('dashboard/index', $data);
  }
}
