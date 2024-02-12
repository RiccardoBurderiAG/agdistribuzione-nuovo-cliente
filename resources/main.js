function resetForm() {
    document.getElementById("nuovoClienteForm").reset();
}

$(document).ready(function() {
    $('#nuovoClienteForm').submit(function(e) {
        e.preventDefault();
        var form = jQuery('#nuovoClienteForm');
        $.ajax({
            url: 'sendmail.php',
            data: form.serialize(),
            method: 'POST',
            success: function(resp) {
                //alert('Cliente inserito correttamente');
            }
        })
    })
})