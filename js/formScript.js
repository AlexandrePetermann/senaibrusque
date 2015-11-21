/* 
 * Building a Bootstrap Contact Form Using PHP and AJAX
 * http://webdesign.tutsplus.com/tutorials/building-a-bootstrap-contact-form-using-php-and-ajax--cms-23068
 */


$("#contactForm").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        formError();
        submitMSG(false, "Por favor preencha os dados de forma correta!");
    } else {
        // everything looks good!
        event.preventDefault();
        submitForm();
    }
});

function submitForm() {
    // Inicializa as variáveis com o conteúdo do formulario
    var name = $("#name").val();
    var email = $("#email").val();
    var message = $("#message").val();

    $.ajax({
        type: "POST",
        url: "formProcesso.php",
        data: "name=" + name + "&email=" + email + "&message=" + message,
        success: function (text) {
            if (text == "success") {
                formSuccess();
            }
        }
    });
}

function formSuccess() {
    $("#contactForm")[0].reset();
    submitMSG(true, "Mensagem Sucesso!");
}

function formError() {
    $("#contactForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
        $(this).removeClass();
    });
}

function submitMSG(valid, msg) {
    var msgClasses;
    if (valid) {
        msgClasses = "h3 text-center tada animated text-success";
    } else {
        msgClasses = "h3 text-center flash animated text-danger";
    }
    $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
}