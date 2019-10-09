<?php
include_once 'classes/autoload.php';

Login::checkAuth();
//Verifica se veio tudo preenchido do formulário
if (isset($_GET['id']) && $_GET['id'] != "") {

    $usuario = new Usuario();
    $usuario->setId($_GET['id']);

    $usuarioDao = new UsuarioDao();
    $userData = $usuarioDao->selectById($usuario);
    
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
        
        <h2> Minha conta </h2>
        <div id="form">
                <h3> Editar informações:  </h3>
                <div class="areaform">
                    <form action="editarconta-ok.php"> 
                        <label for="nome">Nome</label>
                        <input type="text" id="nome" name="nome" placeholder="Insira seu novo nome">
        
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" placeholder="Insira seu novo nome">

                        <label for="telefone">Descrição longa</label>
                        <input type="text" id="telefone" name="telefone" placeholder="Insira o novo telefone">

                        <label for="nsenha">Nova senha:</label>
                        <input type="password" id="nsenha" name="nsenha" placeholder="Insira sua nova senha">
                        
                        <label for="nsenha">Confirme sua nova senha:</label>
                        <input type="password" id="nsenha" name="nsenha" placeholder="Confirme sua nova senha">
                        
                        <label for="nsenha">Senha antiga:</label>
                        <input type="password" id="nsenha" name="nsenha" placeholder="Por segurança insira sua antiga senha">

                        <button class="button" type="submit"> Salvar alterações </button>
                    </form><br><br>
                </div>
        </div>

    </section>

    <footer>
        
    </footer>
    </body>
</html>