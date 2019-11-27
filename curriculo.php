<?php 
include_once 'classes/autoload.php';

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
        
    <!-- NAVBAR SCROLL--> 
    <div class="menu_mluv_retratil">
        <nav>
		<a href="portfolio.php">Portfólio</a>
		<a href="servicos.php">Serviços</a>
		<a href="curriculo.php">Currículo</a>
		<a href="contato.php">Contato</a>
        <a href="index.php"><img src="assets/img/logo.png" width="150px;" id="logo"/></a>
        </nav>
    </div>
    </header>
    
    <!-- TOPO -->
    <section id="tp">
        <a href="index.php"> <img src="assets/img/logoselo.png" height="400px;"/> </a>
        <div class="menutop"> 
            <ul class="menu">
                <li><a href="portfolio.php">Portfólio</a></li>
                <li><a href="curriculo.php">Currículo</a></li>
                <li><a href="servicos.php">Serviços</a></li>
                <li><a href="contato.php">Contato</a></li>
            </ul>
        </div>
    </section>
    <!-- CURRICULO -->
    <section id="curriculo">
        <h2> Currículo </h2>     
        
        <div id="imgcurriculo">
            <img src="assets/img/port.png" width="200px;"/>
            <h4> Nome pessoa </h4>
            <p> abobrinha freelancer </p> 
        </div>
        
        <?php foreach($lista as $curr): ?>
        <div class="itemcurriculo">
            <h3><?php echo $curr->getEmpresa(); ?></h3>
            <ul style="list-style-type:disc;">
                <li><?php echo $curr->getLocal(); ?></li>
                <li><?php echo $curr->getFuncao(); ?></li>
                <li><?php echo $curr->getPeriodo(); ?></li>
            </ul>  
        </div>        
        <?php endforeach; ?> 

    </section>
    
    <section id="fc">
        <h3> Gostou do nosso trabalho? </h3>
        <p> Entre em contato conosco!</p>
        <a href="contato.html"> <button class="button"> Enviar mensagem </button> </a>
    </section>
    
    
    <footer> 
    <img src="assets/img/logoslogan.png"/> </footer>
</body>
</html>