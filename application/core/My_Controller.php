<?php
defined('BASEPATH') or exit('No direct script access allowed');

class My_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->template = "";
        $this->title = "";

        $this->load_lang();
    }

    public function load_view($view_path, $data, $js_path = null)
    {
        $data['title'] = $this->title;
        $data['view_content'] = $this->load->view($view_path, $data, true);
        $data['js_path'] = $js_path;
        $this->load->view($this->template, $data);
    }

    protected function load_lang()
    {
        if ($this->uri->segment(1) == 'en' ||
            $this->uri->segment(1) == 'ch'
        ) {
            $this->session->set_userdata("lang", $this->uri->segment(1));
            redirect(base_url());
        }

        if ($this->session->userdata('lang') == "ch") {
            $lang = "chinese";
            $this->config->set_item('language', $lang);
            $this->session->set_userdata("lang", 'ch');
        } else {
            $lang = "english";
            $this->config->set_item('language', $lang);
            $this->session->set_userdata("lang", 'en');
        }
    }

    public function check_isvalidated()
    {
        if (!$this->session->userdata('validated')) {
            redirect('login');
        }
    }
}
