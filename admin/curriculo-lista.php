<?php 
include_once 'classes/autoload.php';

Login::checkAuth();

$curriculoDao = new CurriculoDao();
$lista = $curriculoDao->select();
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

        <h3> Currículo </h3>
        <a href="curriculo-cadastra.php"><button> Novo item </button></a>
        <div class="container">

            <?php foreach($lista as $curr): ?>
            <div class="item">
                <h3><?php echo $curr->getEmpresa(); ?></h3>
                <p><?php echo $curr->getLocal(); ?></p>
                <p><?php echo $curr->getFuncao(); ?></p>
                <p><?php echo $curr->getPeriodo(); ?></p>
                <button onclick="window.location='curriculo-edita.php?id=<?php echo $curr->getId(); ?>';"> Editar </button>
                <button onclick="confirm('Deseja exclir este registro?') ? window.location='curriculo-deleta-ok.php?id=<?php echo $curr->getId(); ?>' : stop = false;">Excluir</button>
            </div>
            <?php endforeach; ?> 

        </div>
    </section>

    <footer>
        
    </footer>
    </body>
    </html>