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
class Mail extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function contact_mail()
    {
        if (isset($_POST['email'])) {
            $to = 'alchefan@gmail.com';
            $subject = 'From contact form';
            $message = 'Name: ' . $_POST['name'] . "\n" .
                'E-mail: ' . $_POST['email'] . "\n" .
                'Message: ' . $_POST['message'];

            $this->sendMail($to, $subject, $message);
        }

        redirect(base_url() . "#contact-message");
    }

    public function send()
    {
        if (isset($_POST['name'])) {
            $to = $_POST['email'];
            $subject = 'From brain';
            $message = 'Name: ' . $_POST['name'] . "<br>" .
                'E-mail: ' . $_POST['email'] . "<br>" .
                'Subject: ' . $subject . "<br>" .
                'Message: ' . $_POST['message'];

            $this->sendMail($to, $subject, $message);
        }
    }

    public function sendMail($to_email, $subject, $message)
    {
        $contents = '<div style="font-size:20px; text-align:center;">' . $message . '</div>';
        //SMTP & mail configuration
        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_port' => 587,
            'smtp_user' => 'alchefan@gmail.com',
            'smtp_pass' => 'alchemist.str',
            'smtp_crypto' => 'tls',
            'mailtype' => 'html',
            'newline' => "\r\n",
        );
        $this->load->library('email', $config);

        $this->email->to($to_email);
        $this->email->from('noreply@brain.com');
        $this->email->subject($subject);
        $this->email->message($contents);

        //Send email
        $this->email->send();
        $error = $this->email->print_debugger();
        print_r($error);
    }

    public function sendMail_sendgrid()
    {
        $email = new \SendGrid\Mail\Mail();
        $email->setFrom("test@example.com", "Example User");
        $email->setSubject("Sending with SendGrid is Fun");
        $email->addTo("test@example.com", "Example User");
        $email->addContent("text/plain", "and easy to do anywhere, even with PHP");
        $email->addContent(
            "text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
        );
        $sendgrid = new \SendGrid(getenv('SENDGRID_API_KEY'));
        try {
            $response = $sendgrid->send($email);
            print $response->statusCode() . "\n";
            print_r($response->headers());
            print $response->body() . "\n";
        } catch (Exception $e) {
            echo 'Caught exception: ' . $e->getMessage() . "\n";
        }
    }
}
