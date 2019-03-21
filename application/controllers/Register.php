<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

  public function registerUser()
  {//is unique supaya ada yang beda
    $this->form_validation->set_rules('username', 'Username', 'required|is_unique[user.username]');
    $this->form_validation->set_rules('fname', 'Fullname', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('contact', 'Contact', 'required');
    $this->form_validation->set_rules('nis', 'Nis', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');
    $this->form_validation->set_rules('cpassword', 'Confirm password', 'required|matches[password]');//untuk menyocokkan password

    if ($this->form_validation->run() == TRUE)
    {
      //loadmodel to connect database
      $this->load->model('Model_user');
      $this->Model_user->insert_user();


    $this->session->set_flashdata('succes','you are registered');

    redirect('Home/Login');
    }

    else
    {
     $this->load->view('register_view');
    }

  }
}
?>
