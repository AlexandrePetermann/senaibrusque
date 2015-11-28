/* 
 * Building a Bootstrap Contact Form Using PHP and AJAX
 * http://webdesign.tutsplus.com/tutorials/building-a-bootstrap-contact-form-using-php-and-ajax--cms-23068
 */


 
$("#newsletterForm").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        newsletterformError();
        newslettersubmitMSG(false, "Por favor preencha os dados de forma correta!");
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
        url: "newsletterEmail.php",
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
    newslettersubmitMSG(true, "Mensagem Sucesso!");
}

function newsletterformError() {
    $("#newsletterForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
        $(this).removeClass();
    });
}

function newslettersubmitMSG(valid, msg) {
    var msgClasses;
    if (valid) {
        msgClasses = "h3 text-center tada animated text-success";
    } else {
        msgClasses = "h3 text-center flash animated text-danger";
    }
    $("#newsletterEnvia").removeClass().addClass(msgClasses).text(msg);
}