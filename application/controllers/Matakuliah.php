<?php
class Matakuliah extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('Matakuliah_model');
    
    // Tambahkan ini
    if (!$this->session->userdata('username')) {
      redirect('auth');
    }
  }

  public function index() {
    $data['title'] = 'Data Mata Kuliah';
    $data['matakuliah'] = $this->Matakuliah_model->get_all();
    $this->load->view('matakuliah/index', $data);
  }

  public function tambah() {
    $data['title'] = 'Tambah Data Mata Kuliah';
    $this->load->view('matakuliah/tambah', $data);
  }

  public function simpan() {
    $data = [
      'nama_mata_kuliah' => $this->input->post('nama_mata_kuliah'),
      'kode_matkul' => $this->input->post('kode_matkul'),
    ];
    $this->Matakuliah_model->insert($data);
    redirect('matakuliah');
  }

  public function edit($id) {
    $data['title'] = 'Edit Data Mata Kuliah';
    $data['matakuliah'] = $this->Matakuliah_model->get_by_id($id);
    $this->load->view('matakuliah/edit', $data);
  }

  public function update($id) {
    $data = [
      'nama_mata_kuliah' => $this->input->post('nama_mata_kuliah'),
      'kode_matkul' => $this->input->post('kode_matkul'),
    ];
    $this->Matakuliah_model->update($id, $data);
    redirect('matakuliah');
  }

  public function hapus($id) {
    $this->Matakuliah_model->delete($id);
    redirect('matakuliah');
  }
}
