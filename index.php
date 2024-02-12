
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
    <script>
        const uploadDocumento = document.getElementById("upload_documento");
        const uploadCodFiscale = document.getElementById("upload_cod_fiscale");
        const uploadVisuraCam = document.getElementById("upload_visura_cam");

        function checkFileSizes(e) {
            console.log(e.target.files);
            if (e.target.files[0].size > 12582912) {
                alert("Dimensioni file troppo grandi");
                e.target.value='';
            }
        }
    </script>
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
                <!-- Info Agente -->    
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
                <!-- Fine Info Agente -->
                <!-- Dettagli Cliente -->
                <div class="sectionHeader">
                    <p>
                        <strong>Dettagli Cliente</strong>
                    </p>
                </div>
                <div class="separator"></div>
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
                <div class="inputGroupContainer">
                    <div class="inputContainer">
                        <label for="titolare">Titolare o Ditta<div class="labelStrong">obbligatorio</div></label>
                        <input type="text" id="titolare" name="titolare" placeholder="Titolare o Ditta*">
                    </div>
                    <div class="inputContainer">
                        <label for="denominazione">Denominazione Commerciale / Insegna</label>
                        <input type="text" id="denominazione" name="denominazione" placeholder="Denominazione Commerciale / Insegna*">
                    </div>
                </div>
                <!-- 1 input select + 1 input text -->
                <div class="inputGroupContainer">
                    <div class="inputContainer maxWidthSelect">
                        <label for="attivita">Tipologia di Attività<div class="labelStrong">obbligatorio</div></label>
                        <select class="inputSelect" name="attivita" id="attivita">
                            <option value="">Seleziona</option>
                        <option value="AGRITURISMI (28)">AGRITURISMI (28)</option>
                        <option value="ALIMENTARI (03)">ALIMENTARI (03)</option>
                        <option value="AMBULANTI (04)">AMBULANTI (04)</option>
                        <option value="ARTIGIANI / COMMERCIANTI NON ALIMENTARI (26)">ARTIGIANI / COMMERCIANTI NON ALIMENTARI (26)</option>
                        <option value="ASSOCIAZIONI/CLUB/PALESTRE (15)">ASSOCIAZIONI/CLUB/PALESTRE (15)</option>
                        <option value="AZ.AGRICOLE (18)">AZ.AGRICOLE (18)</option>
                        <option value="BAR/PASTICCERIE/GELATERIE (24)">BAR/PASTICCERIE/GELATERIE (24)</option>
                        <option value="BAR/TABACCHI (10)">BAR/TABACCHI (10)</option>
                        <option value="CASE DI RIPOSO/COOP SOCIALI/ACCOGLIENZA (27)">CASE DI RIPOSO/COOP SOCIALI/ACCOGLIENZA (27)</option>
                        <option value="CHIOSCHI (61)">CHIOSCHI (61)</option>
                        <option value="DISCOTECHE (17)">DISCOTECHE (17)</option>
                        <option value="ENOTECHE (33)">ENOTECHE (33)</option>
                        <option value="ENTI PUBBLICI/PRIVATI/PARROCCHIE (30)">ENTI PUBBLICI/PRIVATI/PARROCCHIE (30)</option>
                        <option value="FABBRICHE/INDUSTRIE (29)">FABBRICHE/INDUSTRIE (29)</option>
                        <option value="FORNITORI (06)">FORNITORI (06)</option>
                        <option value="GENERICI (09)">GENERICI (09)</option>
                        <option value="GROSSISTI (01)">GROSSISTI (01)</option>
                        <option value="HOTEL/B&B/RESORT/CAMPEGGIO (32)">HOTEL/B&B/RESORT/CAMPEGGIO (32)</option>
                        <option value="MACELLERIE (13)">MACELLERIE (13)</option>
                        <option value="NON ALIMENTARI/CASALINGHI (20)">NON ALIMENTARI/CASALINGHI (20)</option>
                        <option value="PANIFICI/ROSTICCERIE (14)">PANIFICI/ROSTICCERIE (14)</option>
                        <option value="PESCHERIE (21)">PESCHERIE (21)</option>
                        <option value="PUB/PANINERIA (11)">PUB/PANINERIA (11)</option>
                        <option value="RISTORANTI/PIZZERIE (12)">RISTORANTI/PIZZERIE (12)</option>
                        <option value="SELF-SERVICE (25)">SELF-SERVICE (25)</option>
                        <option value="STABILIMENTI BALNEARI (63)">STABILIMENTI BALNEARI (63)</option>
                        <option value="STUDI MEDICI /FARMACIA /PARAFARMACIA (19)">STUDI MEDICI /FARMACIA /PARAFARMACIA (19)</option>
                        <option value="SUSHI (22)">SUSHI (22)</option>
                        <option value="VENDING/DISTRIB. AUTOMATICA (16)">VENDING/DISTRIB. AUTOMATICA (16)</option>
                        </select>
                    </div>
                    <div class="inputContainer">
                        <label for="tel">Tel<div class="labelStrong">obbligatorio</div></label>
                        <input type="text" id="tel" name="tel" placeholder="Numero di Telefono">
                    </div>
                </div>
                <div class="inputGroupContainer">
                    <div class="inputContainer">
                        <label for="email">Email<div class="labelStrong">obbligatorio</div></label>
                        <input type="text" id="email" name="email" placeholder="Indirizzo Email*">
                    </div>
                    <div class="inputContainer">
                        <label for="pec">PEC</label>
                        <input type="text" id="pec" name="pec" placeholder="Indirizzo PEC*">
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
                
                <div class="inputContainer inputTextArea">
                    <label for="info_chiusura" style="text-align: center;">Maggiori info sui giorni di chiusura</label>
                    <textarea name="info_chiusura" id="info_chiusura" rows="5" cols="50" placeholder="Da compilare esclusivamente per specificare maggiori dettagli sui giorni di chiusura come ad esempio chiusure metà giornata o chiusure nei weekend"></textarea>
                </div>
                <!-- Fine Dettagli Cliente -->

                <!-- Indirizzo di fatturazione -->
                <div class="sectionHeader">
                    <p>
                        <strong>Indirizzo di Fatturazione</strong>
                    </p>
                </div>
                <div class="separator"></div>
                <div class="spacer"></div>
                <div class="inputGroupContainer">
                    <div class="inputContainer">
                        <label for="address">Indirizzo Fatturazione<div class="labelStrong">obbligatorio</div></label>
                        <input type="text" id="address" name="address" placeholder="Indirizzo Fatturazione*">
                    </div>
                    <div class="inputContainer">
                        <label for="cap">Cap<div class="labelStrong">obbligatorio</div></label>
                        <input type="text" id="cap" name="cap" placeholder="Cap*">
                    </div>
                </div>
                <div class="inputGroupContainer">
                    <div class="inputContainer">
                        <label for="province">Provincia<div class="labelStrong">obbligatorio</div></label>
                        <select class="inputSelect" name="province" id="province"> 
                            <option value>Selezione</option>
                            <option value>Selezione</option>
                            <option value>Selezione</option>
                            <option value>Selezione</option>
                            <option value>Selezione</option>
                            <option value>Selezione</option>
                        </select>
                    </div>
                    <div class="inputContainer">
                        <label for="city">Città<div class="labelStrong">obbligatorio</div></label>
                        <input type="text" id="city" name="city" placeholder="Città*">
                    </div>
                </div>
                <!-- Fine Indirizzo di fatturazione -->
                
                <!-- Indirizzo di Consegna -->
                <div class="sectionHeader">
                    <p>
                        <strong>Indirizzo di Consegna</strong>
                    </p>
                </div>
                <div class="separator"></div>
                <div class="spacer"></div>
                <div class="inputGroupContainer">
                    <div class="inputContainer">
                        <label for="merci_address">Indirizzo Destinazione Merci</label>
                        <input type="text" id="merci_address" name="merci_address" placeholder="Indirizzo Destinazione Merci">
                    </div>
                    <div class="inputContainer">
                        <label for="merci_cap">Cap</label>
                        <input type="text" id="merci_cap" name="merci_cap" placeholder="Cap">
                    </div>
                </div>
                <div class="inputGroupContainer">
                    <div class="inputContainer">
                        <label for="province">Provincia</label>
                        <select class="inputSelect" name="province" id="province"> 
                            <option value>Selezione</option>
                            <option value>Selezione</option>
                            <option value>Selezione</option>
                            <option value>Selezione</option>
                            <option value>Selezione</option>
                            <option value>Selezione</option>
                        </select>
                    </div>
                    <div class="inputContainer">
                        <label for="merci_prov">Indirizzo Destinazione Merci</label>
                        <input type="text" id="merci_prov" name="merci_prov" placeholder="Indirizzo Destinazione Merci*">
                    </div>
                </div>
                <!-- Fine Indirizzo di Consegna -->
                
                <!-- Dati Bancari -->
                <div class="sectionHeader">
                    <p>
                        <strong>Dati Bancari</strong>
                    </p>
                </div>
                <div class="separator"></div>
                <div class="spacer"></div>
                <div class="inputGroupContainer">
                    <div class="inputContainer">
                        <label for="banca_appoggio">Banca di Appoggio</label>
                        <input type="text" id="banca_appoggio" name="banca_appoggio" placeholder="Banca di Appoggio">
                    </div>
                    <div class="inputContainer">
                        <label for="banca_agenzia">Agenzia</label>
                        <input type="text" id="banca_agenzia" name="banca_agenzia" placeholder="Agenzia">
                    </div>
                </div>
                <div class="inputGroupContainer">
                    <div class="inputContainer halfInput">
                        <label for="iban">IBAN</label>
                        <input type="text" id="iban" name="iban" placeholder="Indirizzo Destinazione Merci">
                    </div>
                </div>

                <!-- Fine Dati Bancari -->

                <!-- Dati Responsabile -->
                <div class="sectionHeader">
                    <p>
                        <strong>Dati Responsabile / Amministratore Società</strong>
                    </p>
                </div>
                <div class="separator"></div>
                <div class="spacer"></div>
                <div class="inputGroupContainer">
                    <div class="inputContainer">
                        <label for="responsabile">Responsabilità Società<div class="labelStrong">obbligatorio</div></label>
                        <input type="text" id="responsabile" name="responsabile" placeholder="Responsabilità Società">
                    </div>
                </div>
                <div class="inputGroupContainer inputFileGroupContainer">
                    <div class="inputContainer inputFile">
                        <label for="upload_documento"><strong>Invia Documento d'identità </br>(Max 12Mb - PDF, JPG, PNG, ZIP, RAR, DOC, DOCX)</strong></label>
                        <input type="file" onchange="return checkFileSizes(event)" id="upload_documento" name="upload_documento" accept=".pdf, .jpg, .png, .zip, .rar, .doc, .docx">
                    </div>
                    <div class="inputContainer inputFile">
                        <label for="upload_cod_fiscale"><strong>Invia Codice Fiscale </br>(Max 12Mb - PDF, JPG, PNG, ZIP, RAR, DOC, DOCX)</strong></label>
                        <input type="file" onchange="return checkFileSizes(event)" id="upload_cod_fiscale" name="upload_cod_fiscale" accept=".pdf, .jpg, .png, .zip, .rar, .doc, .docx">
                    </div>
                </div>
                <div class="inputGroupContainer">
                    <div class="inputContainer inputFile halfInput">
                        <label for="upload_visura_cam"><strong>Invia Visura Camerale </br>(Max 12Mb - PDF, JPG, PNG, ZIP, RAR, DOC, DOCX)</strong></label>
                        <input type="file" onchange="return checkFileSizes(event)" id="upload_visura_cam" name="upload_visura_cam" accept=".pdf, .jpg, .png, .zip, .rar, .doc, .docx">
                    </div>
                </div>
                <!-- Fine Dati Responsabile -->
                
                <!-- Privacy -->
                <div class="sectionHeader">
                    <p>
                        <strong>Accetta la normatica sulla privacy</strong>
                    </p>
                </div>
                <div class="separator"></div>
                <div class="spacer"></div>
                <div class="inputContainer inputTextArea">
                    <label for="message" style="align-self: flex-start">Note</label>
                    <textarea name="message" id="message" rows="5" cols="50" placeholder="Note"></textarea>
                </div>

                <div>
                    <p>Presa visione dell'informativa sulla privacy, da consultare a <a href="https://www.agdistribuzione.it/privacy.html" target="_blank">questo link</a></p>
                    <div class="privacySection">
                        <div>
                            <label>relativamente al punto 1.A<div class="labelStrong">obbligatorio</div></label>
                            <label class="radioInput" for="privacy_accept_1">
                            <input type="checkbox" name="privacy_accept_1" value="privacy_accept_1" id="privacy_accept_1">
                                Presto il consenso
                            </label>
                        </div>
                        <div>
                            <label>relativamente al punto 1.B<div class="labelStrong">obbligatorio</div></label>
                            <label class="radioInput" for="privacy_accept_2_1">
                            <input type="radio" name="privacy_accept_2" value="privacy_accept_2_1" id="privacy_accept_2_1">
                                Presto il consenso
                            </label>
                            <label class="radioInput" for="privacy_accept_2_2">
                            <input type="radio" name="privacy_accept_2" value="privacy_accept_2_2" id="privacy_accept_2_2">
                                Nego il consenso
                            </label>
                        </div>
                    </div>
                </div>
                <!-- Fine Privacy -->

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