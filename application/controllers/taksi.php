<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class Taksi extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('taksi_model');
    }

    function index() {
        $view['data'] = $this->taksi_model->get_data();
        $this->load->view('taksi', $view);
    }

    function login() {
        $this->form_validation->set_rules('phtuser', 'Username', 'required');
        $this->form_validation->set_rules('phtpass', 'Password', 'required');

        if ($this->form_validation->run() == TRUE):

            $username = $this->input->post('phtuser');
            $password = $this->input->post('phtpass');

            if ($this->taksi_model->checklogin($username, $password) == TRUE):
                $data = array('username' => $username, 'login' => TRUE);
                $this->session->set_userdata($data);
                redirect('admin');

            else:
                $this->session->set_flashdata('message', ' Maaf username atau password salah');
                redirect('taksi');
            endif;

        else:
            $this->load->view('taksi');
        endif;
    }
    function logout(){
        $this->session->unset_userdata("username");
        $this->session->unset_userdata("login");
    }

}
?>