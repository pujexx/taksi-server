<?php

class Mlogin extends CI_Model {
   var $table;
    function __construct() {
        parent::__construct();
        $this->table ="user";
    }

    function cekLogin($username, $password) {
        $this->db->where("nama_user", $username);
        $this->db->where("password_user", md5($password));
        $result = $this->db->get($this->table);
        if ($result->num_rows() ==1) {
            return true;
        }
    }

    function prosesLogin($username, $password) {
        $this->db->where("nama_user", $username);
        $this->db->where("password_user", md5($password));
        $result = $this->db->get($this->table);
        if ($result->num_rows() ==1) {
            return $result->row_array();
        }
    }
}
?>
