<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Startnow extends My_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $data['ip'] = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $data['ip'] = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $data['ip'] = $_SERVER['REMOTE_ADDR'];
        }
        
        $data['redirect_url_landing'] = base_url() . "getstarted/survey_index?";

        $this->load->view("startnow/index", $data);
    }
}
