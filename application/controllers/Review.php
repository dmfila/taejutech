<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Review extends My_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['step'] = $this->security->xss_clean($this->input->get('step'));
        $data['fname'] = $this->security->xss_clean($this->input->get('fname'));
        $data['lname'] = $this->security->xss_clean($this->input->get('lname'));
        $data['phone'] = $this->security->xss_clean($this->input->get('phone'));
        $data['email'] = $this->security->xss_clean($this->input->get('email'));
        $data['crmId'] = $this->security->xss_clean($this->input->get('crmId'));

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
            $this->load->view("review/review_step_0", $data);
        } else {
            $this->load->view("review/review_step_1", $data);
        }
    }
}
