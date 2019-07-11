<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Crud extends CI_Controller {

    function __construct(){
        parent::__construct();
        // konfigurasi helper & library
        $this->load->helper('url');
        $this->load->library('pagination');
        $this->load->database();
    }
 
    function index(){
    	
    }

    public function add_user(){
        $data = array(
        'first_name'    => $this->input->post('first_name'),
        'last_name'     => $this->input->post('last_name'),
        'email'         => $this->input->post('email'),
        'grup_id'         => $this->input->post('level'),
        'username'      => $this->input->post('username'),
        'password'         => $this->input->post('password')
    );
    $this->model_admin->tambah($data);
    $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
    redirect('admin');
    }

}