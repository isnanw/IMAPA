<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends CI_Controller
{
  /**
   * Index Page for this controller.
   *
   * @author Isnan Wahyudi <isnan@gin.co.id>
   * @see https://www.ilmuit.my.id/
   */
  public function index()
  {
    $data['title'] = 'Artikel';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $this->load->view('template/header', $data);
    $this->load->view('template/topnav');
    $this->load->view('template/sidebar');
    $this->load->view('template/headerConten');
    $this->load->view('artikel/index', $data);
    $this->load->view('template/footer');
  }
}
