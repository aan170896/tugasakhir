<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Utama extends CI_Controller
{

    public function index()
    {
        $this->load->view('v_utama');
        $this->load->view('v_about');
        $this->load->view('v_product');
        $this->load->view('v_order');
        $this->load->view('v_contact');
    }

    public function order() {
        $data=[
            'panjang'=>htmlspecialchars($this->input->post('panjang', true)),
        ];
        $this->db->insert('user', $data);
        

    }
}
