<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserimento Nuovo Cliente - AG Distribuzione, Leader HO.RE.CA. per la Sicilia sud-orientale</title>
    <link href="./favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&display=swap|Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <script>
        function resetForm() {
        }
        
        function handleSubmit(e) {
            e.preventDefault()
            //handleresetForm
            const inputValues = e.target;
            inputValues.forEach((input, index) => {
                console.log(input.elements[index].value)
                
            });
        }
    </script>
</head>
<?php
    //script that handles inputs and sends email to Peppe and Buyer
?>

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
        <div class="formContainer">
            <!-- TODO change action to action="https://www.agdistribuzione.it/agenti/nuovo-cliente" -->
            <form method="post" id="nuovoClienteForm" enctype="multipart/form-data" onsubmit="return handleSubmit(event)">
                <div class="inputGroupContainer">
                    <div class="inputContainer">
                        <label for="nuovoClienteForm">Codice Agente<div class="labelStrong">obbligatorio</div></label>
                        <input type="text" id="nuovoClienteForm" name="nuovoClienteForm" placeholder="Codice Agente*">
                    </div>
                    <div class="inputContainer">
                        <label for="nuovoClienteForm">Listino<div class="labelStrong">obbligatorio</div></label>
                        <select class="inputSelect" name="" id="">
                            <option value>Selezione</option>
                            <option value="4A">4A</option>
                            <option value="5A">5A</option>
                            <option value="6A">6A</option>
                        </select>
                    </div>
                </div>
                <div class="inputGroupContainer">
                    <div class="inputContainer">
                        <label for="nuovoClienteForm">Codice Agente<div class="labelStrong">obbligatorio</div></label>
                        <input type="text" id="nuovoClienteForm" name="nuovoClienteForm" placeholder="Codece Agente*">
                        
                    </div>
                </div>
                <div class="submitContainer">
                    <input type="submit" name="formSend" id="Send" class="sendButton sendFormData" value="Invia">
                    <input type="submit" name="formSend" id="Send" class="sendButton sendButton-black sendFormDataReset" onclick="resetForm()" value="Reset">
                </div>
            </form>
        </div>
    </div>
</body>
</html>