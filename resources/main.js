function resetForm() {
    document.getElementById("nuovoClienteForm").reset();
    window.scrollTo({
        top: 0,
        behavior: "smooth",
    });
}

$(document).ready(function() {
    $('#nuovoClienteForm').submit(function(e) {
        e.preventDefault();
        var form = jQuery('#nuovoClienteForm');
        var _form = $('#nuovoClienteForm')[0];
        
        $.ajax({
            url: 'sendmail.php',
            //data: form.serialize(), //serializeArray
            data: new FormData(_form),
            processData: false,
            contentType: false,
            method: 'POST',
            success: function(resp) {
                alert('Cliente inserito correttamente');
            },
            error: function(resp) { 
                alert("Inserimento fallito, riprova"); 
            }  
        })
    })
})