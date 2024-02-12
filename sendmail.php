<?php
$message = ""; 
//codice_agente
//listino
//condizioni_pagamento
//agency_type
//titolare
//denominata
//attivita
//phone
//email_cliente
//pec
//closing_day
//closing_day_details
//address
//cap
//province
//city
//vat
//cod_univoco
//merci_address
//merci_cap
//merci_province
//merci_city
//banca_appoggio
//banca_agenzia
//iban
//responsabile
//upload_documento
//upload_cod_fiscale
//upload_visura_cam
//message (in fondo al form)
//privacy_accept_1 ->checkbox
//privacy_accept_2_1 (presto il consenso) ->radio 
//privacy_accept_2_2 (nego il consenso) ->radio


// da: isset($_POST['submit'])
// a: if($_SERVER['REQUEST_METHOD'] === 'POST') {}
if($_SERVER['REQUEST_METHOD'] === 'POST'){
	$agency_type = $_POST["agency_type"];
	$closing_day = $_POST["closing_day"];
	$to = "riccardo.burderi@aghoreca.com"; // Your email address
	//$name = "$_POST['name']";
	$from = "info@agdistribuzione.it";
	//$phone = $_POST['mobile'];
	$message = "<!DOCTYPE html>
	<html>
	<head>
	</head>
	<body>
        <p>Test Email</p>
        <p>$agency_type</p>
        <p>$closing_day</p>
	</body>
	</html>";
	
	$subject = "Test mail";
	
	// Set content-type header for sending HTML email 
	$headers = array("From: info@agdistribuzione.it",
		"Reply-To: info@agdistribuzione.it",
		"X-Mailer: PHP/" . phpversion()
	);
	$headers = implode("\r\n", $headers);

	$result = mail($to, $subject, $message, $headers);
	if ($result) {
		// $message = "Your Message was sent Successfully!";
		echo '<script type="text/javascript">alert("Your Message was sent Successfully!");</script>';
		echo '<script type="text/javascript">window.location.href = window.location.href;</script>';
		echo $message;

	}else{
		// $message = "Sorry! Message was not sent, Try again Later.";
		echo '<script type="text/javascript">alert("Sorry! Message was not sent, Try again Later.");</script>';
		echo '<script type="text/javascript">window.location.href = window.location.href;</script>';
	}
	// header('Location: contact.php');
}
?>