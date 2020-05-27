<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Services extends My_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['step'] = isset($_GET['step']) ? $_GET['step'] : 0;
        $data['fname'] = isset($_GET['fname']) ? $_GET['fname'] : "";
        $data['lname'] = isset($_GET['lname']) ? $_GET['lname'] : "";
        $data['phone'] = isset($_GET['phone']) ? $_GET['phone'] : "";
        $data['email'] = isset($_GET['email']) ? $_GET['email'] : "";
        $data['crmId'] = isset($_GET['crmId']) ? $_GET['crmId'] : 0;
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $data['ip'] = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $data['ip'] = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $data['ip'] = $_SERVER['REMOTE_ADDR'];
        }

        $data['country'] = "";
        $data['state'] = "";
        $data['city'] = "";
        $data['zipCode'] = "";
        
        $data['redirect_url'] = base_url() . "getstarted/thankyou";
        $data['redirect_url_landing'] = base_url() . "getstarted/survey_index?";

        if ($data['step'] != 1) {
            $this->load->view("services/service_step_0", $data);
        } else {
            $this->load->view("services/service_step_1", $data);
        }
    }
}
