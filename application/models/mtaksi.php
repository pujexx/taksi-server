<?php

class Mtaksi extends CI_Model {

    var $table;

    function __construct() {
        parent::__construct();
        $this->table = "data_user";
    }

    function getAll() {
        $this->db->order_by("waktu_pemesan", "desc");
        $result = $this->db->get($this->table);

        if ($result->num_rows() > 0) {
            return $result->result_array();
        }
    }

    function getone($id) {
        $this->db->where("id_datauser", "apa");
        $result = $this->db->get($this->table);
        if ($result->num_rows() == 1) {
            return $result->row_array();
        }
    }

    function save($data) {
        $this->db->insert($this->table, $data);
    }

    function update($id, $data) {
        $this->db->where("id_datauser", $id);
        $this->db->update($this->table, $data);
    }

    function delete($id) {
        $this->db->where("id_datauser", $id);
        $this->db->delete($this->table);
    }

    function search($key) {
        $this->db->like("nama_pemesan", $key);
        $this->db->order_by("waktu_pemesan", "desc");
        $result = $this->db->get($this->table);

        if ($result->num_rows() > 0) {
            return $result->result_array();
        }
    }

}
?>
