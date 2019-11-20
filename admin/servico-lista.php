<?php 
include_once 'classes/autoload.php';

Login::checkAuth();

$servicoDao = new ServicoDao();
$lista = $servicoDao->select();
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

        <h3> SERVIÇOS </h3>
        <a href="servico-cadastra.php"><button> Novo serviço </button></a>
        <div class="container">

            <?php foreach($lista as $serv): ?>
            <div class="item">
                <h3><?php echo $serv->getTitulo(); ?></h3>
                <p><?php echo $serv->getSubtitulo(); ?></p>
                <button onclick="window.location='servico-edita.php?id=<?php echo $serv->getId(); ?>';"> Editar </button>
                <button onclick="confirm('Deseja exclir este registro?') ? window.location='servico-deleta-ok.php?id=<?php echo $serv->getId(); ?>' : stop = false;">Excluir</button>
            </div>
            <?php endforeach; ?> 

        </div>
    </section>

    <footer>
        
    </footer>
    </body>
    </html>