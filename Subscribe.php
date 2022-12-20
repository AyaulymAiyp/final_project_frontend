<?php
if(isset($_POST['Submit'])){
    $email = mysqli_real_escape_string($mysqli,$_POST['email']);
}

$email_subject = "You have subscribed successfully!";
$email_body = "You have received a new message";


mail($email, $email_subject, $email_body);

