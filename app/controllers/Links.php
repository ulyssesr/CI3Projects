<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Links extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Links_model', 'links');
        $this->load->helper(array('html','url'));
    }
    public function index()
    {
        $data['title'] = "Links";
        $data['tagquery'] = $this->links->get_tags();  
        $data['tags'] = $this->links->get_dropdown_tags();
        $data['query'] = $this->links->get_entries();
        $this->load->view('header', $data);
        $this->load->view('links_index', $data);
        $this->load->view('footer');
    }
    function tag()
    {
        $data['title'] = "Links";
        $data['tagquery'] = $this->links->get_tags();
        $data['tags'] = $this->links->get_dropdown_tags();
        $data['query'] = $this->links->get_entries_by_tags();
        $this->load->view('header', $data);
        $this->load->view('links_index', $data);
        $this->load->view('footer');
    }

}