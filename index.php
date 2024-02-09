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
            //handleresetForm
        }
    </script>
</head>
<?php
    //script that handles inputs and sends email to Peppe and Buyer
?>

<body>
    <div class='mainContainer'>
        <div class='headerContainer'>
            <h2>INSERIMENTO NUOVO CLIENTE</h2>
        </div>
        <div class='formContainer'>
            <!-- TODO change action to action="https://www.agdistribuzione.it/agenti/nuovo-cliente" -->
            <form method="post" id="nuovoClienteForm" enctype="multipart/form-data" action="/">
                <div class="inputContainer">
                    <label for="fname">First name:</label>
                    <input type="text" id="fname" name="fname" placeholder="Codece Agente*"><br><br>
                </div>
                <div class="submitContainer">
                    <input type="submit" name="formSend" id="Send" class="sendFormData" value="Invia">
                    <input type="submit" name="formSend" id="Send" class="sendFormDataReset" onclick="resetForm()" value="Reset">
                </div>
            </form>
        </div>
    </div>
</body>
</html>