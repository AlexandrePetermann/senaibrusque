<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Adiciona o Ckeditor, editor HTML -->
        <script type="text/javascript">
            window.onload = function () {
                CKEDITOR.replace('noticia');
            };
        </script> 
        <title>Cadastro de Notícias</title>
    </head>
    <body>
        <section>
            <h1>Cadastro de Notícias</h1>
            <form action="./noticiasCadastro.php" method="post">
                <div>
                    <div>
                        <label>Título</label>
                        <input type="text" name="titulo"  placeholder="Informe o Título da Notícia" required>                        
                    </div>
                    <div>
                        <label>Resumo</label>
                        <textarea name="resumo" rows="3" placeholder="Informe o Resumo da Notícia" required></textarea>
                    </div>
                </div>
                <div>
                    <label>Notícia</label>
                    <textarea id="noticia" name="noticia" rows="7" placeholder="Informe a Notícia" required></textarea>                    
                </div>
                <button type="submit" name="btn">Enviar</button>
            </form>
        </section>
        <script src="//cdn.ckeditor.com/4.5.5/full/ckeditor.js"></script>
    </body>
</html>
