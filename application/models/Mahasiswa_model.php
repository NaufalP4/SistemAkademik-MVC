<?php
class Mahasiswa_model extends CI_Model {

  public function get_all() {
    return $this->db->get('datamahasiswa')->result();
  }

  public function insert($data) {
    return $this->db->insert('datamahasiswa', $data);
  }

  public function get_by_id($id) {
    return $this->db->get_where('datamahasiswa', ['id' => $id])->row();
  }

  public function update($id, $data) {
    return $this->db->where('id', $id)->update('datamahasiswa', $data);
  }

  public function delete($id) {
    return $this->db->where('id', $id)->delete('datamahasiswa');
  }
}
