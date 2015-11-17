<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Site Institucional do SENAI - Brusque</title>
        <!-- CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/estiloso.css"/>
        <!-- Javascript -->
        <script src="js/jquery-1.11.3.min.js" ></script>
        <script src="js/bootstrap.min.js" ></script>        
    </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="50">
        <header class="jumbotron" id="topo" >
            <h1>SENAI/SC Brusque</h1>
            <p>Olá Bootstrap</p>
            <form role="form">
                <div class="form-inline">
                    <div class="input-group input-group-sm">                            
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-envelope"></span>
                        </span>
                        <input class="form-control" type="email" placeholder="seunome@provedor.com" id="email" size="50">
                    </div>
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                </div>
            </form>
        </header>

        <nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="250">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="#">Senai/SC - Brusque</a>
                </div>
                <div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li><a href="#section1">Inicio</a></li>
                            <li><a href="#section2">Cursos</a></li>
                            <li><a href="#section3">Notícias</a></li>
                            <li><a href="#section4">Fotos</a></li>
                            <li><a href="#section5">Videos</a></li>
                            <li><a href="#section6">Contato</a></li>
                            <li><a href="#section7">Localização</a></li>
                            <!-- Menu DorpDown
                             <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Section 4 <span class="caret"></span></a>
                                 <ul class="dropdown-menu">
                                     <li><a href="#section41">Section 4-1</a></li>
                                     <li><a href="#section42">Section 4-2</a></li>
                                 </ul>
                             </li>
                            -->
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <div id="section1" class="container-fluid">
            <h1>Inicio</h1>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        </div>
        <div id="section2" class="container-fluid">
            <h1>Cursos</h1>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        </div>
        <div id="section3" class="container-fluid">
            <h1>Notícias</h1>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        </div>
        <div id="section4" class="container-fluid">
            <h1>Fotos</h1>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        </div>
        <div id="section5" class="container-fluid">
            <h1>Videos</h1>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        </div>
        <div id="section6" class="container-fluid">
            <h1>Contato</h1>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        </div>
        <div id="section7" class="container-fluid">
            <h1>Localização </h1>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d28411.02199277725!2d-48.9140747472448!3d-27.112909543324925!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x0b0ebeaaf853b447!2sSENAI+-+Servi%C3%A7o+Nacional+de+Aprendizagem+Industrial!5e0!3m2!1spt-BR!2sbr!4v1447717805526" width="90%" height="80%" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <script src="js/meuscript.js" ></script>
    </body>
</html>