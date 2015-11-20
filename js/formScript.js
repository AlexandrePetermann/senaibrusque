/* 
 * Building a Bootstrap Contact Form Using PHP and AJAX
 * http://webdesign.tutsplus.com/tutorials/building-a-bootstrap-contact-form-using-php-and-ajax--cms-23068
 */


$("#contactForm").submit(function (event) {
    // cancela o envio padrão
    event.preventDefault();
    // chama uma função que fará o envio do formulario
    submitForm();
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
    $("#msgSubmit").removeClass("hidden");
}