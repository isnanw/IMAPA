<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
  /**
   * Index Page for this controller.
   *
   * @author Isnan Wahyudi <isnan@gin.co.id>
   * @see https://www.ilmuit.my.id/
   */
  public function index()
  {
    $data['title'] = 'Login Page';
    $this->load->view('template/auth_header', $data);
    $this->load->view('auth/login');
    $this->load->view('template/auth_footer');
    
  }
  public function registration(){
    $data['title'] = 'Registration Page';
    $this->load->view('template/auth_header', $data);
    $this->load->view('auth/registration');
    $this->load->view('template/auth_footer');
  }
}
