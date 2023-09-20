<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function index()
    {
        $data['teacher'] = $this->db->get('guru')->result_array();
        $this->load->view('guru', $data);
    }
}