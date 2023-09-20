<?php

// Include the PHP_Email_Form class from php-email-form.php
include('../vendor/php-email-form/php-email-form.php'); // Update path as needed

$receiving_email_address = 'info@lacspace.com';

$contact = new PHP_Email_Form;
$contact->to = $receiving_email_address;
$contact->from_name = $_POST['name'];
$contact->from_email = $_POST['email'];
$contact->subject = $_POST['subject'];

$contact->add_message($_POST['name'], 'From');
$contact->add_message($_POST['email'], 'Email');
$contact->add_message($_POST['message'], 'Message', 2);

echo $contact->send();

?>
