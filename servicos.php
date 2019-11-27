<?php 
include_once 'classes/autoload.php';

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
    
    <!-- SERVIÇOS -->
    <section id="sv"> 
        <h2> Serviços </h2>
        <div class="row" id="containerservices">
        <?php foreach($lista as $serv): ?>
            <div>
                <img src="admin/assets/img/icone/<?php echo $serv->getImagem(); ?>" class="imgserviço" height="100px">
                <h3> <?php echo $serv->getTitulo(); ?> </h3>
                <p> <?php echo $serv->getSubtitulo(); ?> </p>
            </div>
        <?php endforeach; ?> 
        </div>
        
        </div>
        
        <?php foreach($lista as $serv): ?>
        <div class="itemservice">
            <h3><?php echo $serv->getTitulo(); ?> </h3>
            <p> <?php echo $serv->getDescricao(); ?></p>
        </div>
        <?php endforeach; ?> 
    </section>
    
    
    <!-- ÁREA CONTATO -->
    <section id="fc">
        <h3> Gostou do nosso trabalho? </h3>
        <p> Entre em contato conosco!</p>
         <a href="contato.html"> <button class="button"> Enviar mensagem </button> </a>
    </section>
    
    
    <footer> 
    <img src="assets/img/logoslogan.png"/> </footer>
</body>
</html>