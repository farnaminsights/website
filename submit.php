<?php
	$name = $_POST["name"];
	$email = $_POST["email"];
	$school = $_POST["school"];
	$gpa = $_POST["gpa"];
	$psat = $_POST["psat"];
	$sat = $_POST["sat"];
	$act = $_POST["act"];
	$message = $_POST["message"];

	$email_from = "farnaminsightscc@gmail.com";
	$email_subject = "New Consultation Applicant";
	$email_body = "Name: $name\n
		Email: $email\n
		School, city, state: $school\n
		GPA: $gpa\n
		PSAT: $psat\n
		SAT: = $sat\n
		ACT: = $act\n
		Message = $message\n";
	
	$to = "farnaminsightscc@gmail.com";
	$headers = "From: $email_from \r\n";
	$headers .= Reply-To: $email \r\n";
	mail($to, $email_subject, $email_body, $headers);
?>