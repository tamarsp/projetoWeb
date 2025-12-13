<?php
session_start();
//require_once __DIR__ . './../configuracao/conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/assents/images/lupa.ico" type="image/x-icon">
    <title>Inicio</title>  
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../assents/css/index.css"> 
</head>
<body>
    <!--menu-->
    <div>
        <div>
            <header>
                <nav>
                    <li class="active "><a href="/login.php">Login</a></li>
                    <li class="active"><a href="/sobre.php">Sobre</a></li>
                    <li class="active"><a href="/cadastro.php">Cadastro</a></li>
                </nav>
            </header>
            <br>
        </div>
        <!--fim menu-->
        <!--conteúdo-->
        <div>
            <main>
                <h1>Seja Bem-vindo, </h1>
                <p>
                    <h2>Objetivo Principal</h2>
                    Este questionário faz parte de uma pesquisa crucial para compreender e mitigar os desafios enfrentados por estudantes da área de tecnologia no Brasil.
                    <ol type="1">
                        <h3>Nosso objetivo é coletar dados focados em duas áreas principais:</h3>
                        <li>Desafios Acadêmicos: Dificuldades com o conteúdo, métodos de ensino e recursos da sua instituição.</li>
                        <li>Desafios Socioeconômicos: Impacto da conciliação entre estudo/trabalho, acesso à tecnologia e pressão financeira.</li>
                    </ol>
                </p>
                <p>
                    <h2>Por Que Sua Resposta é Importante?</h2>
                    <ul>
                        <h3>Sua participação é fundamental para fornecer ** insights reais e valiosos** que serão utilizados por:</h3>
                        <li>Instituições de Ensino: Para ajustar currículos e criar programas de apoio mais eficazes (aulas de reforço, tutoria).</li>
                        <li>Setor Público: Para informar a criação de políticas de auxílio e bolsas mais justas.</li>
                        <li>Empresas de Tecnologia: Para desenvolver programas de estágio e trainee mais inclusivos.</li>
                    </ul>
                </p>
                <p>
                    Ao compartilhar sua experiência, você contribui diretamente para a melhoria da formação da próxima geração de profissionais de tecnologia, garantindo chances mais equitativas de sucesso.
                </p>
                <p>
                    Levará apenas alguns minutos para responder. Sua voz faz a diferença!
                </p>
            </main>
            <!--fim conteúdo-->
        </div>
    </div>
    <!--rodapé-->
    <footer>    
        <p>© 2025 Todos os direitos reservados.</p>
        <p>
            <a href="https://github.com/tamarsp/projetoWeb"><img src="../assents/images/githubimg.png" alt="github" width="100" height="100"></a>
        </p>
    </footer>
    <div id="preloader">
        <div id="loader"></div>
    </div>
    <script src="/assents/js/preloader.js"></script>
</body>
</html>