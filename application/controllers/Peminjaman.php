<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman extends CI_Controller {
    public function index()
    {
        $data['peminjamans'] = $this->db
                                    ->select('
                                            a.id as anggota_id,
                                            a.nama as anggota_nama,
                                            b.id as buku_id,
                                            b.judul_buku as buku_judul_buku,
                                            p.is_kembali
                                            ')
                                    ->from('peminjaman as p')
                                    ->join('anggota as a','a.id = p.anggota_id')
                                    ->join('buku as b','b.id = p.buku_id')
                                    ->get()
                                    ->result();
        $data['anggotas'] = $this->db->select('id,nama')->get('anggota')->result();
        $data['bukus'] = $this->db->select('id,judul_buku')->get('buku')->result();
        $this->load->view('templates/header');
        $this->load->view('pages/peminjaman/index',$data);
        $this->load->view('templates/footer');
    }

    public function store()
    {
        $peminjaman['anggota_id'] = $this->input->post('anggota_id');
        $peminjaman['buku_id'] = $this->input->post('buku_id');
        $peminjaman['is_kembali'] = 0;

        $this->db->insert('peminjaman',$peminjaman);
        $this->is_store_success();
    }

    public function kembalikan($anggota_id,$buku_id)
    {
        $peminjaman['is_kembali'] = 1;
        $this->db
                ->where('anggota_id',(string)$anggota_id)
                ->where('buku_id',(string)$buku_id)
                ->update('peminjaman',$peminjaman);
        $this->is_kembalikan_success();
    }

    
    public function is_store_success()
    {
        if ($this->db->affected_rows() > 0) 
            $this->session->set_flashdata('success','Buku berhasil dipinjam!');
        else
            $this->session->set_flashdata('error','Buku gagal dipinjam!');
        redirect('peminjaman');
    }

    public function is_kembalikan_success()
    {
        if ($this->db->affected_rows() > 0) 
            $this->session->set_flashdata('success','Buku berhasil dikembalikan!');
        else
            $this->session->set_flashdata('error','Buku gagal dikembalikan!');
        redirect('peminjaman');
    }
}