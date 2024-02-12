<?php
$message = ""; 
$codiceagente_error = "";         
$codice_agente = "";

if($_SERVER['REQUEST_METHOD'] === 'POST'){
	$codice_agente = isset( $_POST['codice_agente']) ? $_POST['codice_agente'] : '';
    $email_agente = isset( $_POST['emial_agente']) ? $_POST['emial_agente'] : '';
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

	$to = "riccardo.burderi@gmail.com"; // ordinierregi@gmail.com
	$from = "info@agdistribuzione.com";
	$message = "<!DOCTYPE html>
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
    
    //concat the uploaded files to message
    // $message .= $upload_documento_attachment;
    // $message .= $upload_cod_fiscale_attachment;
    // $message .= $upload_visura_cam_attachment;

	$subject = "Inserimento nuovo cliente";
	
	// Set content-type header to send HTML email 
    $random_hash = md5(date('r', time())); 
    $attachment = chunk_split(base64_encode(file_get_contents($_FILES['$upload_documento']['name']))); 

    // TODO visit https://www.geeksforgeeks.org/php-send-attachment-email/
	$headers = array( "MIME-Version: 1.0" ,
        "Content-Type: multipart/mixed;\n",
        " boundary=\"PHP-mixed-".$random_hash."\"",
        "Content-Transfer-Encoding: 7bit\n\n",
		"Content-type: text/html; charset=iso-8859-1",
		"From: info@agdistribuzione.com",
		"Reply-To: info@agdistribuzione.com",
		"X-Mailer: PHP/" . phpversion(),
		//"cc: rita.alescio@adtradingsrl.eu"
    );
    // upload documents
    // $upload_documento='';
    // $upload_documento_attachment='';
    // if ($_FILES['$upload_documento']['error'] != 4 && ($_FILES['$upload_documento']['size'] != 0 && $_FILES['$upload_documento']['error'] != 0)) {
    //     $upload_documento = $_FILES['$upload_documento'];
    //     $upload_documento_attachment=prepareAttachment($upload_documento["tmp_name"],$upload_documento["tmp_name"]["name"]);
    // }
    // $upload_cod_fiscale='';
    // $upload_cod_fiscale_attachment='';
    // if ($_FILES['$upload_cod_fiscale']['error'] != 4 && ($_FILES['$upload_cod_fiscale']['size'] != 0 && $_FILES['$upload_cod_fiscale']['error'] != 0)) {
    //     $upload_cod_fiscale = $_FILES['$upload_cod_fiscale'];
    //     $upload_cod_fiscale_attachment=prepareAttachment($upload_cod_fiscale["tmp_name"],$upload_cod_fiscale["tmp_name"]["name"])
    // }
    // $upload_visura_cam='';
    // $upload_visura_cam_attachment='';
    // if ($_FILES['$upload_visura_cam']['error'] != 4 && ($_FILES['$upload_visura_cam']['size'] != 0 && $_FILES['$upload_visura_cam']['error'] != 0)) {
    //     $upload_visura_cam = $_FILES['$upload_visura_cam'];
    //     $upload_visura_cam_attachment=prepareAttachment($upload_visura_cam["tmp_name"],$upload_visura_cam["tmp_name"]["name"])
    // }
	$headers = implode("\r\n", $headers);
    //$result = 1;
	$result = mail($to, $subject, $message, $headers, $from);
	if ($result) {
		echo '<script type="text/javascript">alert("Your Message was sent Successfully!");</script>';
		echo '<script type="text/javascript">window.location.href = window.location.href;</script>';
		//echo $message;
		echo $upload_documento_attachment;


	}else{
		// $message = "Sorry! Message was not sent, Try again Later.";
		echo '<script type="text/javascript">alert("Sorry! Message was not sent, Try again Later.");</script>';
		echo '<script type="text/javascript">window.location.href = window.location.href;</script>';
	}
}

function prepareAttachment( $filename, $fileorgname) {
    $semi_rand = md5(time()); 
    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
    $attachContent = '';
    $file = fopen($filename,"rb");
    $data = fread($file,filesize($filename));
    fclose($file);
    $cvData = chunk_split(base64_encode($data));
    $attachContent .= "Content-Type: {\"application/octet-stream\"};\n" . " name=\"$fileorgname\"\n" . 
    "Content-Disposition: attachment;\n" . " filename=\"$fileorgname\"\n" . 
    "Content-Transfer-Encoding: base64\n\n" . $cvData . "\n\n";
    $attachContent .= "--{$mime_boundary}\n"; 
    return $attachContent;
}
?>