<?php
include_once 'classes/autoload.php';

Login::checkAuth();

//Verifica se veio tudo preenchido do formulário
if (isset($_POST['descricao']) && $_POST['descricao'] != "" ) {

    $nomeimagem = $_FILES["imagem"]["name"];
    $nometemporario = $_FILES["imagem"]["tmp_name"];
    $diretorio = "assets/img/imagem/".$nomeimagem;

    if(move_uploaded_file($nometemporario,$diretorio))
            echo "imagem enviada";
        else
            echo "imagem não enviada";

    $portfolio = new Portfolio();
    $portfolio->setDescricao($_POST['descricao']);
    $portfolio->setSrc($nomeimagem);

    $portfolioDao = new PortfolioDao();
    $portfolioDao->insert($portfolio);
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
    <h2> Cadastrado com sucesso! </h2>
    
        </section>
    <footer>
        
    </footer>
</body>
</html>