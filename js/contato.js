/* 
 * Building a Bootstrap Contact Form Using PHP and AJAX
 * http://webdesign.tutsplus.com/tutorials/building-a-bootstrap-contact-form-using-php-and-ajax--cms-23068
 */


$("#contatoForm").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        contatoformError();
        contatoSubmitMSG(false, "Por favor preencha os dados de forma correta!");
    } else {
        // everything looks good!
        event.preventDefault();
        contatosubmitForm();
    }
});

function contatosubmitForm() {
    // Inicializa as variáveis com o conteúdo do formulario
    var name = $("#name").val();
    var email = $("#email").val();
    var message = $("#message").val();

    $.ajax({
        type: "POST",
        url: "./contato/contatoEmail.php",
        data: "name=" + name + "&email=" + email + "&message=" + message,
        success: function (text) {
            if (text == "success") {
                contatoformSuccess();
            }
        }
    });
}

function contatoformSuccess() {
    $("#contatoForm")[0].reset();
    contatoSubmitMSG(true, "Mensagem Sucesso!");
}

function contatoformError() {
    
    $("#contatoForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
        $(this).removeClass();
    });
}

function contatoSubmitMSG(valid, msg) {
    var msgClasses;
    if (valid) {
        msgClasses = "h3 text-center tada animated text-success";
    } else {
        msgClasses = "h3 text-center flash animated text-danger";
    }
    $("#contatoEnvia").removeClass().addClass(msgClasses).text(msg);
}