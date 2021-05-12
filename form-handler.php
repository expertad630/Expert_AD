<?php
$server="sql106.epizy.com";
$username="epiz_28598031";
$password="jLX8jJ7mCVcThOf";
$dbname="epiz_28598031_expertad630";
$conn= mysqli_connect($server, $username, $password, $dbname);
if(!$conn){
    die("Connecction Failled:".mysqli_connect_errno());
}



$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_from = 'info@expert.ad';

$email_subject = 'New Message';

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "Subject: $subject.\n".
                "Message: $message.\n";
            
$to = 'ayandas630@gmail.com';

$headrs = "From: $email_from \r\n";
$headrs = "Reply-To: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headrs);
header("Location: contact.html");



?>