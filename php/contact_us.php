<?php
	if(isset($_POST['send'])){
	$to = "courses@belluso.academy";
	$from = $_POST['email'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$company = $_POST['company'];
	$location = $_POST['location'];
	$phone = $_POST['phone'];
	$subject = "Enquire From Front Page Italy Course";
	$message = "Name:" . " " . $first_name . " " . $last_name . "\n" . "Email:" . " " . $from . "\n" .
	"Phone:" . " " . $phone . "\n" . "Company:" . " " . $company . "\n" . "Location:" . " " . $location . "\n\n" .
	"Message:" . "\n\n " . $_POST['message'];
	$headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
	header('Location: ../index.html');	
	}
?>