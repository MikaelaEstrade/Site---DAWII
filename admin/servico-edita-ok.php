<?php
include_once 'classes/autoload.php';

Login::checkAuth();

//Verifica se veio tudo preenchido do formulário
if (isset($_POST['titulo']) && $_POST['titulo'] != "" 
        && isset($_POST['subtitulo']) && $_POST['subtitulo'] != ""
        && isset($_POST['descricao']) && $_POST['descricao'] != ""){

    $servico = new Servico();
    $servico->setId($_POST['id']);
    $servico->setTitulo($_POST['titulo']);
    $servico->setSubtitulo($_POST['subtitulo']);
    $servico->setDescricao($_POST['descricao']);

    $servicoDao = new ServicoDao();
    $servicoDao->update($servico);
}
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
                <li><a href="servicos.html" class="active">Serviços</a></li>
                <li><a href="curriculo.html">Currículo</a></li>
                <li><a href="mensagens.html">Mensagens</a></li>
            </ul>
        </nav>
    </header> 
        
    <section id="content">
        
        <h2> Alterações feitas com sucesso! </h2>
        
    </section>

    <footer>
        
    </footer>
    </body>
</html>
