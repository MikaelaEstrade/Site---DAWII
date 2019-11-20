<?php
include_once 'classes/autoload.php';

//Verifica se veio tudo preenchido do formulário
if (isset($_POST['nome']) && $_POST['nome'] != "" 
        && isset($_POST['email']) && $_POST['email'] != ""
        && isset($_POST['telefone']) && $_POST['telefone'] != ""
        && isset($_POST['assunto']) && $_POST['assunto'] != ""
        && isset($_POST['texto']) && $_POST['texto'] != "") {

    $mensagem = new Mensagem();
    $mensagem->setNome($_POST['nome']);
    $mensagem->setEmail($_POST['email']);
    $mensagem->setTelefone($_POST['telefone']);
    $mensagem->setAssunto($_POST['assunto']);
    $mensagem->setTexto($_POST['texto']);

    $mensagemDao = new MensagemDao();
    $mensagemDao->insert($mensagem);
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
    
    <!-- FALE CONOSCO -->
    <section id="contato">
        <h2> Mensagem enviada com sucesso! </h2>
     </section>
    
    <footer> 
    <img src="assets/img/logoslogan.png"/> </footer>
</body>
</html>