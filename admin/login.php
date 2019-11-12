</html>
<html>
    <head><title> MARKAELA </title>
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script src="assets/js/script.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="assets/css/login.css">
        <link rel="sortcut icon" href="assets/img/icon.ico" type="image/x-icon"/>
        <meta charset="utf-8">
    </head>

<body> 
    <header>
        <div class="imagemtopo">
            <img src="assets/img/logoslogan.png" width="40%"/>
        </div>
    </header>
    <section id="formlogin">
        <div class="formlogin">
            <form class="form-inline" action="login-ok.php" method="POST">
                <label for="email">E-mail:</label>
                <input type="email" id="email" placeholder="Enter email" name="email" value="admin@admin.com">
                <label for="pwd">Senha:</label>
                <input type="password" id="pwd" placeholder="Enter password" name="password"  value="123">
                <button type="submit">Submit</button>
            </form>
        </div>
        <a href="usuario-cadastra.php"> Cadastre-se </a>
    </section>
    
    <footer>
    </footer>
</body>
</html>