<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Site Institucional do SENAI - Brusque</title>
        <!-- CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/estiloso.css"/>
        <link rel="stylesheet" href="css/animate.css"
    </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="50">
        <header class="jumbotron" id="topo" >
            <h1>SENAI/SC Brusque</h1>
            <p>Olá Bootstrap</p>
            <?php include './newsletter/newsletterForm.php'; ?>
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
                            <li><a href="#Inicio">Inicio</a></li>
                            <li><a href="#Cursos">Cursos</a></li>
                            <li><a href="#Noticias">Notícias</a></li>
                            <li><a href="#Fotos">Fotos</a></li>
                            <li><a href="#Videos">Videos</a></li>
                            <li><a href="#Contato">Contato</a></li>
                            <li><a href="#Localizacao">Localização</a></li>
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

        <section id="Inicio" class="container-fluid">
            <h1>Inicio</h1>
            <!--Carrosel de Imagens-->
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="data:image/png;base64,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" alt="Chania">
                    </div>

                    <div class="item">
                        <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgICAgHCAoQBwcIDgwIBwcHDRAICQcMFBEiFhURFhMYKCggGBolHBMTITEhJSsrLi4uFx8zODMsNygtLisBCgoKBQUFDgUFDisZExkrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrK//AABEIAOEA4QMBIgACEQEDEQH/xAAaAAEBAQEBAQEAAAAAAAAAAAAAAQIEBQMH/8QALxABAAIBAQQJBQACAwAAAAAAAAERAgMUUmGRBBMhMTIzQXGBElGxwfAi0UKCof/EABQBAQAAAAAAAAAAAAAAAAAAAAD/xAAUEQEAAAAAAAAAAAAAAAAAAAAA/9oADAMBAAIRAxEAPwD9KopqigSimqKBmimqWgYopuigYopuigYopuigYopuigYopuigYopuigYopuigYopuigYopukoGaKaooGKKaooGKVqgGqWlpaBmlpaWgZopqigZopqigZopqloGKKbooGKKbooGKKbooGKKbooGKKbpKBmimqKBmimqKBmkpukoGaSm6SgZoaoBqlpaWgZpaWloGaKaKBmimqKBmlpaKBKKWigSilooEopaKBKKWigSilooGaKaooGaKaoBmkpukoGaSm6QGaGqAaopaUEopVBKFASilASilASilASilASilASilASilASilAQpQGaKaQGaKaSgZoaQGlFBFFBBQEc89ImJmPpjs7HS4MvFPvP5B9dpndhdpndh9Nn0+PM2bT48wfPaZ3YNpndh9Nm0+PM2bT48wfPaZ3YNpndh9Nm0+PM2bT48wfPaZ3YNpndh9Nm0+PM2bT48wfPaZ3YNpndh9Nm0+PM2bT48wfPaZ3YTaZ3YfXZtPjzNn0+PMHzjpE34YdDh7sq+01/67wQUBEaQERpAQUBQUAFAAAefl4595/L0XnZeOfefyDu1pmMM5jsmI7JcfW6m9Ls1/Lz9nADfW6m9J1upvTzTSwnUyjHujvmftDux08MYqI+Z7ZkHF1upvSdbqb0urV0Mc4mo+nL0mOy3EDfW6m9J1upvSwA31upvSdbqb0sAN9bqb0uvQmZwxme2Z75n3cLu6P5eH96g4p8fz+3oPPnx/P7eiCAAgoCIqSCCgCgCgAKADz8vHPvP5eg8/Lxz7z+Qduv5efs4Hfr+Xn7OAH36HMfXMesx2Ot5sTMTEx2THbEunHpUV/lj2/fH1B0vOzmJzymO6ZmY5vtq9JnKPpxj6Ynvme+XwAB0dEwv6sp7Y8P+wc41qYfRlOP27uMMgO7o/l4f3q4Xd0fy8P71Bxz4/n9vQefPj+f29ABFAQAEFQEBQBFBQAURQHn5eOfefy9B5+Xjn3n8g7dfy8/ZwO/X8vP2cAAAAN4aWeXdj2feeyAYd+hj9OnjHr3z7vjh0XunOf+uLpB8Ol4XjGfrj2T7OR6OeP1Yzj94p53d2evqA7uj+Xh/erhd3R/Lw/vUHHPj+f29B58+P5/b0ACRAAJAQARUAIVAGhAFABXn5eOfefy73n5eOfefyDu1/Lz9nA7tfy8/Zw1P2AawwnOfpj5n0gw08sp+mI+Z7odunhGEVHzPrIJp6WGERUXO9Pe+iAKIAri6Tj9OpP2y/yh2MaunGpFd0x4Z+wOF3dH8vD+9XFlhljMxMdsO3Q8vD+9QcU+P5/b0XnT4/n9vQAAAEAElUAEUEVlQVWVBRAGnn5eKfefy7nLloZzMz2dszPeDo67T3jrtPec+z6nDmbPqcOYOjrtPeOu096HPs+pw5mz6nDmDo67T3oOu096HPs+pw5mz6nDmDo67T3oOu096HPs+pw5mz6nDmDo67T3oOu096HPs+pw5mz6nDmDo67T3jrtPec+z6nDmbPqcOYPn/y+f29BxxoZ3HdzdYAgCoICoICiAIrIDSs2WDQhYKIWDQzYDQyA0MgNDIDQyA0MgKJZYKJYCollgqIAozYCWtsWtg1as2WDVls2WDVlpZYLa2zZYNDNlg0M2WDQzZYNDNlg1aWllgtlpZYLZbNlg0lpZYLaWllgozYCWWxa2DdlsWtg1ZbNlg3ZbFlg3ZbFlg3ZbFlg3ZbFlg3ZbFlg3ZbFlg3ZbFlg3ZbFlg1ZbNlg1ZbNlgtls2WC2M2Aza2xa2DVls2WDdlsWWDdls2WDVls2WDVls2WDVls2WDVls2WDVls2WDVls2WDVls2WDVlsWWDdpbNlg1aWlpYNWM2AgAKAAACgAAAAAAAAAAAAAAAgAAAJIAIAD/2Q==" alt="Chania">
                    </div>

                    <div class="item">
                        <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQZK3A4EeN9B6OcplrB4-TX8FpxXq5TnsZ0Z_ZOv6NeM7vsM2D_yg" alt="Flower">
                    </div>

                    <div class="item">
                        <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcTQA-uBLjOfr3Wvnsofqua39XvKwxjsrhAkQq2bVl3otevj7Zv6PA" alt="Flower">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Próxima</span>
                </a>
            </div>
        </section>
        <section id="Cursos" class="container-fluid">
            <h1>Cursos</h1>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        </section>

        <?php include  './noticias/noticiasForm.php'; ?>

        <section id="Fotos" class="container-fluid">
            <h1>Fotos</h1>
            <div class="row">
                <div class="col-xs-6 col-md-3">
                    <a href="#" class="thumbnail">
                        <img src="http://placehold.it/350x120">
                    </a>
                    <a href="#" class="thumbnail">
                        <img src="http://placehold.it/350x120">
                    </a>
                    <a href="#" class="thumbnail">
                        <img src="http://placehold.it/350x120">
                    </a>                    
                </div>
                <div class="col-xs-6 col-md-3">
                    <a href="#" class="thumbnail">
                        <img src="http://placehold.it/350x120">
                    </a>
                    <a href="#" class="thumbnail">
                        <img src="http://placehold.it/350x120">
                    </a>
                    <a href="#" class="thumbnail">
                        <img src="http://placehold.it/350x120">
                    </a>                    
                </div>
                <div class="col-xs-6 col-md-3">
                    <a href="#" class="thumbnail">
                        <img src="http://placehold.it/350x120">
                    </a>
                    <a href="#" class="thumbnail">
                        <img src="http://placehold.it/350x120">
                    </a>
                    <a href="#" class="thumbnail">
                        <img src="http://placehold.it/350x120">
                    </a>                    
                </div>
                <div class="col-xs-6 col-md-3">
                    <a href="#" class="thumbnail">
                        <img src="http://placehold.it/350x120">
                    </a>
                    <a href="#" class="thumbnail">
                        <img src="http://placehold.it/350x120">
                    </a>
                    <a href="#" class="thumbnail">
                        <img src="http://placehold.it/350x120">
                    </a>                    
                </div>
            </div>
            <nav> 
                <ul  class= "pagination" > 
                    <li> 
                        <a  href= "#"  aria-label= "Anterior" > 
                            <span  aria-hidden= "true" > « </span> 
                        </a> 
                    </li> 
                    <li><a  href= "#" > 1 </a></li> 
                    <li><a  href= "#" > 2 </a></li> 
                    <li><a  href= "#" > 3 </a></li> 
                    <li> 
                        <a  href= "#"  aria-label= "Proxima" > 
                            <span  aria-hidden= "true" > » </span> 
                        </a> 
                    </li> 
                </ul> 
            </nav>
        </section>
        <section id="Videos" class="container-fluid text-center">
            <h1>Videos</h1>
            <iframe width="90%" height="80%" src="https://www.youtube.com/embed/videoseries?list=PLVpmN2T0ZVYXObtTizne3LU1hKKBgE5_U" frameborder="0" allowfullscreen></iframe>
        </section>
        <?php include './contato/contatoForm.php'; ?>
        <section id="Localizacao" class="container-fluid text-center">
            <h1>Localização </h1>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d28411.02199277725!2d-48.9140747472448!3d-27.112909543324925!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x0b0ebeaaf853b447!2sSENAI+-+Servi%C3%A7o+Nacional+de+Aprendizagem+Industrial!5e0!3m2!1spt-BR!2sbr!4v1447717805526" width="90%" height="80%" frameborder="0" style="border:0" allowfullscreen></iframe>
        </section>

        <!-- Javascript -->
        <script src="js/jquery-1.11.3.min.js" ></script>
        <script src="js/bootstrap.min.js" ></script>
        <script src="js/validator.js"></script>
        <script src="js/meuscript.js"></script>
        <script src="js/contato.js"></script>
        <script src="js/newsletter.js"></script>        
    </body>
</html>