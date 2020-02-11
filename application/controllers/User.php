<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
  public function index()
  {
    // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    // echo 'SELAMAT DATANG ' . $data['user']['name'];
    $data['title'] = 'Page User'; 
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $this->load->view('template/header', $data);
    $this->load->view('user/index',$data);
  }
}
