<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penerbit extends CI_Controller {
    public function index()
    {
        $data['penerbits'] = $this->db->get('penerbit')->result();
        $this->load->view('templates/header');
        $this->load->view('pages/penerbit/index',$data);
        $this->load->view('templates/footer');
    }

    public function store()
    {
        $penerbit['id'] = $this->input->post('id');
        $penerbit['nama_penerbit'] = $this->input->post('nama_penerbit');
        $penerbit['alamat'] = $this->input->post('alamat');
        $penerbit['no_telp'] = $this->input->post('no_telp');
        
        $this->db->insert('penerbit',$penerbit);
        $this->is_store_success();
    }

    public function edit($id)
    {
        $data['penerbit'] = $this->db->where('id',$id)->get('penerbit')->result()[0];
        $this->load->view('templates/header');
        $this->load->view('pages/penerbit/edit',$data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $penerbit['id'] = $this->input->post('id');
        $penerbit['nama_penerbit'] = $this->input->post('nama_penerbit');
        $penerbit['alamat'] = $this->input->post('alamat');
        $penerbit['no_telp'] = $this->input->post('no_telp');

        $this->db->where('id',$id)->update('penerbit',$penerbit);
        $this->is_update_success();
    }

    public function delete($id)
    {
        $this->db->where('id',$id)->delete('penerbit');
        $this->is_delete_success();
    }

    private function is_store_success()
    {
        if ($this->db->affected_rows() > 0) 
            $this->session->set_flashdata('success','Penerbit berhasil ditambah!');
        else
            $this->session->set_flashdata('error','Penerbit Gagal ditambah!');
        redirect('penerbit');
    }

    private function is_update_success()
    {
        if ($this->db->affected_rows() > 0) 
            $this->session->set_flashdata('success','Penerbit berhasil diupdate!');
        else
            $this->session->set_flashdata('error','Penerbit Gagal diupdate!');
        redirect('penerbit');
    }

    public function is_delete_success()
    {
        if ($this->db->affected_rows() > 0) 
            $this->session->set_flashdata('success','Penerbit berhasil dihapus!');
        else
            $this->session->set_flashdata('error','Penerbit Gagal dihapus!');
        redirect('penerbit');
    }
}