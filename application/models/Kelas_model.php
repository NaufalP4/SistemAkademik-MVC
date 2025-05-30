<?php
class Kelas_model extends CI_Model {

  public function get_all() {
    return $this->db->get('datakelas')->result();
  }

  public function insert($data) {
    return $this->db->insert('datakelas', $data);
  }

  public function get_by_id($id) {
    return $this->db->get_where('datakelas', ['id' => $id])->row();
  }
  
  public function update($id, $data) {
    return $this->db->where('id', $id)->update('datakelas', $data);
  }
  
  public function delete($id) {
    return $this->db->delete('datakelas', ['id' => $id]);
  }
}
