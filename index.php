<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserimento Nuovo Cliente - AG Distribuzione, Leader HO.RE.CA. per la Sicilia sud-orientale</title>
    <link href="./resources/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
    <link href="./resources/style.css" rel="preload stylesheet" as="style" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&display=swap|Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="preload" as="style">
    <script>
        const uploadDocumento = document.getElementById("upload_documento");
        const uploadCodFiscale = document.getElementById("upload_cod_fiscale");
        const uploadVisuraCam = document.getElementById("upload_visura_cam");

        function checkFileSizes(e) {
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
                        <input type="text" id="codice_agente" name="codice_agente" placeholder="Codice Agente*" required>
                    </div>
                    <div class="inputContainer">
                        <label for="listino">Listino<div class="labelStrong">obbligatorio</div></label>
                        <select class="inputSelect" name="listino" id="listino" required> 
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
                        <input type="text" id="condizioni_pagamento" name="condizioni_pagamento" placeholder="Condizioni Pagamento*" required>
                    </div>
                    <div class="inputContainer">
                        <label for="email_agente">Email Agente</label>
                        <input type="email" id="email_agente" name="email_agente" placeholder="Email Agente*">
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
                        <input type="text" id="titolare" name="titolare" placeholder="Titolare o Ditta*" required>
                    </div>
                    <div class="inputContainer">
                        <label for="denominazione">Denominazione Commerciale / Insegna</label>
                        <input type="text" id="denominazione" name="denominazione" placeholder="Denominazione Commerciale / Insegna*">
                    </div>
                </div>
                <div class="inputGroupContainer">
                    <div class="inputContainer maxWidthSelect">
                        <label for="attivita">Tipologia di Attività<div class="labelStrong">obbligatorio</div></label>
                        <select class="inputSelect" name="attivita" id="attivita" required>
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
                        <input type="text" id="tel" name="tel" placeholder="Numero di Telefono" required>
                    </div>
                </div>
                <div class="inputGroupContainer">
                    <div class="inputContainer">
                        <label for="email_cliente">Email<div class="labelStrong">obbligatorio</div></label>
                        <input type="email_cliente" id="email_cliente" name="email_cliente" placeholder="Indirizzo Email*" required>
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
                    <label for="closing_day_details" style="text-align: center;">Maggiori info sui giorni di chiusura</label>
                    <textarea name="closing_day_details" id="closing_day_details" rows="5" cols="50" placeholder="Da compilare esclusivamente per specificare maggiori dettagli sui giorni di chiusura come ad esempio chiusure metà giornata o chiusure nei weekend"></textarea>
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
                        <input type="text" id="address" name="address" placeholder="Indirizzo Fatturazione*" required>
                    </div>
                    <div class="inputContainer">
                        <label for="cap">Cap<div class="labelStrong">obbligatorio</div></label>
                        <input type="text" id="cap" name="cap" placeholder="Cap*" required pattern="[0-9]{5}">
                    </div>
                </div>
                <div class="inputGroupContainer">
                    <div class="inputContainer">
                        <label for="province">Provincia<div class="labelStrong">obbligatorio</div></label>
                        <select class="inputSelect" name="province" id="province" required> 
                            <option value="">Seleziona la Provincia</option><option value="AGRIGENTO">AGRIGENTO</option><option value="ALESSANDRIA">ALESSANDRIA</option><option value="ANCONA">ANCONA</option><option value="AOSTA">AOSTA</option><option value="AREZZO">AREZZO</option><option value="ASCOLI PICENO">ASCOLI PICENO</option><option value="ASTI">ASTI</option><option value="AVELLINO">AVELLINO</option><option value="BARI">BARI</option><option value="BARLETTA-ANDRIA-TRANI">BARLETTA-ANDRIA-TRANI</option><option value="BELLUNO">BELLUNO</option><option value="BENEVENTO">BENEVENTO</option><option value="BERGAMO">BERGAMO</option><option value="BIELLA">BIELLA</option><option value="BOLOGNA">BOLOGNA</option><option value="BOLZANO">BOLZANO</option><option value="BRESCIA">BRESCIA</option><option value="BRINDISI">BRINDISI</option><option value="CAGLIARI">CAGLIARI</option><option value="CALTANISSETTA">CALTANISSETTA</option><option value="CAMPOBASSO">CAMPOBASSO</option><option value="CARBONIA-IGLESIAS">CARBONIA-IGLESIAS</option><option value="CASERTA">CASERTA</option><option value="CATANIA">CATANIA</option><option value="CATANZARO">CATANZARO</option><option value="CHIETI">CHIETI</option><option value="COMO">COMO</option><option value="COSENZA">COSENZA</option><option value="CREMONA">CREMONA</option><option value="CROTONE">CROTONE</option><option value="CUNEO">CUNEO</option><option value="ENNA">ENNA</option><option value="FERMO">FERMO</option><option value="FERRARA">FERRARA</option><option value="FIRENZE">FIRENZE</option><option value="FOGGIA">FOGGIA</option><option value="FORLI’-CESENA">FORLI’-CESENA</option><option value="FROSINONE">FROSINONE</option><option value="GENOVA">GENOVA</option><option value="GORIZIA">GORIZIA</option><option value="GROSSETO">GROSSETO</option><option value="IMPERIA">IMPERIA</option><option value="ISERNIA">ISERNIA</option><option value="LA SPEZIA">LA SPEZIA</option><option value="L’AQUILA">L’AQUILA</option><option value="LATINA">LATINA</option><option value="LECCE">LECCE</option><option value="LECCO">LECCO</option><option value="LIVORNO">LIVORNO</option><option value="LODI">LODI</option><option value="LUCCA">LUCCA</option><option value="MACERATA">MACERATA</option><option value="MANTOVA">MANTOVA</option><option value="MASSA-CARRARA">MASSA-CARRARA</option><option value="MATERA">MATERA</option><option value="MEDIO CAMPIDANO">MEDIO CAMPIDANO</option><option value="MESSINA">MESSINA</option><option value="MILANO">MILANO</option><option value="MODENA">MODENA</option><option value="MONZA E BRIANZA">MONZA E BRIANZA</option><option value="NAPOLI">NAPOLI</option><option value="NOVARA">NOVARA</option><option value="NUORO">NUORO</option><option value="OGLIASTRA">OGLIASTRA</option><option value="OLBIA-TEMPIO">OLBIA-TEMPIO</option><option value="ORISTANO">ORISTANO</option><option value="PADOVA">PADOVA</option><option value="PALERMO">PALERMO</option><option value="PARMA">PARMA</option><option value="PAVIA">PAVIA</option><option value="PERUGIA">PERUGIA</option><option value="PESARO E URBINO">PESARO E URBINO</option><option value="PESCARA">PESCARA</option><option value="PIACENZA">PIACENZA</option><option value="PISA">PISA</option><option value="PISTOIA">PISTOIA</option><option value="PORDENONE">PORDENONE</option><option value="POTENZA">POTENZA</option><option value="PRATO">PRATO</option><option value="RAGUSA">RAGUSA</option><option value="RAVENNA">RAVENNA</option><option value="REGGIO CALABRIA">REGGIO CALABRIA</option><option value="REGGIO EMILIA">REGGIO EMILIA</option><option value="RIETI">RIETI</option><option value="RIMINI">RIMINI</option><option value="ROMA">ROMA</option><option value="ROVIGO">ROVIGO</option><option value="SALERNO">SALERNO</option><option value="SASSARI">SASSARI</option><option value="SAVONA">SAVONA</option><option value="SIENA">SIENA</option><option value="SIRACUSA">SIRACUSA</option><option value="SONDRIO">SONDRIO</option><option value="TARANTO">TARANTO</option><option value="TERAMO">TERAMO</option><option value="TERNI">TERNI</option><option value="TORINO">TORINO</option><option value="TRAPANI">TRAPANI</option><option value="TRENTO">TRENTO</option><option value="TREVISO">TREVISO</option><option value="TRIESTE">TRIESTE</option><option value="UDINE">UDINE</option><option value="VARESE">VARESE</option><option value="VENEZIA">VENEZIA</option><option value="VERBANO-CUSIO-OSSOLA">VERBANO-CUSIO-OSSOLA</option><option value="VERCELLI">VERCELLI</option><option value="VERONA">VERONA</option><option value="VIBO VALENTIA">VIBO VALENTIA</option><option value="VICENZA">VICENZA</option><option value="VITERBO">VITERBO</option>
                        </select>
                    </div>
                    <div class="inputContainer">
                        <label for="city">Città<div class="labelStrong">obbligatorio</div></label>
                        <input type="text" id="city" name="city" placeholder="Città*" required>
                    </div>
                </div>
                <div class="inputGroupContainer">
                    <div class="inputContainer">
                        <label for="vat">Partita IVA<div class="labelStrong">obbligatorio</div></label>
                        <input type="text" id="vat" name="vat" placeholder="Partita IVA*" required pattern="[0-9]{11}">
                    </div>
                    <div class="inputContainer">
                        <label for="unique_code">Codice Univoco<div class="labelStrong">obbligatorio</div></label>
                        <input type="text" id="unique_code" name="unique_code" placeholder="Codice Univoco*" required>
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
                        <label for="merci_province">Provincia</label>
                        <select class="inputSelect" name="merci_province" id="merci_province"> 
                            <option value="">Seleziona la Provincia</option><option value="AGRIGENTO">AGRIGENTO</option><option value="ALESSANDRIA">ALESSANDRIA</option><option value="ANCONA">ANCONA</option><option value="AOSTA">AOSTA</option><option value="AREZZO">AREZZO</option><option value="ASCOLI PICENO">ASCOLI PICENO</option><option value="ASTI">ASTI</option><option value="AVELLINO">AVELLINO</option><option value="BARI">BARI</option><option value="BARLETTA-ANDRIA-TRANI">BARLETTA-ANDRIA-TRANI</option><option value="BELLUNO">BELLUNO</option><option value="BENEVENTO">BENEVENTO</option><option value="BERGAMO">BERGAMO</option><option value="BIELLA">BIELLA</option><option value="BOLOGNA">BOLOGNA</option><option value="BOLZANO">BOLZANO</option><option value="BRESCIA">BRESCIA</option><option value="BRINDISI">BRINDISI</option><option value="CAGLIARI">CAGLIARI</option><option value="CALTANISSETTA">CALTANISSETTA</option><option value="CAMPOBASSO">CAMPOBASSO</option><option value="CARBONIA-IGLESIAS">CARBONIA-IGLESIAS</option><option value="CASERTA">CASERTA</option><option value="CATANIA">CATANIA</option><option value="CATANZARO">CATANZARO</option><option value="CHIETI">CHIETI</option><option value="COMO">COMO</option><option value="COSENZA">COSENZA</option><option value="CREMONA">CREMONA</option><option value="CROTONE">CROTONE</option><option value="CUNEO">CUNEO</option><option value="ENNA">ENNA</option><option value="FERMO">FERMO</option><option value="FERRARA">FERRARA</option><option value="FIRENZE">FIRENZE</option><option value="FOGGIA">FOGGIA</option><option value="FORLI’-CESENA">FORLI’-CESENA</option><option value="FROSINONE">FROSINONE</option><option value="GENOVA">GENOVA</option><option value="GORIZIA">GORIZIA</option><option value="GROSSETO">GROSSETO</option><option value="IMPERIA">IMPERIA</option><option value="ISERNIA">ISERNIA</option><option value="LA SPEZIA">LA SPEZIA</option><option value="L’AQUILA">L’AQUILA</option><option value="LATINA">LATINA</option><option value="LECCE">LECCE</option><option value="LECCO">LECCO</option><option value="LIVORNO">LIVORNO</option><option value="LODI">LODI</option><option value="LUCCA">LUCCA</option><option value="MACERATA">MACERATA</option><option value="MANTOVA">MANTOVA</option><option value="MASSA-CARRARA">MASSA-CARRARA</option><option value="MATERA">MATERA</option><option value="MEDIO CAMPIDANO">MEDIO CAMPIDANO</option><option value="MESSINA">MESSINA</option><option value="MILANO">MILANO</option><option value="MODENA">MODENA</option><option value="MONZA E BRIANZA">MONZA E BRIANZA</option><option value="NAPOLI">NAPOLI</option><option value="NOVARA">NOVARA</option><option value="NUORO">NUORO</option><option value="OGLIASTRA">OGLIASTRA</option><option value="OLBIA-TEMPIO">OLBIA-TEMPIO</option><option value="ORISTANO">ORISTANO</option><option value="PADOVA">PADOVA</option><option value="PALERMO">PALERMO</option><option value="PARMA">PARMA</option><option value="PAVIA">PAVIA</option><option value="PERUGIA">PERUGIA</option><option value="PESARO E URBINO">PESARO E URBINO</option><option value="PESCARA">PESCARA</option><option value="PIACENZA">PIACENZA</option><option value="PISA">PISA</option><option value="PISTOIA">PISTOIA</option><option value="PORDENONE">PORDENONE</option><option value="POTENZA">POTENZA</option><option value="PRATO">PRATO</option><option value="RAGUSA">RAGUSA</option><option value="RAVENNA">RAVENNA</option><option value="REGGIO CALABRIA">REGGIO CALABRIA</option><option value="REGGIO EMILIA">REGGIO EMILIA</option><option value="RIETI">RIETI</option><option value="RIMINI">RIMINI</option><option value="ROMA">ROMA</option><option value="ROVIGO">ROVIGO</option><option value="SALERNO">SALERNO</option><option value="SASSARI">SASSARI</option><option value="SAVONA">SAVONA</option><option value="SIENA">SIENA</option><option value="SIRACUSA">SIRACUSA</option><option value="SONDRIO">SONDRIO</option><option value="TARANTO">TARANTO</option><option value="TERAMO">TERAMO</option><option value="TERNI">TERNI</option><option value="TORINO">TORINO</option><option value="TRAPANI">TRAPANI</option><option value="TRENTO">TRENTO</option><option value="TREVISO">TREVISO</option><option value="TRIESTE">TRIESTE</option><option value="UDINE">UDINE</option><option value="VARESE">VARESE</option><option value="VENEZIA">VENEZIA</option><option value="VERBANO-CUSIO-OSSOLA">VERBANO-CUSIO-OSSOLA</option><option value="VERCELLI">VERCELLI</option><option value="VERONA">VERONA</option><option value="VIBO VALENTIA">VIBO VALENTIA</option><option value="VICENZA">VICENZA</option><option value="VITERBO">VITERBO</option>
                        </select>
                    </div>
                    <div class="inputContainer">
                        <label for="merci_city">Indirizzo Destinazione Merci</label>
                        <input type="text" id="merci_city" name="merci_city" placeholder="Indirizzo Destinazione Merci*">
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
                        <input type="text" id="responsabile" name="responsabile" placeholder="Responsabilità Società" required>
                    </div>
                </div>
                <div class="inputGroupContainer inputFileGroupContainer">
                    <div class="inputContainer inputFile">
                        <label for="documento"><strong>Invia Documento d'identità </br>(Max 12Mb - PDF, JPG, PNG, ZIP, RAR, DOC, DOCX)</strong></label>
                        <input type="file" onchange="return checkFileSizes(event)" id="documento" name="documento">
                    </div>
                    <div class="inputContainer inputFile">
                        <label for="codfiscale"><strong>Invia Codice Fiscale </br>(Max 12Mb - PDF, JPG, PNG, ZIP, RAR, DOC, DOCX)</strong></label>
                        <input type="file" onchange="return checkFileSizes(event)" id="codfiscale" name="codfiscale">
                    </div>
                </div>
                <div class="inputGroupContainer">
                    <div class="inputContainer inputFile halfInput">
                        <label for="visuracam"><strong>Invia Visura Camerale </br>(Max 12Mb - PDF, JPG, PNG, ZIP, RAR, DOC, DOCX)</strong></label>
                        <input type="file" onchange="return checkFileSizes(event)" id="visuracam" name="visuracam">
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
                    <label for="message_note" style="align-self: flex-start">Note</label>
                    <textarea name="message_note" id="message_note" rows="5" cols="50" placeholder="Note"></textarea>
                </div>

                <div>
                    <p>Presa visione dell'informativa sulla privacy, da consultare a <a href="https://www.agdistribuzione.it/privacy.html" target="_blank">questo link</a></p>
                    <div class="privacySection">
                        <div>
                            <label>relativamente al punto 1.A<div class="labelStrong">obbligatorio</div></label>
                            <label class="radioInput" for="privacy_accept_1">
                            <input type="checkbox" name="privacy_accept_1" value="Presto il consenso" id="privacy_accept_1" required>
                                Presto il consenso
                            </label>
                        </div>
                        <div>
                            <label for="privacy_accept_2">relativamente al punto 1.B<div class="labelStrong">obbligatorio</div></label>
                            <label class="radioInput" for="privacy_accept_2_1">
                            <input type="radio" name="privacy_accept_2" value="Presto il consenso" id="privacy_accept_2_1" required>
                                Presto il consenso
                            </label>
                            <label class="radioInput" for="privacy_accept_2_2">
                            <input type="radio" name="privacy_accept_2" value="Nego il consenso" id="privacy_accept_2_2" required>
                                Nego il consenso
                            </label>
                        </div>
                    </div>
                </div>
                <!-- Fine Privacy -->

                <!-- Submit Section -->
                <div class="submitContainer">
                    <input type="submit" name="formSend" id="Send" class="sendButton sendFormData" value="Invia">
                    <input type="submit" name="formReset" id="Reset" class="sendButton sendButton-black sendFormDataReset" onclick="resetForm()" value="Reset">
                </div>
            </form>
        </div>
    </div>
</body>
<script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script defer src="./resources/main.js"></script>
</html>