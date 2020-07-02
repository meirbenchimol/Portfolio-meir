<?php

// Globals
$pageErrorUrl = './error.html';
$pageSuccessUrl = './success.html';

// Var - Mail
$fromEmail = 'robot@meirbenchimol.com';
$toEmail = 'benchimolmeir@gmail.com';
$subject  = 'Un message du site';

// Var - Form
$mail = filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL);
$name = filter_var( $_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);
$message = filter_var( $_POST['message'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$headers = 'From: '.$fromEmail;

if(!$mail || !$name || !$message ){
    header('Location: '.$pageErrorUrl);
    exit;
}


mail($toEmail,$subject,$message,$headers);
header('Location: '.$pageSuccessUrl);
exit;
?>
