<?php
class Dosen extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('Dosen_model');
    if (!$this->session->userdata('username')) {
      redirect('auth');
    }
  }

  public function index() {
    $data['title'] = 'Data Dosen';
    $data['dosen'] = $this->Dosen_model->get_all();
    $this->load->view('dosen/index', $data);
  }

  public function tambah() {
    $data['title'] = 'Tambah Data Dosen';
    $this->load->view('dosen/tambah', $data);
  }

  public function simpan() {
    $data = [
      'nama' => $this->input->post('nama'),
      'nidn' => $this->input->post('nidn'),
      'nik' => $this->input->post('nik'),
      'email' => $this->input->post('email'),
    ];
    $this->Dosen_model->insert($data);
    redirect('dosen');
  }

  public function edit($id) {
    $data['title'] = 'Edit Data Dosen';
    $data['dosen'] = $this->Dosen_model->get_by_id($id);
    $this->load->view('dosen/edit', $data);
  }

  public function update($id) {
    $data = [
      'nama' => $this->input->post('nama'),
      'nidn' => $this->input->post('nidn'),
      'nik' => $this->input->post('nik'),
      'email' => $this->input->post('email'),
    ];
    $this->Dosen_model->update($id, $data);
    redirect('dosen');
  }

  public function hapus($id) {
    $this->Dosen_model->delete($id);
    redirect('dosen');
  }
}
