<?php
 
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Login extends CI_Controller {
 
     public function loginUser()
     {
        $_SESSION = $this->session->flashdata('username');

         
        $this->load->view('user_view');
     }

     public function logoutUser()
     {
        $this->session->sess_destroy();
    
        redirect('Home/index');
     }
 
 }
 
 /* End of file Login.php */
 
?>