<?php

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

$EmailTo = "xandy.bq@gmail.com";
$Subject = "Contato via Site";

// monta o e-mail
$Body = "Nome: ";
$Body .= $name;
$Body .= "\n";

$Body .= "E-mail: ";
$Body .= $email;
$Body .= "\n";

$Body .= "Mensagem: ";
$Body .= $message;
$Body .= "\n";

// Envia o e-mail
$success = mail($EmailTo, $Subject, $Body, "From:" . $email);

// resposta para a chamada do Ajx
if ($success) {
    echo "success";
} else {
    echo "invalid";
}