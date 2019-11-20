<?php
include_once 'classes/autoload.php';

//Verifica se veio tudo preenchido do formulário
if (isset($_GET['id']) && $_GET['id'] != "") {

    $servico = new Servico();
    $servico->setId($_GET['id']);

    $servicoDao = new ServicoDao();
    $servicoData = $servicoDao->selectById($servico);  
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
        
        <h2> Serviço </h2>
        <div id="form">
                <h3> Editar informações:  </h3>
                <div class="areaform">
                <form action="servico-edita-ok.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $servicoData->getId(); ?>" >

                    <label for="produto">Título:</label>
                    <input value="<?php echo $servicoData->getTitulo(); ?>" type="text" name="titulo" placeholder="Título"  required="true">

                    <label for="mes">Subtítulo:</label>
                    <input value="<?php echo $servicoData->getSubtitulo(); ?>" type="text" name="subtitulo" placeholder="Subtítulo"  required="true">

                    <label for="descricao">Descrição:</label>
                    <input value="<?php echo $servicoData->getDescricao(); ?>" type="text" name="descricao" placeholder="Descrição"  required="true">

                <button class="button" type="submit"> Confirmar</button>
                </form>
            </div>
        </div>

    </section>

    <footer>
        
    </footer>
    </body>
</html>