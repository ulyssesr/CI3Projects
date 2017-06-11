<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notes extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Notes_model', 'notes');
        $this->load->helper(array('url'));
    }
    public function index()
    {
        $data['title'] = "Notes";
        $data['query'] = $this->notes->get_entries();
        $this->load->view('header', $data);
        $this->load->view('notes_index', $data);
        $this->load->view('footer');
    }
}