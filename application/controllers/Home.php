<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends My_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->lang->load('home');
    }

    public function index()
    {
        $this->load->view('home/index');
    }
}
