<?php 
include_once 'classes/autoload.php';

Login::checkAuth();

$usuarioDao = new UsuarioDao();
$lista = $usuarioDao->select();
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
        
       <h2>Administradores:</h2>
        <p>Lista dos administradores do sistema:</p>
        <button type="button" onclick="window.location='usuario-cadastra.php'">Novo administrador</button>
        <table>
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Ações</th>
          </tr>

            <?php foreach($lista as $usario): ?>
            <tr>
                <td><?php echo $usario->getId(); ?></td>
                <td><?php echo $usario->getNome(); ?></td>
                <td><?php echo $usario->getEmail(); ?></td>
                <td>
                    <button type="button" onclick="window.location='usuario-edita.php?id=<?php echo $usario->getId(); ?>';"> Editar </button>
                    <button type="button" onclick="confirm('Deseja exclir este registro?') ? window.location='usuario-deleta-ok.php?id=<?php echo $usario->getId(); ?>' : stop = false;">Deletar</button>
                </td>
            </tr>
            <?php endforeach; ?> 
        </table>

        
    </section>

    <footer>
        
    </footer>
    </body>
</html>