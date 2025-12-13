<?php
session_start();
//require_once __DIR__ . './../configuracao/conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="/assents/images/lupa.ico" type="image/x-icon">
    <link rel="stylesheet" href="../assents/css/login.css">
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet"> 
</head>
<body>
    <!--menu-->
    <div>
        <div>
            <header class="container-header">
                <nav class="container-nav">
                    <ul type="none" class="nav-list">
                        <li class="active"><a href="/login.php" class="mover">Login</a></li>
                        <li class="active"><a href="/sobre.php" class="mover">Sobre</a></li>
                        <li class="active"><a href="/cadastro.php" class="mover">Cadastro</a></li>
                    </ul>
                </nav>
            </header>
            <br>
        </div>
        <!--fim menu-->
        <!--conteúdo-->
        <div class="container-main">
            <main>                
                <h1>Login</h1>
                <form action="" method="post" class="form-login">
                    <img src="../assents/images/imglogin.jpg" alt="" width="500" height="500" class="imgladod">
                    <div class="container-label inputs">
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" placeholder="Digite seu email" class="input">                   
                        <label for="senha">Senha</label>
                        <input type="password" id="senha" name="senha" placeholder="Digite sua senha" minlength="8" maxlength="16" class="input">
                        <button type="submit" class="btn-cadastro">Entrar</button>
                    </div>
                </form>
            </main>
            <!--fim conteúdo-->
        </div>
    </div>
    <!--rodapé-->
    <footer>
        <p>© 2025 Todos os direitos reservados.</p>
        <p>
            <a href="https://github.com/tamarsp/projetoWeb"><img src="../assents/images/githubimg.png" alt="github" width="50" height="50"></a>
        </p>
    </footer>
    <div id="preloader">
        <div id="loader"></div>
    </div>
    <script src="/assents/js/preloader.js"></script>
</body>
</html>