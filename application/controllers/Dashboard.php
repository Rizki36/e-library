<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function index()
    {
        $data['anggota_count'] = $this->db->count_all('anggota');
        $data['buku_count'] = $this->db->count_all('buku');
        $data['rak_count'] = $this->db->count_all('rak');
        $data['pengarang_count'] = $this->db->count_all('pengarang');
        $data['penerbit_count'] = $this->db->count_all('penerbit');

        $this->load->view('templates/header');
        $this->load->view('pages/dashboard/index',$data);
        $this->load->view('templates/footer');
    }
}