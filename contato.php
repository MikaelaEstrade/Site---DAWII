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
        <h2> Entre em contato conosco: </h2>
        <div class="areaform">
            <form method="post" action="contato-ok.php"> 
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" placeholder="Insira seu nome">

                <label for="email">E-mail para contato</label>
                <input type="email" id="email" name="email" placeholder="Insira seu e-mail">

                <label for="Telefone">Telefone para contato:</label>
                <input type="text" id="telefone" name="telefone" placeholder="Insira seu número de telefone ou celualar">

                <label for="Telefone">Assunto:</label>
                <input type="text" id="telefone" name="assunto" placeholder="Insira seu número de telefone ou celualar">

                <label for="mensagem">Mensagem:</label>
                <textarea id="mensagem" name="texto" placeholder="Escreva sua mensagem" style="height:200px"></textarea>

                <button class="button" type="submit"> Enviar mensagem </button>
            </form>
        </div>
     </section>
    
    <footer> 
    <img src="assets/img/logoslogan.png"/> </footer>
</body>
</html>