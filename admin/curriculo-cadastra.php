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
                <li><a href="home.php"><img src="assets/img/logo.png" width="150x"> </a></li>
                <li style="float:right"><a class="active" href="login.php">Sair</a></li>
                <li style="float:right"><a class="active" href="usuario-lista.php">Minha conta</a></li>
            </ul>
        </nav>

        <nav id="vertical"> 
            <ul>
                 <li><a href="home.php">Home</a></li>
                <li><a href="portfolio-lista.php">Portfólio</a></li>
                <li><a href="servico-lista.php.">Serviços</a></li>
                <li><a href="curriculo-lista.php">Currículo</a></li>
                <li><a href="mensagem-lista.php">Mensagens</a></li>
            </ul>
        </nav>
    </header> 
        
    <section id="content">
    <h2> Currículo </h2>
            <div id="form">
                    <h3> Inserir novo item:  </h3>
                    <div class="areaform">
                        <form action="curriculo-cadastra-ok.php" method="POST">

                            <label for="empresa">Empresa:</label>
                            <input placeholder="Empresa" name="empresa" required="true">

                            <label for="local">Local:</label>
                            <input type="text" placeholder="Local" name="local" required="true">

                            <label for="funcao">Função:</label>
                            <input placeholder="Função" name="funcao" required="true">

                            <label for="Período">Periodo:</label>
                            <input type="text" placeholder="Período" name="periodo" required="true">

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