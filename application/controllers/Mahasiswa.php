<?php
class Mahasiswa extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('Mahasiswa_model');
    if (!$this->session->userdata('username')) {
      redirect('auth');
    }
  }

  public function index() {
    $data['title'] = 'Data Mahasiswa';
    $data['mahasiswa'] = $this->Mahasiswa_model->get_all();
    $this->load->view('mahasiswa/index', $data);
  }

  public function tambah() {
    $data['title'] = 'Tambah Data Mahasiswa';
    $this->load->view('mahasiswa/tambah', $data);
  }

  public function simpan() {
    $data = [
      'nama' => $this->input->post('nama'),
      'npm' => $this->input->post('npm'),
      'prodi' => $this->input->post('prodi'),
      'alamat' => $this->input->post('alamat'),
      'email' => $this->input->post('email'),
    ];
    $this->Mahasiswa_model->insert($data);
    redirect('mahasiswa');
  }

  public function edit($id) {
    $data['title'] = 'Edit Data Mahasiswa';
    $data['mahasiswa'] = $this->Mahasiswa_model->get_by_id($id);
    $this->load->view('mahasiswa/edit', $data);
  } 

  public function update($id) {
    $data = [
      'nama' => $this->input->post('nama'),
      'npm' => $this->input->post('npm'),
      'prodi' => $this->input->post('prodi'),
      'alamat' => $this->input->post('alamat'),
      'email' => $this->input->post('email'),
    ];
    $this->Mahasiswa_model->update($id, $data);
    redirect('mahasiswa');
  }

  public function hapus($id) {
    $this->Mahasiswa_model->delete($id);
    redirect('mahasiswa');
  }
}
