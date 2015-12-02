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
$sql = "select titulo, resumo, noticia from noticias order by datapostagem desc limit 9";
$q = $conn->query($sql);

// Faz somente quando há registros na tabela
if ($q->num_rows > 0) {
    $q->setFetchMode(PDO::FETCH_ASSOC);
    $count = 0;
    $String = "<div class='row'>";
    while ($r = $q->fetch()) {
        if (($count % 3) == 0) {
            $String.= "</div>";
            $String.="<div class='row'>";
        }
        $count ++;
        $String.= "     
        <div class='col-xs-8 col-md-4'>        
            <h1>" . utf8_encode($r['titulo']) . "</h1>
            <h2>" . utf8_encode($r['resumo']) . "</h2>
            <button type='button' class='btn btn-info btn-sm' data-toggle='modal' data-target='#myModal" . $count . "'>Ler mais...</button>
            <!-- Modal -->
            <div class='modal fade' id='myModal" . $count . "' role='dialog'>
                <div class='modal-dialog'>
                    <div class='modal-content'>
                        <div class='modal-header'>
                            <button type='button' class='close' data-dismiss='modal'>&times;</button>
                            <h4 class='modal-title'>" . utf8_encode($r['titulo']) . "</h4>
                        </div>                        
                        <div class='modal-body'>
                           <h5>" . utf8_encode($r['noticia']) . "</h5>
                        </div>
                        <div class='modal-footer'>
                            <button type='button' class='btn btn-default' data-dismiss='modal'>Sair</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
";
    };
    $String.= "</div>";
    echo $String;
}