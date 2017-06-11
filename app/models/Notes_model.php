<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Notes_model extends CI_Model {
 
    function __construct() {
        parent::__construct(); 
        $this->load->database();   
    }    

    function get_entries()
    {
        $query = $this->db->query('SELECT * FROM notes ORDER BY published DESC LIMIT 1');
        return $query->result();
    }

}