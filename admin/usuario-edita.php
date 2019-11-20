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
        
        <h2> Minha conta </h2>
        <div id="form">
                <h3> Editar informações:  </h3>
                <div class="areaform">
                    <form action="usuario-edita-ok.php" method="POST"> 
                        <input type="hidden" name="id" value="<?php echo $userData->getId(); ?>">
                        <label for="nome">Nome</label>
                        <input type="text" id="nome" name="nome" value="<?php echo $userData->getNome(); ?>" placeholder="Insira seu novo nome">
        
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email"  value="<?php echo $userData->getEmail(); ?>"  placeholder="Insira seu novo nome">

                        <label for="nsenha">Nova senha:</label>
                        <input type="password" id="nsenha" name="senha" value="<?php echo $userData->getSenha(); ?>" placeholder="Insira sua nova senha">
                        
                        <label for="nsenha">Confirme sua nova senha:</label>
                        <input type="password" id="nsenha" name="senha" value="<?php echo $userData->getSenha(); ?>" placeholder="Confirme sua nova senha">

                        <button class="button"> Salvar alterações </button>
                    </form><br><br>
                </div>
        </div>

    </section>

    <footer>
        
    </footer>
    </body>
</html>