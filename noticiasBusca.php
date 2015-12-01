<?php

require_once './dbConexao.php';
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch (PDOException $pe) {
    die("Não foi feito a conexão com o banco de dados $dbname </br>"
            . "Ocorreu o erro: " . $pe->getMessage());
}

//Busca noticia do banco de dados
// Listagem de dados
$sql = "select titulo from noticias order by datapostagem desc";
$q = $conn->query($sql);
$q->setFetchMode(PDO::FETCH_ASSOC);


while ($r = $q->fetch()) {
    echo "<h1>".$r['titulo']."</h1>";
}