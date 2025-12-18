<?php
session_start();
//require_once __DIR__ . './../configuracao/conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório</title>
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
                        <li class="active"><a href="/pesquisa1.php" class="mover">Pesquisa</a></li>
                        <li class="active"><a href="/sobre.php" class="mover">Sobre</a></li>
                        <li class="active"><a href="/persistence/relatorio.php" class="mover">Relatório</a></li>
                        <li class="active"><a href="/perfil.php" class="mover">Perfil</a></li>
                        <li class="active"><a href="/sair.php" class="mover">Sair</a></li>
                    </ul>
                </nav>
            </header>
        </div>

        <div>
            <main>
                <h1>Relatório</h1>
                <p>Aqui você pode visualizar os relatórios gerados a partir das pesquisas realizadas pelos usuários. Esses relatórios fornecem insights valiosos sobre as opiniões e experiências dos estudantes em relação ao conteúdo programático, recursos disponíveis e desafios enfrentados durante o curso.</p>
                <p>Os dados coletados são analisados para identificar tendências e áreas que necessitam de melhorias, ajudando a instituição a aprimorar a qualidade do ensino e a infraestrutura oferecida aos alunos.</p>
                <p>Para acessar os relatórios detalhados, clique no botão abaixo:</p>
                <button class="btn-cadastro">Ver Relatórios</button>
            </main>
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