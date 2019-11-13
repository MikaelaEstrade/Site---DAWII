<?php
include_once 'classes/autoload.php';

Login::checkAuth();

//Verifica se veio tudo preenchido do formulário
if (isset($_POST['empresa']) && $_POST['empresa'] != "" 
        && isset($_POST['local']) && $_POST['local'] != ""
        && isset($_POST['funcao']) && $_POST['funcao'] != ""
        && isset($_POST['periodo']) && $_POST['periodo'] != "") {

    $curriculo = new Curriculo();
    $curriculo->setEmpresa($_POST['empresa']);
    $curriculo->setLocal($_POST['local']);
    $curriculo->setFuncao($_POST['funcao']);
    $curriculo->setPeriodo($_POST['periodo']);

    $curriculoDao = new CurriculoDao();
    $curriculoDao->insert($curriculo);
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
                <li><a href="servicos.html">Serviços</a></li>
                <li><a class="active" href="curriculo.html">Currículo</a></li>
                <li><a href="mensagens.html">Mensagens</a></li>
            </ul>
        </nav>
    </header> 
        
    <section id="content">
    <h2> Cadastrado com sucesso! </h2>
    
        </section>
    <footer>
        
    </footer>
</body>
</html>