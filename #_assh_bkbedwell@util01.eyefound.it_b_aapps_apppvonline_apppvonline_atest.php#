<?php
include('Mail.php');

$from =     "info@healthyustore.net";
$to =       "supplement@pppvonline.com";
$subject =  "PPPVONLINE Intake Form";
$body =     "\n\nThis is a test";
$host =     "ssl://smtp.gmail.com";
$port =     "465";
$username = "info@healthyustore.net";
$password = "g00df00d";

$headers = array (
         'From' => $from,
         'To' => $to,
         'Subject' => $subject);

$smtp = Mail::factory('smtp',
      array (
            'host' => $host,
            'port' => $port,
            'auth' => true,
            'username' => $username,
            'password' => $password));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) die($mail->getMessage());

?>


