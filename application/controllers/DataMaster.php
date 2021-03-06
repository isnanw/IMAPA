<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataMaster extends CI_Controller
{
  /**
   * Index Page for this controller.
   *
   * @author Isnan Wahyudi <isnan@gin.co.id>
   * @see https://www.ilmuit.my.id/
   */
  public function pengguna()
  {
    $data['title'] = 'Pengaturan Pengguna';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $this->load->view('template/header', $data);
    $this->load->view('template/topnav');
    $this->load->view('template/sidebar');
    $this->load->view('template/headerConten');
    $this->load->view('dataMaster/pengguna', $data);
    $this->load->view('template/footer');
  }
  public function group()
  {
    $data['title'] = 'Pengaturan Group';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $this->load->view('template/header', $data);
    $this->load->view('template/topnav');
    $this->load->view('template/sidebar');
    $this->load->view('template/headerConten');
    $this->load->view('dataMaster/group', $data);
    $this->load->view('template/footer');
  }
  public function menu()
  {
    $data['title'] = 'Pengaturan Menu';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['menu'] = $this->db->get('menu')->result_array();
    $this->form_validation->set_rules('menu', 'Menu', 'required');
    if ($this->form_validation->run() == false) {
      $this->load->view('template/header', $data);
      $this->load->view('template/topnav');
      $this->load->view('template/sidebar');
      $this->load->view('template/headerConten');
      $this->load->view('dataMaster/menu', $data);
      $this->load->view('template/footer');
    } else {
      // $this->db->insert('menu', ['menu' => $this->input->post('menu')]);
      // $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Add New Menu is Success!</div>');
      // redirect('masterData/menu');
    }
  }
  public function artikel()
  {
    $data['title'] = 'Artikel';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $this->load->view('template/header', $data);
    $this->load->view('template/topnav');
    $this->load->view('template/sidebar');
    $this->load->view('template/headerConten');
    $this->load->view('dataMaster/artikel', $data);
    $this->load->view('template/footer');
  }
}
