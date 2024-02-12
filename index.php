
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserimento Nuovo Cliente - AG Distribuzione, Leader HO.RE.CA. per la Sicilia sud-orientale</title>
    <link href="./resources/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
    <link rel="stylesheet" href="./resources/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&display=swap|Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <div class="mainContainer">
        <div class="titleContainer">
            <h2>INSERIMENTO NUOVO CLIENTE</h2>
        </div>
        <div class="subtitleContainer">
            <p>
                Compila il form sottostante per inserimento nuovo cliente.
            </p>
        </div>
        <!-- TODO add message of success "Tutti i dati sono stati inviati correttamente. Grazie." -->
        <div class="formContainer">
            <?php include "sendmail.php"; ?>
            <!-- TODO change action to action="https://www.agdistribuzione.it/agenti/nuovo-cliente" -->
            <!-- onsubmit="return handleSubmit(event)"-->
            <form method="post" id="nuovoClienteForm" enctype="multipart/form-data">
                <div class="inputGroupContainer">
                    <div class="inputContainer">
                        <label for="codice_agente">Codice Agente<div class="labelStrong">obbligatorio</div></label>
                        <input type="text" id="codice_agente" name="codice_agente" placeholder="Codice Agente*">
                    </div>
                    <div class="inputContainer">
                        <label for="listino">Listino<div class="labelStrong">obbligatorio</div></label>
                        <select class="inputSelect" name="listino" id="listino">
                            <option value>Selezione</option>
                            <option value="4A">4A</option>
                            <option value="5A">5A</option>
                            <option value="6A">6A</option>
                        </select>
                    </div>
                </div>
                <div class="inputGroupContainer">
                    <div class="inputContainer">
                        <label for="condizioni_pagamento">Condizioni Pagamento<div class="labelStrong">obbligatorio</div></label>
                        <input type="text" id="condizioni_pagamento" name="condizioni_pagamento" placeholder="Condizioni Pagamento*">
                    </div>
                </div>
                <div class="sectionHeader">
                    <p>
                        <strong>Dettagli Cliente</strong>
                    </p>
                </div>
                <div class="inputContainer radioContainer">
                    <label for="agency_type">Se società barrare</label>
                    <div>
                        <label class="radioInput" for="agency_type_0">
                            <input type="radio" name="agency_type" value="SAS" id="agency_type_0">
                            SAS
                        </label>
                        <label class="radioInput" for="agency_type_1">
                            <input type="radio" name="agency_type" value="SNC" id="agency_type_1">
                            SNC
                        </label>
                        <label class="radioInput" for="agency_type_2">
                            <input type="radio" name="agency_type" value="SRL" id="agency_type_2">
                            SRL
                        </label>
                        <label class="radioInput" for="agency_type_3">
                            <input type="radio" name="agency_type" value="SPA" id="agency_type_3">
                            SPA
                        </label>
                        <label class="radioInput" for="agency_type_4">
                            <input type="radio" name="agency_type" value="COOP ARL" id="agency_type_4">
                            COOP ARL
                        </label>
                        <label class="radioInput" for="agency_type_5">
                            <input type="radio" name="agency_type" value="Altro" id="agency_type_5">
                            Altro
                        </label>
                    </div>
                </div>
                <div class="inputContainer radioContainer">
                    <label for="closing_day" class="normalLabel">Giorni di chiusura</label>
                    <div>
                        <label class="radioInput" for="closing_day_0">
                            <input type="checkbox" name="closing_day[]" value="Lun" id="closing_day_0">
                            Lun
                        </label>
                        <label class="radioInput" for="closing_day_1">
                            <input type="checkbox" name="closing_day[]" value="Mar" id="closing_day_1">
                            Mar
                        </label>
                        <label class="radioInput" for="closing_day_2">
                            <input type="checkbox" name="closing_day[]" value="Mer" id="closing_day_2">
                            Mer
                        </label>
                        <label class="radioInput" for="closing_day_3">
                            <input type="checkbox" name="closing_day[]" value="Gio" id="closing_day_3">
                            Gio
                        </label>
                        <label class="radioInput" for="closing_day_4">
                            <input type="checkbox" name="closing_day[]" value="Ven" id="closing_day_4">
                            Ven
                        </label>
                        <label class="radioInput" for="closing_day_5">
                            <input type="checkbox" name="closing_day[]" value="Sab" id="closing_day_5">
                            Sab
                        </label>
                        <label class="radioInput" for="closing_day_6">
                            <input type="checkbox" name="closing_day[]" value="Dom" id="closing_day_5">
                            Dom
                        </label>
                    </div>
                </div>
                <!-- Submit Section -->
                <div class="submitContainer">
                    <input type="submit" name="formSend" id="Send" class="sendButton sendFormData" value="Invia">
                    <input type="submit" name="formSend" id="Send" class="sendButton sendButton-black sendFormDataReset" onclick="resetForm()" value="Reset">
                </div>
            </form>
        </div>
    </div>
</body>
<script src="./resources/main.js"></script>
</html>