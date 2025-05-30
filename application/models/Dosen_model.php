<?php
class Dosen_model extends CI_Model {

  public function get_all() {
    return $this->db->get('datadosen')->result();
  }

  public function insert($data) {
    return $this->db->insert('datadosen', $data);
  }

  public function get_by_id($id) {
    return $this->db->get_where('datadosen', ['id' => $id])->row();
  }

  public function update($id, $data) {
    return $this->db->where('id', $id)->update('datadosen', $data);
  }

  public function delete($id) {
    return $this->db->delete('datadosen', ['id' => $id]);
  }
}
