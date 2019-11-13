<?php
include_once 'classes/autoload.php';

Login::checkAuth();
?>

<html>
    <head><title> MARKAELA </title>
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script src="assets/js/script.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="sortcut icon" href="assets/img/icon.ico" type="image/x-icon"/>
        <meta charset="utf-8">
    </head>
    <body>
    <header>
        <nav id="horizontal">
            <ul>
                <li><a href="index.html"><img src="assets/img/logo.png" width="150x"> </a></li>
                <li style="float:right"><a class="active" href="login.html">Sair</a></li>
                <li style="float:right"><a class="active" href="minhaconta.html">Minha conta</a></li>
            </ul>
        </nav>

        <nav id="vertical"> 
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="portfolio.html">Portfólio</a></li>
                <li><a  class="active" href="servicos.html">Serviços</a></li>
                <li><a href="curriculo.html">Currículo</a></li>
                <li><a href="mensagens.html">Mensagens</a></li>
            </ul>
        </nav>
    </header> 
        
    <section id="content">
    <h2> Serviços </h2>
            <div id="form">
                    <h3> Inserir novo serviço:  </h3>
                    <div class="areaform">
                        <form action="portfolio-cadastra-ok.php" method="POST" enctype="multipart/form-data">

                            <label for="descricao">Descrição:</label>
                            <input placeholder="Descrição" name="descricao" required="true">

                            <label for="imagem">Imagem:</label>
                            <input type="file" placeholder="Imagem" name="imagem" required="true">

                         <button class="button" type="submit">Confirmar</button>
                        </form>
                    </div>
                 </section>
            </div>
    
        </section>
    <footer>
        
    </footer>
</body>
</html>