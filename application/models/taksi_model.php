<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Taksi_model extends CI_Model{
    
    function __construct()
    {
        parent::__construct();
    }
    
    function checklogin($username, $password)
    {
        $query = $this->db->get_where('user', array('nama_user'=>$username,'password_user'=>$password),1,0);
        if($query->num_rows() > 0){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
    
    function get_data()
    {
        $this->db->select('*');
        $this->db->from('data_user');
        return $this->db->get();
    }
    function set_taksi($data){
        $this->db->insert("data_user",$data);
    }
    
    
}

?>