<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Links_model extends CI_Model {
 
    function __construct() 
    {
        parent::__construct(); 
        $this->load->database();   
    }    
   function get_entries()
   {
      $this->db->order_by('anchor','asc');
      $query = $this->db->get('links');
      return $query->result();
   }
   function get_entries_by_tags()
   {
      $this->db->where('tag', $this->uri->segment(3));
      $this->db->order_by('anchor','asc');    
      $query = $this->db->get('links');
      return $query->result();
   }
   function get_tags()
   {
      $this->db->group_by('tag');    
      $tagquery = $this->db->get('links');
      return $tagquery->result();
   }
   function get_dropdown_tags()
   {
      $tags = $this->db->query('select distinct tag from links');
      $dropdowns = $tags->result();
      foreach ($dropdowns as $dropdown)
      {
         $dropdownlist[$dropdown->tag] = $dropdown->tag;
      }
      $finaldropdown = $dropdownlist;
      return $finaldropdown;
   } 

}