<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Getstarted extends My_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function survey_index()
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

        $data['redirect_url'] =  base_url() . "getstarted/thankyou";

        $this->load->view("getstarted/survey_index", $data);
    }

    public function survey_home()
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

        $data['redirect_url'] =  base_url() . "getstarted/thankyou";

        $this->load->view("getstarted/survey_home", $data);
    }

    public function thankyou(){
        $data = [];
        $this->load->view("getstarted/thankyou", $data);
    }
}
