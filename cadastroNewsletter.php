<?php

function gerarCodigo() {
    return sha1(mt_rand());
}

require_once './dbConexao.php';
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch (PDOException $pe) {
    die("Não foi feito a conexão com o banco de dados $dbname </br>"
            . "Ocorreu o erro: " . $pe->getMessage());
}

// Verifica se foi enviado através do botão
If (isset($_POST['cadastraEmail'])) {
// Inserção de dados
// Verifica se foi preenchido o e-mail
    if (isset($_POST['emailNewsletter']) && !empty($_POST['emailNewsletter'])) {
// Filtragem de entrada de dados
        $email = filter_input(INPUT_POST, 'emailNewsletter', FILTER_SANITIZE_EMAIL);
        $cod = gerarCodigo();
// String SQL
        $sql = "Insert Into Newsletter (email,codigo,datacadastro) values(:email,:cod,now())";
        $parametros = array(':email' => $email,
            ':cod' => $cod);
        $p = $conn->prepare($sql);
        $q = $p->execute($parametros);

        /*
          // Envio de e-mail para confirmação
          $link = "<a href='HTTP://" . $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF'];
          $link .= "?cod=u&sit=0&email=$email'";
          $link .= "title='Clique para confirmar seu e-mail'>";
          $link .= "Clique para confirmar seu e-mail";
          $link .= "</a>";
          emailConfirma($email, $link);
         */
        header("Location: Index.php");
    }
} else {
// botão cadastrar não foi pressionado
// redirecionada para a pagina inicial
    header('Location: Index.php');
}