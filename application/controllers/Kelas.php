<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('Kelas_model');
    
    // Tambahkan ini
    if (!$this->session->userdata('username')) {
      redirect('auth');
    }
  }

  public function index() {
    $data['title'] = 'Data Kelas';
    $data['kelas'] = $this->Kelas_model->get_all();
    $this->load->view('kelas/index', $data);
  }

  public function tambah() {
    $data['title'] = 'Tambah Data Kelas';
    $this->load->view('kelas/tambah', $data);
  }

  public function simpan() {
    $data = [
      'nama_kelas' => $this->input->post('nama_kelas'),
      'kode_kelas' => $this->input->post('kode_kelas'),
    ];
    $this->Kelas_model->insert($data);
    redirect('kelas');
  }

  public function edit($id) {
    $data['title'] = 'Edit Data Kelas';
    $data['kelas'] = $this->Kelas_model->get_by_id($id);
    $this->load->view('kelas/edit', $data);
  }
  
  public function update($id) {
    $data = [
      'nama_kelas' => $this->input->post('nama_kelas'),
      'kode_kelas' => $this->input->post('kode_kelas')
    ];
    $this->Kelas_model->update($id, $data);
    redirect('kelas');
  }
  
  public function hapus($id) {
    $this->Kelas_model->delete($id);
    redirect('kelas');
  }
  
}
