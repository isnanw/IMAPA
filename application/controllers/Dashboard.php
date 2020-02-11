<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
  /**
   * Index Page for this controller.
   *
   * @author Isnan Wahyudi <isnan@gin.co.id>
   * @see https://www.ilmuit.my.id/
   */
  public function index()
  {
    $data['title'] = 'Dashboard';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $this->load->view('template/header', $data);
    $this->load->view('template/topnav');
    $this->load->view('template/sidebar');
    $this->load->view('template/headerConten');
    $this->load->view('dashboard/index', $data);
    $this->load->view('template/footer');
  }
}
