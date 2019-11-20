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
    <h2> Serviços </h2>
            <div id="form">
                    <h3> Inserir novo serviço:  </h3>
                    <div class="areaform">
                        <form action="servico-cadastra-ok.php" method="POST" enctype="multipart/form-data">

                            <label for="titulo">Titulo:</label>
                            <input placeholder="Titulo" name="titulo" required="true">

                            <label for="subtitulo">Subtitulo:</label>
                            <input type="text" placeholder="Subtitulo" name="subtitulo" required="true">

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