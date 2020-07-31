<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// todo : make model
class Pengarang extends CI_Controller {
    public function index()
    {
        $pengarang = $this->db->get('pengarang');
        $data['pengarangs'] = $pengarang->result();
        $this->load->view('templates/header');
        $this->load->view('pages/pengarang/index',$data);
        $this->load->view('templates/footer');
    }

    public function store()
    {
        $pengarang['id'] = $this->input->post('id');
        $pengarang['nama_pengarang'] = $this->input->post('nama_pengarang'); // todo : rename field nama_pengarang
        $pengarang['alamat'] = $this->input->post('alamat');
        $pengarang['no_telp'] = $this->input->post('no_telp');

        $this->db->insert('pengarang',$pengarang);
        $this->is_store_success();
    }

    public function delete($id){
        $this->db->where('id',$id)->delete('pengarang');
        $this->is_delete_success();
    }

    public function edit($id)
    {
        // select pengarang where id = $id
        $data['pengarang'] = $this->db->where('id',$id)->get('pengarang')->result()[0];
        $this->load->view('templates/header');
        $this->load->view('pages/pengarang/edit',$data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {   
        $pengarang['id'] = $this->input->post('id');
        $pengarang['nama_pengarang'] = $this->input->post('nama_pengarang');
        $pengarang['alamat'] = $this->input->post('alamat');
        $pengarang['no_telp'] = $this->input->post('no_telp');

        $this->db->where('id',$id)->update('pengarang',$pengarang);
        $this->is_update_success();
    }

    private function is_store_success(){
        if($this->db->affected_rows() > 0)
            $this->session->set_flashdata('success','Data pengarang berhasil ditambakan!');
        else
            $this->session->set_flashdata('error','Data pengarang gagal ditambakan!');
        
        redirect('pengarang');
    }

    private function is_delete_success(){
        if($this->db->affected_rows() > 0)
            $this->session->set_flashdata('success','Pengarang berhasil dihapus!');
        else
            $this->session->set_flashdata('error','Pengarang gagal dihapus!');
        
        redirect('pengarang');
    }

    private function is_update_success(){
        if($this->db->affected_rows() > 0)
            $this->session->set_flashdata('success','Pengarang berhasil diupdate!');
        else
            $this->session->set_flashdata('error','Pengarang gagal diupdate!');
        
        redirect('pengarang');
    }


    
}