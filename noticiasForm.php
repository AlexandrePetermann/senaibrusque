<!DOCTYPE html>

<section id="Noticias" class="container-fluid">
    <h1>Notícias</h1>
    <div class="row">
        <div class="col-xs-8 col-md-4">
            Notícia 01
        </div>
        <div class="col-xs-8 col-md-4">
            <?php include './noticiasBusca.php'; ?>            
            <!-- Trigger the modal with a button -->
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Ler mais...</button>
            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Título da noticia 02</h4>
                        </div>                        
                        <div class="modal-body">
                           
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Sair</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
        <div class="col-xs-8 col-md-4">
            Notícia 03
        </div>
    </div>
</section>