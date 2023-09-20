<?php

class PHP_Email_Form {

    public $ajax = true;
    public $to;
    public $from_name;
    public $from_email;
    public $subject;
    public $smtp = array(); // SMTP configuration
    public $message = '';

    // Constructor
    public function __construct() {
        // Initialize SMTP settings here
        $this->smtp = array(
            'host' => 'smtp.hostinger.com',
            'username' => 'info@lacspace.com',
            'password' => 'Absd@12345',
            'port' => 465,
            'secure' => 'ssl',
        );
    }

    // Add a message to the email body
    public function add_message($content, $label = '', $new_line = 0) {
        // Append content to the email body
        $this->message .= ($label ? $label . ': ' : '') . $content;
        if ($new_line > 0) {
            $this->message .= str_repeat("\n", $new_line);
        }
        $this->message .= "\n";
    }

    // Send the email
    public function send() {
        // Implement email sending logic here
        $headers = "From: {$this->from_name} <{$this->from_email}>\r\n";
        $headers .= "Reply-To: {$this->from_email}\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        if (mail($this->to, $this->subject, $this->message, $headers)) {
            return 'OK';
        } else {
            return 'Error sending email.';
        }
    }
}

?>
