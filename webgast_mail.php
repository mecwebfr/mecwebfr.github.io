
<?php

//print_r($_POST);

if($_POST['g-recaptcha-response'] != '') {
	

	$to = "johan.perk@gmail.com";
	$subject = $_POST['onderwerp'];
	$body = $_POST['bericht'];
	$from = $_POST['email'];

	if (mail($to, $subject, $body . ' van ' . $from)) {
		echo("Bedankt voor je bericht, je hoor zsm van me!");
	} else {
		echo("Er is iets mis gegaan..");
	}

}

?>