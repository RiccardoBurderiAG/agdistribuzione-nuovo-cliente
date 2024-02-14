<?php
$message = "";

if($_SERVER['REQUEST_METHOD'] === 'POST'){
	$codice_agente = isset( $_POST['codice_agente']) ? $_POST['codice_agente'] : '';
    $email_agente = isset( $_POST['email_agente']) ? $_POST['email_agente'] : '';
	$listino = isset( $_POST['listino']) ? $_POST['listino'] : '';
	$condizioni_pagamento = isset( $_POST['condizioni_pagamento']) ? $_POST['condizioni_pagamento'] : '';
	$agency_type = isset( $_POST['agency_type']) ? $_POST['agency_type'] : '';
	$titolare = isset( $_POST['titolare']) ? $_POST['titolare'] : '';
	$denominazione = isset( $_POST['denominazione']) ? $_POST['denominazione'] : '';
	$attivita = isset( $_POST['attivita']) ? $_POST['attivita'] : '';
	$tel = isset( $_POST['tel']) ? $_POST['tel'] : '';
	$email_cliente = isset( $_POST['email_cliente']) ? $_POST['email_cliente'] : '';
	$pec = isset( $_POST['pec']) ? $_POST['pec'] : '';
	$closing_day = isset( $_POST['closing_day']) ? $_POST['closing_day'] : [];
	$closing_day_details = isset( $_POST['closing_day_details']) ? $_POST['closing_day_details'] : '';
	$address = isset( $_POST['address']) ? $_POST['address'] : '';
	$cap = isset( $_POST['cap']) ? $_POST['cap'] : '';
	$province = isset( $_POST['province']) ? $_POST['province'] : '';
	$city = isset( $_POST['city']) ? $_POST['city'] : '';
	$vat = isset( $_POST['vat']) ? $_POST['vat'] : '';
	$unique_code = isset( $_POST['unique_code']) ? $_POST['unique_code'] : '';
	$merci_address = isset( $_POST['merci_address']) ? $_POST['merci_address'] : '';
	$merci_cap = isset( $_POST['merci_cap']) ? $_POST['merci_cap'] : '';
	$merci_province = isset( $_POST['merci_province']) ? $_POST['merci_province'] : '';
	$merci_city = isset( $_POST['merci_city']) ? $_POST['merci_city'] : '';
	$banca_appoggio = isset( $_POST['banca_appoggio']) ? $_POST['banca_appoggio'] : '';
	$banca_agenzia = isset( $_POST['banca_agenzia']) ? $_POST['banca_agenzia'] : '';
	$iban = isset( $_POST['iban']) ? $_POST['iban'] : '';
	$responsabile = isset( $_POST['responsabile']) ? $_POST['responsabile'] : '';
	$message_note = isset( $_POST['message_note']) ? $_POST['message_note'] : '';
	
    $privacy_accept_1 = isset( $_POST['privacy_accept_1']) ? $_POST['privacy_accept_1'] : '';
	$privacy_accept_2 = isset( $_POST['privacy_accept_2']) ? $_POST['privacy_accept_2'] : '';
	$array_closing_day = implode(", ", $closing_day);

	$to = "riccardo.burderi@aghoreca.com"; // ordinierregi@gmail.com
	$from = "info@agdistribuzione.com";
	$subject = "Inserimento nuovo cliente";
	$htmlBody = "<!DOCTYPE html>
	<html>
	<head>
	<meta charset='utf-8'>
	<style type='text/css'>
        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }
        
        td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        }
        
        tr:nth-child(even) {
        background-color: #dddddd;
        }
	</style>
	</head>
    <body>
		<table>
			<tr><td><img src='https://www.agdistribuzione.it/images/template/agdistribuzione.jpg' width='200' /></td> <td><h3>Inserimento Nuovo Cliente</h3></td></tr>
				
				<tr><td colspan='2'><h3>Dettagli Agente, Listino e Condizioni di Pagamento</h3></td></tr>
				<tr><td>Codice Agente</td> <td>$codice_agente</td></tr>
				<tr><td>Listino</td> <td>$listino</td></tr>
				<tr><td>Condizioni Pagamento</td> <td>$condizioni_pagamento</td></tr>
				
				<tr><td colspan='2'><h3>Dettagli Cliente</h3></td></tr>
				<tr><td>Tipologia Azienda</td> <td>$agency_type</td></tr>
				<tr><td>Titolare</td> <td>$titolare</td></tr>
				<tr><td>Denominazione Commerciale</td> <td>$denominazione</td></tr>
				<tr><td>Tipo di Attivit&agrave;</td> <td>$attivita</td></tr>
				<tr><td>Tel</td> <td>$tel</td></tr>
				<tr><td>Email</td> <td>$email_cliente</td></tr>
				<tr><td>PEC</td> <td>$pec</td></tr>
				
				<tr><td colspan='2'><h3>Indirizzo di Fatturazione</h3></td></tr>
				<tr><td>Partita Iva</td> <td>$vat</td></tr>
				<tr><td>Codice Univoco</td> <td>$unique_code</td></tr>
				<tr><td>Indirizzo Fatturazione</td> <td>$address</td></tr>
				<tr><td>Cap</td> <td>$cap</td></tr>
				<tr><td>Citt&agrave;</td> <td>$city</td></tr>
				<tr><td>Provincia</td> <td>$province</td></tr>
				
				
				<tr><td colspan='2'><h3>Indirizzo di Consegna</h3></td></tr>
				<tr><td>Indirizzo Destinazione Merci</td> <td>$merci_address</td></tr>
				<tr><td>Cap</td> <td>$merci_cap</td></tr>
				<tr><td>Citt&agrave;</td> <td>$merci_city</td></tr>
				<tr><td>Provincia </td> <td>$merci_province</td></tr>
				
				<tr><td>Giorni di Chiusura</td> <td>$array_closing_day</td></tr>
				<tr><td>Dettagli info giorni Chiusura</td> <td>$closing_day_details</td></tr>
				
				<tr><td colspan='2'><h3>Dati Bancari</h3></td></tr>
				<tr><td>Banca di Appoggio</td> <td>$banca_appoggio</td></tr>
				<tr><td>Agenzia</td> <td>$banca_agenzia</td></tr>
				<tr><td>IBAN</td> <td>$iban</td></tr>
				
				<tr><td colspan='2'><h3>Dati Responsabile</h3></td></tr>
				<tr><td>Responsabile</td> <td>$responsabile</td></tr>
				
				<tr><td>Note</td> <td>$message_note</td></tr>

				<tr><td colspan='2'><h3>Presa visione sulla privacy</h3></td></tr>
				<tr><td>relativamente al punto 1.A</td> <td>$privacy_accept_1</td></tr>
				<tr><td>relativamente al punto 1.B</td> <td>$privacy_accept_2</td></tr>
            </table>
        </body>
	</html>";

	// Boundary  
	$semi_rand = md5(time());  
	$mime_boundary = "=={$semi_rand}"; 
	
	//header section
/* 	$headers = array( "MIME-Version: 1.0",
		"From: info@agdistribuzione.com", 
		"Reply-To: info@agdistribuzione.com",
		//"Content-Type: multipart/mixed;",
		//"boundary=\"{$mime_boundary}\""."\n",
		//"X-Mailer: PHP/" . phpversion() . "\n",
		//"cc: rita.alescio@adtradingsrl.eu, ". $email_agente,
		//"Content-Type: text/html; charset=UTF-8",
		//"Content-Transfer-Encoding: quoted-printable\n",
    );	
	$headers = implode("\n", $headers); */

	$headers = "MIME-Version: 1.0\n";
	$headers .= "From: info@agdistribuzione.com\n";
	$headers .= "Reply-To: info@agdistribuzione.com\n";

	if(!empty(isset($_FILES['documento']) && $_FILES['documento']['error'] == 0) ||
		!empty(isset($_FILES['codfiscale']) && $_FILES['codfiscale']['error'] == 0) ||
		!empty(isset($_FILES['visuracam']) && $_FILES['visuracam']['error'] == 0)
	) {
        $headers .= "Content-type: multipart/mixed; boundary=\"".$mime_boundary."\"\n";
    } else {
        $headers .= "Content-type: text/html; charset=iso-8859-1\n";
    }

	//message section	
	$message = $htmlBody;	
	// check if file has correct exension
	// $mimes = array('application/pdf', 'application/zip', 'application/vnd.rar', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'text/csv', 'text/tsv', 'image/jpg', 'image/jpeg', 'image/png','image/gif');
	// if(array_key_exists('upfile', $_FILES['documento']['type'])) {
	// 	echo "Mime type valid";
	// }

	//upload document section
	if(!empty(isset($_FILES))) {
		$output = "--{$mime_boundary}\n";
		$output .= "Content-type: text/html; charset=iso-8859-1\n";
		$output .= "Content-Transfer-Encoding: quoted-printable\n\n";
		$output .= $htmlBody;
		$output .= "\n\n";

		if (isset($_FILES['documento'])) {
			$tmp_name = $_FILES['documento']['tmp_name']; // get the name of the file
			$name = $_FILES['documento']['name']; // get the name of the file
			$size = $_FILES['documento']['size']; // get size of the file for size validation
			$type = $_FILES['documento']['type']; // get type of the file
			$error = $_FILES['documento']['error']; // get the error (if any)
			
			
			$handle = fopen($tmp_name, "r"); // set the file handle only for reading the file
			$content = fread($handle, $size); // reading the file
			fclose($handle);                 // close upon completion
			
			$encoded_content = chunk_split(base64_encode($content));
			
			$output .= "--{$mime_boundary}\n\n";
			$output .="Content-Type: " .$type. "; name=\"".$name."\"\n";
			$output .="Content-Description: ".$name."\n";
			$output .="Content-Disposition: attachment;\n" . "filename=\"".$name."\"\n" ;
			$output .="Content-Transfer-Encoding: base64\n\n".$encoded_content. "\n\n";
		}

		if (isset($_FILES['codfiscale'])) {
			$tmp_name = $_FILES['codfiscale']['tmp_name']; // get the name of the file
			$name = $_FILES['codfiscale']['name']; // get the name of the file
			$size = $_FILES['codfiscale']['size']; // get size of the file for size validation
			$type = $_FILES['codfiscale']['type']; // get type of the file
			$error = $_FILES['codfiscale']['error']; // get the error (if any)
			
			
			$handle = fopen($tmp_name, "r"); // set the file handle only for reading the file
			$content = fread($handle, $size); // reading the file
			fclose($handle);                 // close upon completion
			
			$encoded_content = chunk_split(base64_encode($content));
			
			$output .= "--{$mime_boundary}\n\n";
			$output .="Content-Type: " .$type. "; name=\"".$name."\"\n";
			$output .="Content-Description: ".$name."\n";
			$output .="Content-Disposition: attachment;\n" . "filename=\"".$name."\"\n" ;
			$output .="Content-Transfer-Encoding: base64\n\n".$encoded_content. "\n\n";
		}

		if (isset($_FILES['visuracam'])) {
			$tmp_name = $_FILES['visuracam']['tmp_name']; // get the name of the file
			$name = $_FILES['visuracam']['name']; // get the name of the file
			$size = $_FILES['visuracam']['size']; // get size of the file for size validation
			$type = $_FILES['visuracam']['type']; // get type of the file
			$error = $_FILES['visuracam']['error']; // get the error (if any)
			
			
			$handle = fopen($tmp_name, "r"); // set the file handle only for reading the file
			$content = fread($handle, $size); // reading the file
			fclose($handle);                 // close upon completion
			
			$encoded_content = chunk_split(base64_encode($content));
			
			$output .= "--{$mime_boundary}\n\n";
			$output .="Content-Type: " .$type. "; name=\"".$name."\"\n";
			$output .="Content-Description: ".$name."\n";
			$output .="Content-Disposition: attachment;\n" . "filename=\"".$name."\"\n" ;
			$output .="Content-Transfer-Encoding: base64\n\n".$encoded_content. "\n\n";
		}

		return mail($to, $subject, $output, $headers);
	} else {
		return mail($to, $subject, $message, $headers);
	}

	$output .= "--{$mime_boundary}";

	if ($result) {
		echo '<script type="text/javascript">alert("Your Message was sent Successfully!");</script>';
		echo '<script type="text/javascript">window.location.href = window.location.href;</script>';
	}else{
		echo '<script type="text/javascript">alert("Sorry! Message was not sent, Try again Later.");</script>';
		echo '<script type="text/javascript">window.location.href = window.location.href;</script>';
	}
}