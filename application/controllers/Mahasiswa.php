<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Model_mahasiswa');
        $this->load->helper('url');
        $this->load->library('session');
    }

    public function index() {
        $this->load->view('form_mahasiswa');
    }

    public function save() {
        $data = array(
            'nim' => $this->input->post('nim'),
            'nama' => $this->input->post('nama'),
            'kelas' => $this->input->post('kelas'),
            'prodi' => $this->input->post('prodi'),
            'email' => $this->input->post('email')
        );

        $insert = $this->Model_mahasiswa->insert_mahasiswa($data);

        if ($insert) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan.');
            redirect('mahasiswa/tampil');
        } else {
            $this->session->set_flashdata('error', 'Terjadi kesalahan saat menyimpan data.');
            redirect('mahasiswa');
        }
    }

    public function tampil() {
        $data['mahasiswa'] = $this->Model_mahasiswa->ambil_data_mahasiswa();
        $this->load->view('tampil_mahasiswa', $data);
    }

    public function hapus($nim) {
        $delete = $this->Model_mahasiswa->delete_mahasiswa($nim);

        if ($delete) {
            $this->session->set_flashdata('success', 'Data berhasil dihapus.');
        } else {
            $this->session->set_flashdata('error', 'Terjadi kesalahan saat menghapus data.');
        }

        redirect('mahasiswa/tampil');
    }
}
?>
