<?php
$message = ""; 
$codiceagente_error = $email_error = $gender_error = $website_error = "";


if($_SERVER['REQUEST_METHOD'] === 'POST'){
	$codice_agente = isset( $_POST['codice_agente']) ? $_POST['codice_agente'] : '';
	$listino = isset( $_POST['listino']) ? $_POST['listino'] : '';
	$condizioni_pagamento = isset( $_POST['condizioni_pagamento']) ? $_POST['condizioni_pagamento'] : '';
	$agency_type = isset( $_POST['agency_type']) ? $_POST['agency_type'] : '';
	$titolare = isset( $_POST['titolare']) ? $_POST['titolare'] : '';
	$denominazione = isset( $_POST['denominazione']) ? $_POST['denominazione'] : '';
	//handle select
	//$attivita = isset( $_POST['attivita']) ? $_POST['attivita'] : '';
	$tel = isset( $_POST['tel']) ? $_POST['tel'] : '';
	$email_cliente = isset( $_POST['email_cliente']) ? $_POST['email_cliente'] : '';
	$pec = isset( $_POST['pec']) ? $_POST['pec'] : '';
	$closing_day = isset( $_POST['closing_day']) ? $_POST['closing_day'] : [];
	$closing_day_details = isset( $_POST['closing_day_details']) ? $_POST['closing_day_details'] : '';
	$address = isset( $_POST['address']) ? $_POST['address'] : '';
	$cap = isset( $_POST['cap']) ? $_POST['cap'] : '';
	//handle select
	//$province = isset( $_POST['province']) ? $_POST['province'] : '';
	$city = isset( $_POST['city']) ? $_POST['city'] : '';
	$vat = isset( $_POST['vat']) ? $_POST['vat'] : '';
	$unique_code = isset( $_POST['unique_code']) ? $_POST['unique_code'] : '';
	$merci_address = isset( $_POST['merci_address']) ? $_POST['merci_address'] : '';
	$merci_cap = isset( $_POST['merci_cap']) ? $_POST['merci_cap'] : '';
	//handle select
	//$merci_province = isset( $_POST['merci_province']) ? $_POST['merci_province'] : '';
	$merci_city = isset( $_POST['merci_city']) ? $_POST['merci_city'] : '';
	$banca_appoggio = isset( $_POST['banca_appoggio']) ? $_POST['banca_appoggio'] : '';
	$banca_agenzia = isset( $_POST['banca_agenzia']) ? $_POST['banca_agenzia'] : '';
	$iban = isset( $_POST['iban']) ? $_POST['iban'] : '';
	$responsabile = isset( $_POST['responsabile']) ? $_POST['responsabile'] : '';
	
	// handle uploaded files
	//$upload_documento = isset( $_POST['upload_documento']) ? $_POST['upload_documento'] : '';
	//$upload_cod_fiscale = isset( $_POST['upload_cod_fiscale']) ? $_POST['upload_cod_fiscale'] : '';
	//$upload_visura_cam = isset( $_POST['upload_visura_cam']) ? $_POST['upload_visura_cam'] : '';
	
	//handle privacy consents
	$privacy_accept_1 = isset( $_POST['privacy_accept_1']) ? $_POST['privacy_accept_1'] : '';
	$privacy_accept_2 = isset( $_POST['privacy_accept_2']) ? $_POST['privacy_accept_2'] : '';
	
	$array_closing_day = implode(", <br/>", $closing_day);


	// Handle Errors 
	if (empty($_POST["codice_agente"])) {
		$codiceagente_error = "Inserire il codice_agente";
	  } else {
		$codice_agente = $_POST["codice_agente"];
	}

	$to = "riccardo.burderi@aghoreca.com"; // ordinierregi@gmail.com //cc: rita.alescio@adtradingsrl.eu
	//$name = "$_POST['name']";
	$from = "info@agdistribuzione.com";
	//$phone = $_POST['mobile'];
	$message = "<!DOCTYPE html>
	<html>
	<head>
	</head>
	<body>
		<p>Test Email</p>
		<p>$agency_type</p>
		<p>$array_closing_day</p>
	</body>
	</html>";
	
	$subject = "Test mail";
	
	// Set content-type header for sending HTML email 
	$headers = array("From: info@agdistribuzione.com",
		"Reply-To: info@agdistribuzione.com",
		"X-Mailer: PHP/" . phpversion(),
		//"cc: rita.alescio@adtradingsrl.eu"
	);
	$headers = implode("\r\n", $headers);

	//$result = mail($to, $subject, $message, $headers, $from);
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
}
?>