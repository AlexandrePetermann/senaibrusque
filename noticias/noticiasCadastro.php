<?php

require_once '../bancoDados/dbConexao.php';
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch (PDOException $pe) {
    die("Não foi feito a conexão com o banco de dados $dbname </br>"
            . "Ocorreu o erro: " . $pe->getMessage());
}

// Verifica se foi enviado através do botão
If (isset($_POST['btn'])) {
// Inserção de dados
// Verifica se foi preenchido os dados
    if (isset($_POST['titulo']) && !empty($_POST['titulo']) && isset($_POST['resumo']) && !empty($_POST['resumo']) && isset($_POST['noticia']) && !empty($_POST['noticia'])) {
// Filtragem de entrada de dados
        $titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
        $resumo = filter_input(INPUT_POST, 'resumo', FILTER_SANITIZE_STRING);
        $noticia = filter_input(INPUT_POST, 'noticia', FILTER_SANITIZE_STRING);

// String SQL
        $sql = "Insert Into noticias (datapostagem, titulo, resumo, noticia) values(now(),:titulo, :resumo, :noticia)";
        $parametros = array(
            ':titulo' => $titulo,
            ':resumo' => $resumo,
            ':noticia' => $noticia);
        $p = $conn->prepare($sql);
        $q = $p->execute($parametros);

        header("Location: ../index.php#Noticias");
    }
} else {
// botão cadastrar não foi pressionado
// redirecionada para a pagina inicial
    header('Location: ../index.php');
}