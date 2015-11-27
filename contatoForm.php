<section id="Contato" class="container-fluid">
    <h1 class="text-center">Contato</h1>
    <div class="row">
        <div class="col-lg-4">
            <p>Entre em contato, responderemos nas próximas 24 horas.</p>
            <p><i class="glyphicon glyphicon-map-marker"><b> Brusque/SC</b></i></p>
            <p><i class="glyphicon glyphicon-phone-alt"><b> (47)3251-8900</b></i></p>
            <p><i class="glyphicon glyphicon-envelope"><b> brusque@fisc.com.br</b></i></p>
        </div>
        <div class="col-lg-8">
            <form role="form" id="contactForm">
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="name" class="h4">Nome</label>
                        <input type="text" class="form-control" id="name" placeholder="Informe seu nome" required>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="email" class="h4">E-mail</label>
                        <input type="email" class="form-control" id="email" placeholder="Informe seu e-mail" required>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="message" class="h4 ">Mensagem</label>
                    <textarea id="message" class="form-control" rows="5" placeholder="Informe uma Mensagem" required data-error="Escreva a mensagem desejada!"></textarea>
                    <div class="help-block with-errors"></div>
                </div>
                <button type="submit" id="form-submit" class="btn btn-success btn-lg pull-right ">Enviar</button>
                <div id="msgSubmit" class="h3 text-center hidden"></div>
            </form>
        </div>
    </div>
</section>