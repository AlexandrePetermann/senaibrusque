/* 
 * Building a Bootstrap Contact Form Using PHP and AJAX
 * http://webdesign.tutsplus.com/tutorials/building-a-bootstrap-contact-form-using-php-and-ajax--cms-23068
 */

 
$("#newsletterForm").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        newsletterformError();
        newslettersubmitMSG(false, "Por favor preencha o E-mail de forma correta!");
    } else {
        // everything looks good!
        event.preventDefault();
        newslettersubmitForm();
    }
});

function newslettersubmitForm() {
    // Inicializa as variáveis com o conteúdo do formulario
    var email = $("#emailNewsletter").val();
    $.ajax({
        type: "POST",
        url: "newsletterCadastro.php",
        data: "&email=" + email ,
        success: function (text) {
            if (text == "success") {
                newsletterformSuccess();
            }
        }
    });
}

function newsletterformSuccess() {
    $("#newsletterForm")[0].reset();
    newslettersubmitMSG(true, "E-mail enviado com Sucesso!");
}

function newsletterformError() {
    $("#newsletterForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
        $(this).removeClass();
    });
}

function newslettersubmitMSG(valid, msg) {
    var msgClasses;
    if (valid) {
        msgClasses = "h3 text-left shake animated";
    } else {
        msgClasses = "h3 text-left flash animated text-danger";
    }
    $("#newsletterEnvia").removeClass().addClass(msgClasses).text(msg);
}