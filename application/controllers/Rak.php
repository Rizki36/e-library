<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rak extends CI_Controller {
    public function index()
    {
        $rak = $this->db->get('rak');
        $data['raks'] = $rak->result();
        $this->load->view('templates/header');
        $this->load->view('pages/rak/index',$data);
        $this->load->view('templates/footer');
    }

    public function store()
    {
        $rak['id'] = $this->input->post('id');
        $rak['lokasi'] = $this->input->post('lokasi');
        $this->db->insert('rak',$rak);
        $this->is_store_success();
    }

    public function edit($id)
    {
        $data['rak'] = $this->db->where('id',$id)->get('rak')->result()[0];
        $this->load->view('templates/header');
        $this->load->view('pages/rak/edit',$data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $rak['id'] = $this->input->post('id');
        $rak['lokasi'] = $this->input->post('lokasi');
        $this->db->where('id',$id)->update('rak',$rak);
        $this->is_update_success();
    }

    public function delete($id)
    {
        $this->db->where('id',$id)->delete('rak');
        $this->is_delete_success();
    }

    private function is_store_success()
    {
        if ($this->db->affected_rows() > 0) 
            $this->session->set_flashdata('success','Rak berhasil ditambahkan!');
        else
            $this->session->set_flashdata('error','Rak Gagal ditambahkan!');
        redirect('rak');
    }

    private function is_update_success()
    {
        if ($this->db->affected_rows() > 0) 
            $this->session->set_flashdata('success','Rak berhasil diupdate!');
        else
            $this->session->set_flashdata('error','Rak Gagal diupdate!');
        redirect('rak');
    }

    private function is_delete_success()
    {
        if ($this->db->affected_rows() > 0) 
            $this->session->set_flashdata('success','Rak berhasil dihapus!');
        else
            $this->session->set_flashdata('error','Rak Gagal dihapus!');
        redirect('rak');
    }
}