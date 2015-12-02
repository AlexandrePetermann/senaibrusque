<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastro de Notícias</title>
        <!-- CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/estiloso.css"/>
        <link rel="stylesheet" href="css/animate.css"
    </head>
    <body>
        <section id="Contato" class="container-fluid">
            <h1 class="text-center">Cadastro de Notícias</h1>
            <form action="noticiasCadastro.php" method="post">
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="name" class="h4">Título</label>
                        <input type="text" name="titulo" class="form-control"  placeholder="Informe o Título da Notícia" required>                        
                    </div>
                    <div class="form-group">
                        <label for="message" class="h4 ">Resumo</label>
                        <textarea name="resumo" class="form-control" rows="3" placeholder="Informe o Resumo da Notícia" required data-error="Escreva a mensagem desejada!"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="message" class="h4 ">Notícia</label>
                    <textarea name="noticia" class="form-control" rows="7" placeholder="Informe a Notícia" required data-error="Escreva a mensagem desejada!"></textarea>                    
                </div>
                <button type="submit" name="btn" class="btn btn-success btn-lg pull-right ">Enviar</button>
                <div id="contatoEnvia" class="h3 text-center hidden"></div>
            </form>
        </section>
    </body>
</html>
