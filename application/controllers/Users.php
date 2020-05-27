<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends My_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view("users/index");
    }
}
