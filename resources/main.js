function resetForm() {
    document.getElementById("nuovoClienteForm").reset();
}

//handleresetForm
function handleSubmit(e) {
    e.preventDefault();

    const formData = {};
    new FormData(e.target).forEach((value, key) => {
        formData[key] = value;
    });
    // send mail
    sendMail(formData);
}


function sendMail(formData) {
    // to use Smtpjs bisogna creare un utente elasticmail
    // https://app.elasticemail.com/api/create-account?r=20b444a2-b3af-4eb8-bae7-911f6097521c&utm_source=google
    Email.send({
        SecureToken : "90493f05-fde8-4bf3-a3d0-0c1e6b841d4d",
        Host: "smtp.elasticemail.com",
        Username: "info@agdistribuzione.com",
        Password: "46AC7E53D462AFDA05C864A4DE3BB3B37AFB",
        To: 'riccardo.burderi@aghoreca.com',
        From: "info@agdistribuzione.com",
        Subject: "Test invio email",
        Body: "Test",
        html: "<h1>Test mail</h1>"
    })
    .then(function (message) {
        alert("mail sent successfully")
    });
    console.log({...formData})
}


/* SmtpJS.com - v3.0.0 */
var Email = { 
    send: 
        function (a) { 
            return new Promise(function (n, e) {
                a.nocache = Math.floor(1e6 * Math.random() + 1), a.Action = "Send"; 
                var t = JSON.stringify(a); 
                Email.ajaxPost("https://smtpjs.com/v3/smtpjs.aspx?", t, function (e) { n(e) }) 
            }) 
        }, 
    ajaxPost: 
        function (e, n, t) { 
            var a = Email.createCORSRequest("POST", e); 
            a.setRequestHeader("Content-type", "application/x-www-form-urlencoded"), 
            a.onload = function () {
                var e = a.responseText; 
                null != t && t(e) 
            }, a.send(n) 
            }, 
    ajax: 
        function (e, n) { 
            var t = Email.createCORSRequest("GET", e);
            t.onload = function () { 
                var e = t.responseText; 
                null != n && n(e) 
            }, t.send() 
        }, 
    createCORSRequest: 
        function (e, n) { 
            var t = new XMLHttpRequest; 
            return "withCredentials" in t ? t.open(e, n, !0) : "undefined" != typeof XDomainRequest ? (t = new XDomainRequest).open(e, n) : t = null, t 
        } 
    };