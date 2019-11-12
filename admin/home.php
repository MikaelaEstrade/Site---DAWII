<?php 
include_once 'classes/autoload.php';

Login::checkAuth();

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
                <li style="float:right"><a class="active" href="usuario-lista.php">Minha conta</p></li>
            </ul>
        </nav>
        
        <nav id="vertical"> 
            <ul>
                <li><a class="active" href="index.html">Home</a></li>
                <li><a href="portfolio.html">Portfólio</a></li>
                <li><a href="servicos.html">Serviços</a></li>
                <li><a href="curriculo.html">Currículo</a></li>
                <li><a href="mensagens.html">Mensagens</a></li>
            </ul>
        </nav>
    </header> 
        
    <section id="content">
        <div class="areahome"> 
            <h3> PORTFÓLIO </h3> 
            <a href="portfolio.html"><img src="assets/img/port.png" height="70px"> </a>
            <a href="portfolio.html"><img src="assets/img/port.png" height="70px"> </a>
            <a href="portfolio.html"><img src="assets/img/port.png" height="70px"> </a>
            <a href="portfolio.html"><img src="assets/img/port.png" height="70px"> </a>
            <a href="portfolio.html"><img src="assets/img/port.png" height="70px"> </a>
            <a href="portfolio.html"><img src="assets/img/port.png" height="70px"> </a>
            <a href="portfolio.html"><img src="assets/img/port.png" height="70px"> </a>
            <a href="portfolio.html"><img src="assets/img/port.png" height="70px"> </a>
            <a href="portfolio.html"><img src="assets/img/port.png" height="70px"> </a>
        </div>

        <div class="areahome"> <h3> SERVIÇOS </h3>
            <table>
                <tr>
                    <td>
                        <ul style="list-style-type:disc;">
                            <li>Serviço 1</li>
                            <li>Serviço 2</li>
                            <li>Serviço 3</li>
                        </ul>
                    </td>
                <td>
                    <ul style="list-style-type:disc;">
                        <li>Serviço 1</li>
                        <li>Serviço 2</li>
                        <li>Serviço 3</li>
                    </ul>  
                </td>
                </tr>
                </table>
        </div>

        <div class="areahome"> 
        <h3> CURRÍCULO </h3>
        <table>
                <tr>
                    <td>
                        <ul style="list-style-type:disc;">
                            <li>Serviço 1</li>
                            <li>Serviço 2</li>
                            <li>Serviço 3</li>
                        </ul>
                    </td>
                <td>
                    <ul style="list-style-type:disc;">
                        <li>Serviço 1</li>
                        <li>Serviço 2</li>
                        <li>Serviço 3</li>
                    </ul>  
                </td>
                </tr>
                </table>
        </div>

        <div class="areahome">
        <h3> X NOVAS MENSAGENS DE: </h3>
        <table>
                <tr>
                    <td>
                        <ul style="list-style-type:disc;">
                            <li>Nome da pessoa</li>
                            <li>Nome da pessoa</li>
                            <li>Nome da pessoa</li>
                        </ul>
                    </td>
                <td>
                    <ul style="list-style-type:disc;">
                        <li>Nome da pessoa</li>
                        <li>Nome da pessoa</li>
                        <li>Nome da pessoa</li>
                    </ul>  
                </td>
                </tr>
                </table>
        </div>
    </section>

    <footer>
        
    </footer>
    </body>
    </html>