# AG Distribuzione - Inserimento Nuovo Cliente

Applicazione web in PHP per la raccolta dati di un nuovo cliente AG Distribuzione.
Il progetto espone un form unico che invia i dati (inclusi allegati) via AJAX a uno script backend che compone e spedisce una email HTML.

## Panoramica Funzionale

- Interfaccia form multi-sezione per inserimento anagrafica cliente.
- Invio asincrono con jQuery e FormData.
- Gestione allegati in multipart (documento, codice fiscale, visura camerale).
- Validazioni HTML lato client sui campi obbligatori principali.
- Manifest Web App presente per uso installabile in modalità standalone.

## Struttura Progetto

- index.php: pagina principale con form e include backend.
- sendmail.php: raccolta POST, composizione email HTML e invio con funzione mail di PHP.
- resources/main.js: submit AJAX, messaggi utente, reset form.
- resources/style.css: stile UI.
- resources/manifest.json: metadati PWA (nome, icone, display standalone).

## Sezioni Del Form

Il form in index.php è organizzato in blocchi:

- Info agente: codice agente, listino, condizioni pagamento, email agente.
- Dettagli cliente: tipologia società, titolare/ditta, attività, contatti, PEC, giorni di chiusura.
- Indirizzo di fatturazione: indirizzo, CAP, provincia, città, partita IVA, codice univoco.
- Indirizzo di consegna: indirizzo merci, CAP, provincia, città.
- Dati bancari: banca appoggio, agenzia, IBAN.
- Dati responsabile: nome responsabile e upload documenti.
- Privacy e note: accettazioni richieste e note libere.

## Flusso Di Invio

1. Utente compila il form in index.php.
2. submit intercettato da resources/main.js.
3. Invio POST AJAX verso sendmail.php con FormData (anche file).
4. sendmail.php costruisce email HTML tabellare.
5. Se presenti file validi, invio multipart/mixed con allegati base64.
6. Destinatario fisso: ordinierregi@gmail.com.
7. Al client viene mostrato alert di successo o errore.

## Allegati E Limiti

- Campi file supportati: documento, codfiscale, visuracam.
- Controllo lato client dimensione massima per file: 12 MB.
- Tipologie accettate indicate in UI: PDF, JPG, PNG, ZIP, RAR, DOC, DOCX.

Nota: la validazione del tipo file è dichiarata a livello di testo etichetta; non è forzata con attributo accept o controllo server dedicato.

## Requisiti Ambiente

- PHP con funzione mail abilitata.
- Web server locale (esempio Laragon).
- Connessione internet per jQuery CDN e Google Fonts.

## Avvio In Locale

1. Posizionare il progetto nella root del server locale.
2. Verificare configurazione invio email del PHP locale.
3. Aprire nel browser la pagina index.php.
4. Compilare e inviare il form per testare il flusso.

## Configurazioni Attuali Importanti

- Mittente email impostato in sendmail.php: info@agdistribuzione.it.
- Destinatario email impostato in sendmail.php: ordinierregi@gmail.com.
- Subject email: Inserimento nuovo cliente.
- Privacy policy linkata a: https://www.agdistribuzione.it/privacy.html.

## Note Tecniche

- Il form usa enctype multipart/form-data.
- Esistono pattern HTML per CAP (5 cifre) e Partita IVA (11 cifre).
- Il reset richiama resetForm in resources/main.js e riporta la pagina in alto.
- Presente commento TODO in index.php per possibile cambio action endpoint.

## Possibili Miglioramenti

- Aggiungere validazioni server-side più rigide su file, email e campi obbligatori.
- Sanitizzare/escapare output HTML email per maggiore robustezza.
- Centralizzare configurazioni email (to/from/subject) in variabili ambiente.
- Sostituire alert JS con feedback UI inline più user-friendly.
