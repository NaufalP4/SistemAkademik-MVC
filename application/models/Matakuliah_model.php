<?php
class Matakuliah_model extends CI_Model {

  public function get_all() {
    return $this->db->get('datamatakuliah')->result();
  }

  public function insert($data) {
    return $this->db->insert('datamatakuliah', $data);
  }

  public function get_by_id($id) {
    return $this->db->get_where('datamatakuliah', ['id' => $id])->row();
  }

  public function update($id, $data) {
    return $this->db->where('id', $id)->update('datamatakuliah', $data);
  }

  public function delete($id) {
    return $this->db->where('id', $id)->delete('datamatakuliah');
  }
}
