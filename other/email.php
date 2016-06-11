<?php
if(isset($_POST['email'])){
require_once('common.php');
$email = mysql_prep($_POST['email']);
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
	$query = "INSERT INTO subscriptions(`email`) VALUES('".$email."')";
	$sql = @mysql_query($query, $con);
	$msg = "Thank you for subscribing on pickurflick.\n We will inform you as soon as we are launched...";
	$msg = wordwrap($msg,70);
	$headers = 'From: PickUrFlick Team <info@pickurflick.com>' . "\r\n" .
    		'Reply-To: PickUrFlick Team <info@pickurflick.com>' . "\r\n" .
    		'X-Mailer: PHP/' . phpversion();
	$headers.= "MIME-Version: 1.0\r\n"; 
	$headers.= "Content-Type: text/plain; charset=utf-8\r\n"; 
	$headers.= "X-Priority: 1\r\n"; 
	mail($email,"You are subscribed on pickurflick.com",$msg, $headers);
}
header("location: index.php");
}
?>
