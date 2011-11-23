<?php

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("mlogin");
    }

    function index() {
        if($this->session->userdata("login")=="true"){
            redirect("admin");
        }
        $this->form_validation->set_rules("username", "username", "required");
        $this->form_validation->set_rules("password", "password", "required");
        if($this->form_validation->run()==true){
            $username=$this->input->post("username", true);
            $password= $this->input->post("password", true);
            if($this->mlogin->cekLogin($username,$password)==true){
                $user = $this->mlogin->proseslogin($username,$password);
                $this->session->set_userdata("id",$user["id_user"]);
                $this->session->set_userdata("login","true");
                $this->session->set_flashdata("notif","Selamat datang admin");
                redirect("admin");
            }
            else{
                $this->session->set_flashdata("notif","error tidak ada dalam sistem");
                redirect("login");
            }
        }
        $this->load->view("login");
    }

}
?>
