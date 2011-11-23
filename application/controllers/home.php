<?php

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("mtaksi");
    }

    function index() {
        $data["pemesans"]=$this->mtaksi->getall();
        $data["content"]="home";
        $this->load->view("home_template",$data);
    }

}
?>
