<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {
    public function index()
    {
        $data['anggotas'] = $this->db->get('anggota')->result();

        $this->load->view('templates/header');
        $this->load->view('pages/anggota/index',$data);
        $this->load->view('templates/footer');
    }

    public function store()
    {
        $anggota['id'] = $this->input->post('id');        
        $anggota['nama'] = $this->input->post('nama');        
        $anggota['alamat'] = $this->input->post('alamat');        
        $anggota['no_telp'] = $this->input->post('no_telp');        
        $this->db->insert('anggota',$anggota);
        $this->is_store_success();
    }

    public function edit($id)
    {
        $data['anggota'] = $this->db->where('id',$id)->get('anggota')->result()[0];
        $this->load->view('templates/header');
        $this->load->view('pages/anggota/edit',$data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $anggota['id'] = $this->input->post('id');
        $anggota['nama'] = $this->input->post('nama');
        $anggota['alamat'] = $this->input->post('alamat');
        $anggota['no_telp'] = $this->input->post('no_telp');

        $this->db->where('id',$id)->update('anggota',$anggota);
        $this->is_update_success();
    }

    public function delete($id)
    {
        $this->db->where('id',$id)->delete('anggota');
        $this->is_delete_success();
    }
    
    private function is_store_success()
    {
        if($this->db->affected_rows() > 0)
            $this->session->set_flashdata('success','Anggota berhasil ditambahkan!');
        else
            $this->session->set_flashdata('error','Anggota gagal ditambahkan!');
        redirect('anggota');
    }

    private function is_update_success()
    {
        if($this->db->affected_rows() > 0)
            $this->session->set_flashdata('success','Anggota berhasil diupdate!');
        else
            $this->session->set_flashdata('error','Anggota gagal diupdate!');
        redirect('anggota');
    }

    private function is_delete_success()
    {
        if($this->db->affected_rows() > 0)
            $this->session->set_flashdata('success','Anggota berhasil dihapus!');
        else
            $this->session->set_flashdata('error','Anggota gagal dihapus!');
        redirect('anggota');
    }
}