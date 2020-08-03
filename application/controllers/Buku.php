<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class buku extends CI_Controller {
    public function index()
    {
        $data['bukus'] = $this->db
                            ->select('
                                    buku.id,
                                    buku.judul_buku,
                                    buku.tahun_buku,
                                    buku.jumlah_buku,
                                    penerbit.nama_penerbit as penerbit,
                                    pengarang.nama_pengarang as pengarang,
                                    rak.lokasi as rak,
                                    tanggal_pengadaan
                                    ')
                            ->from('buku')
                            ->join('penerbit','penerbit.id = buku.penerbit_id')
                            ->join('pengarang','pengarang.id = buku.pengarang_id')
                            ->join('rak','rak.id = buku.rak_id')
                            ->get()
                            ->result();
        $data['raks'] = $this->db->get('rak')->result();
        $data['pengarangs'] = $this->db->get('pengarang')->result();
        $data['penerbits'] = $this->db->get('penerbit')->result();

        $this->load->view('templates/header');
        $this->load->view('pages/buku/index',$data);
        $this->load->view('templates/footer');
    }

    public function store()
    {
        $tanggal_pengadaan = strtotime($this->input->post('tanggal_pengadaan'));
        
        $buku['id'] = $this->input->post('id');
        $buku['judul_buku'] = $this->input->post('judul_buku');
        $buku['tahun_buku'] = $this->input->post('tahun_buku');
        $buku['jumlah_buku'] = $this->input->post('jumlah_buku');
        $buku['penerbit_id'] = $this->input->post('penerbit_id');
        $buku['pengarang_id'] = $this->input->post('pengarang_id');
        $buku['penerbit_id'] = $this->input->post('penerbit_id');
        $buku['rak_id'] = $this->input->post('rak_id');
        $buku['tanggal_pengadaan'] = date('Y-m-d',$tanggal_pengadaan);
        
        $this->db->insert('buku',$buku);
        $this->is_store_success();
    }
    
    public function edit($id)
    {
        $data['raks'] = $this->db->get('rak')->result();
        $data['pengarangs'] = $this->db->get('pengarang')->result();
        $data['penerbits'] = $this->db->get('penerbit')->result();
        $data['buku'] = $this->db
        ->select('
                    buku.id,
                    buku.judul_buku,
                    buku.tahun_buku,
                    buku.jumlah_buku,
                    penerbit.id as penerbit,
                    pengarang.id as pengarang,
                    rak.id as rak,
                    tanggal_pengadaan
                ')
        ->from('buku')
        ->where('buku.id',$id)
        ->join('penerbit','penerbit.id = buku.penerbit_id')
        ->join('pengarang','pengarang.id = buku.pengarang_id')
        ->join('rak','rak.id = buku.rak_id')
        ->get()
        ->result()[0];

        $data['buku']->tanggal_pengadaan = date('m/d/Y');

        $this->load->view('templates/header');
        $this->load->view('pages/buku/edit',$data);
        $this->load->view('templates/footer');
    }
    
    public function update($id)
    {
        $tanggal_pengadaan = strtotime($this->input->post('tanggal_pengadaan'));

        $buku['id'] = $this->input->post('id');
        $buku['judul_buku'] = $this->input->post('judul_buku');
        $buku['tahun_buku'] = $this->input->post('tahun_buku');
        $buku['jumlah_buku'] = $this->input->post('jumlah_buku');
        $buku['penerbit_id'] = $this->input->post('penerbit_id');
        $buku['pengarang_id'] = $this->input->post('pengarang_id');
        $buku['penerbit_id'] = $this->input->post('penerbit_id');
        $buku['rak_id'] = $this->input->post('rak_id');
        $buku['tanggal_pengadaan'] = date('Y-m-d',$tanggal_pengadaan);

        $this->db->where('id',$id)->update('buku',$buku);
        $this->is_update_success();
    }

    public function delete($id)
    {
        $this->db->where('id',$id)->delete('buku');
        $this->is_delete_success();
    }

    private function is_store_success()
    {
        if($this->db->affected_rows() > 0)
            $this->session->set_flashdata('success','Buku berhasil ditambahkan!');
        else
            $this->session->set_flashdata('error','Buku gagal ditambahkan!');
        redirect('buku');
    }

    private function is_update_success()
    {
        if($this->db->affected_rows() > 0)
            $this->session->set_flashdata('success','Buku berhasil diupdate!');
        else
            $this->session->set_flashdata('error','Buku gagal diupdate!');
        redirect('buku');
    }

    private function is_delete_success()
    {
        if($this->db->affected_rows() > 0)
            $this->session->set_flashdata('success','Buku berhasil dihapus!');
        else
            $this->session->set_flashdata('error','Buku gagal dihapus!');
        redirect('buku');
    }
        

}