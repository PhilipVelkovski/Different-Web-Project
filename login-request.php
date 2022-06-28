<?php 
$toEmail = "philipvelkovski@gmail.com";


$content = '<html><body>';
$content .= '<p>Name: ' . strip_tags($_POST['fname'])  . '</p>';
$content .= '<p>Email: ' .  strip_tags($_POST['emails']) . '</p>';
$content .= '</html></body>';

$headers = 'From: '. strip_tags($_POST['fname']) . '\r\n';
$headers .= 'Reply-to: '. strip_tags($_POST['emails']) . '\r\n';
$headers .= 'MIME-Version: 1.0 \r\n';
$headers .= 'Content-Type: text/html; charset=ISO-8859-1\r\n';

if(mail($toEmail, 'New User , New Supscriber', $content , $headers )){
    print '<p class="form-control"> You are now Loged In </p>';
} else {
    print '<p class="form-error"> An error acuured </p>';
}

?>