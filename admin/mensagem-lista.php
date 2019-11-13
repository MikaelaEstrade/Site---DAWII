<?php 
include_once 'classes/autoload.php';

Login::checkAuth();

$mensagemDao = new MensagemDao();
$lista = $mensagemDao->select();
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
                <li><a href="curriculo.html">Currículo</a></li>
                <li><a href="mensagens.html">Mensagens</a></li>
            </ul>
        </nav>
    </header> 
        
    <section id="content">
        
       <h2>Mensagens:</h2>
        <button type="button" onclick="window.location='usuario-cadastra.php'">Novo administrador</button>
        <table>
          <tr>
            <th>Remetente</th>
            <th>E-mail</th>
            <th>Assunto</th>
            <th>Ações</th>
          </tr>

            <?php foreach($lista as $mens): ?>
            <tr>
                <td><?php echo $mens->getNome(); ?></td>
                <td><?php echo $mens->getEmail(); ?></td>
                <td><?php echo $mens->getAssunto(); ?></td>
                <td>
                    <button type="button" onclick="window.location='mensagem-visualiza.php?id=<?php echo $mens->getId(); ?>';"> Ver mais </button>
                    <button type="button" onclick="confirm('Deseja exclir este registro?') ? window.location='mensagem-deleta-ok.php?id=<?php echo $mens->getId(); ?>' : stop = false;">Deletar</button>
                </td>
            </tr>
            <?php endforeach; ?> 
        </table>

        
    </section>

    <footer>
        
    </footer>
    </body>
</html>