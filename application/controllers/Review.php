<?php

class Review extends CI_Controller{
    public function index(){
        $data['merk'] = ['Nike', 'Adidas', 'Homyped', 'Vans', 'Vantela'];
        $this->load->view('review/v_input', $data);
    }
}