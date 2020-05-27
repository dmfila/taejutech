<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
require_once 'twilio/Twilio.php';
require_once 'aweber_api/aweber_api.php';
require_once 'aweber_api/exceptions.php';
/* Author: Jorge Torres
 * Description: Home controller class
 * This is only viewable to those members that are logged in
 */
class Api extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->result = array(
            "rsp_code" => "00",
            "msg" => "success",
            "data" => array(),
        );
        $this->load->model('user_model');
    }

    public function crm()
    {
        $fname = isset($_GET['fname']) ? $_GET['fname'] : "";
        $lname = isset($_GET['lname']) ? $_GET['lname'] : "";
        $phone = isset($_GET['phone']) ? $_GET['phone'] : "";
        $email = isset($_GET['email']) ? $_GET['email'] : "";
        $mode = isset($_GET['mode']) ? $_GET['mode'] : "insert";
        $desc = isset($_GET['desc']) ? $_GET['desc'] : "";
        $category = isset($_GET['category']) ? $_GET['category'] : "";
        $ip = isset($_GET['ip']) ? $_GET['ip'] : "0.0.0.0";
        $country_code = isset($_GET['country_code']) ? $_GET['country_code'] : "";

        header("Content-type: application/json");
        $result_arr = array();
        $userInfo = array(
            'email' => $email,
            'fname' => $fname,
            'lname' => $lname,
            'phone' => $phone,
            'ip' => $ip,
            'desc' => $desc,
            'category' => $category,
            'country_code' => $country_code,
        );

        $result = false;
        if ($mode == "insert") {
            $result = $this->user_model->insertUserInfo($userInfo);
        } else {
            $result = $this->user_model->updateUserInfo($userInfo);
        }

        if ($result) {
            $result_arr['status'] = 'success';
        } else {
            $result_arr['status'] = 'fail';
        }

        echo json_encode($result_arr);
    }

    public function crm_get()
    {
        $result["data"] = $this->user_model->getUsers();
        echo json_encode($result);
    }

    public function textEncode($string)
    {
        $replacements = array('%21', '%2A', '%27', '%28', '%29', '%3B', '%3A', '%40', '%26', '%3D', '%2B', '%24', '%2C', '%2F', '%3F', '%25', '%23', '%5B', '%5D');
        $entities = array('!', '*', "'", "(", ")", ";", ":", "@", "&", "=", "+", "$", ",", "/", "?", "%", "#", "[", "]");
        return str_replace($entities, $replacements, $string);
    }
}
