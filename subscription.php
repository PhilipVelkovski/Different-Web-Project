
<?php 
$toEmail = "philipvelkovski@gmail.com";


$content = '<html><body>';
$content .= '<p>Name: ' . $_POST['cname'] . '</p>';
$content .= '<p>Email: ' . $_POST['cemail'] . '</p>';
$content .= '</html></body>';

$headers = 'Form: '. strip_tags($_POST['cname']) . '\r\n';
$headers .= 'Reply-to: '. strip_tags($_POST['cemail']) . '\r\n';
$headers .= 'MIME-Version: 1.0 \r\n';
$headers .= 'Content-Type: text/html; charset=ISO-8859-1\r\n';

if(mail($toEmail, 'Best 10 Masters , New Supscriber', $content , $headers )){
    print '<p class="form-control"> You are now Subscribed </p>';
} else {
    print '<p class="form-error"> An error acuured </p>';
}

?>