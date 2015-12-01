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
$sql = "select titulo, resumo, noticia from noticias order by datapostagem desc";
$q = $conn->query($sql);
$q->setFetchMode(PDO::FETCH_ASSOC);

while ($r = $q->fetch()) {
    $String = " 
    <div class='row'>
        <div class='col-xs-8 col-md-4'>            
            <h1>" . $r['titulo'] . "</h1>
            <h2>" . $r['resumo'] . "</h2>
            <button type='button' class='btn btn-info btn-lg' data-toggle='modal' data-target='#myModal'>Ler mais...</button>
            <!-- Modal -->
            <div class='modal fade' id='myModal' role='dialog'>
                <div class='modal-dialog'>
                    <div class='modal-content'>
                        <div class='modal-header'>
                            <button type='button' class='close' data-dismiss='modal'>&times;</button>
                            <h4 class='modal-title'>" . $r['titulo'] . "</h4>
                        </div>                        
                        <div class='modal-body'>
                           <h1>" . $r['noticia'] . "</h1>
                        </div>
                        <div class='modal-footer'>
                            <button type='button' class='btn btn-default' data-dismiss='modal'>Sair</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </div>
";
    echo $String;
}