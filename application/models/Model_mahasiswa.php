<?php
class Model_mahasiswa extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function insert_mahasiswa($data) {
        return $this->db->insert('data_mahasiswa', $data);
    }

    public function ambil_data_mahasiswa() {
        $query = $this->db->get('data_mahasiswa');
        return $query->result(); 
    }

    public function delete_mahasiswa($nim) {
        $this->db->where('nim', $nim);
        return $this->db->delete('data_mahasiswa');
    }
}
?>
