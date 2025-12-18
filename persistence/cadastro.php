<?php
session_start();
//require_once __DIR__ . './../configuracao/conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="icon" href="/assents/images/lupa.ico" type="image/x-icon">
    <link rel="stylesheet" href="../assents/css/cadastro.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet"> 
</head>
<body>
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
        </div>
        <div class="container-main">
            <main>
                <h1>Cadastro</h1>
                <form action="" method="post" class="form-cadastro"> 
                    <img src="../assents/images/imglogin.jpg" alt="" width="500" height="500" class="imgladod">
                    <div class="container-label inputs">
                        <label for="nome">Nome</label>
                        <input type="text" id="nome" name="nome" placeholder="Digite seu nome" class="input">
                        <label for="sobrenome">Sobrenome</label>
                        <input type="text" id="sobrenome" name="sobrenome" placeholder="Digite seu sobrenome" class="input">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Digite seu email" class="input">
                        <label for="senha">Senha</label>
                        <input type="password" id="senha" name="senha" placeholder="Digite sua senha" minlength="8" maxlength="16" class="input">
                        <label for="confirmar_senha">Confirmar Senha</label>
                        <input type="password" id="confirmar_senha" name="confirmar_senha" placeholder="Confirme sua senha" minlength="8" maxlength="16" class="input">
                        <button type="submit" class="btn-cadastro">Cadastrar</button>
                    </div>
                </form>
            </main>
        </div>
    </div>
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