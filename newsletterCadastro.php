<?php

function gerarCodigo() {
    return sha1(mt_rand());
}

include './newsletterEmail.php';

require_once './dbConexao.php';
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch (PDOException $pe) {
    die("Não foi feito a conexão com o banco de dados $dbname </br>"
            . "Ocorreu o erro: " . $pe->getMessage());
}
// Inserção de dados
// Verifica se foi preenchido o e-mail
if (isset($_POST['email']) && !empty($_POST['email'])) {
// Filtragem de entrada de dados
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $cod = gerarCodigo();
// String SQL
    $sql = "Insert Into Newsletter (email,codigo,datacadastro) values(:email,:cod,now())";
    $parametros = array(':email' => $email,
        ':cod' => $cod);
    $p = $conn->prepare($sql);
    $q = $p->execute($parametros);

// Envio de e-mail para confirmação
    $link = "<a href='HTTP://" . $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF'];
    $link .= "?cod=$cod'";
    $link .= "title='Clique para confirmar seu e-mail'>";
    $link .= "Clique para confirmar seu e-mail";
    $link .= "</a>";
    if (emailConfirma($email, $link)) {
        echo "success";
    } else {
        echo "falha";
    }
} elseif (!empty($_GET['cod'])) {
// atualização de dados
    $cod = filter_input(INPUT_GET, 'cod', FILTER_SANITIZE_STRING);
    $sql = 'update Newsletter set '
            . 'dataAtualizacao = Now(), '
            . 'situacao = 1 '
            . 'Where codigo = :cod';
    $p = $conn->prepare($sql);
    $q = $p->execute(array(':cod' => $cod));
    header('Location: Index.php');
}