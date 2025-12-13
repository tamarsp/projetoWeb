<?php
session_start();
//require_once __DIR__ . './../configuracao/conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre</title>
    <link rel="icon" href="/assents/images/lupa.ico" type="image/x-icon">
    <link rel="stylesheet" href="../assents/css/sobre.css">
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
                <h1>Sobre</h1>
                <div class="sobre">
                    <img src="..\assents\images\imgsobre1sf.png" alt="" width="500" height="500" class="imgsobre">
                    <p>
                    Esta aplicação foi desenvolvida com o propósito fundamental de realizar uma pesquisa abrangente sobre os estudantes da área de tecnologia. O objetivo primordial é obter um conhecimento aprofundado sobre esse público, focando especificamente em suas dificuldades e desafios tanto no meio acadêmico quanto no socioeconômico.
                </p>    
                <p>
                    A área de tecnologia atrai um número crescente de talentos, mas o caminho para a formação e o sucesso profissional é frequentemente permeado por obstáculos únicos. Compreender a natureza desses desafios é crucial para instituições de ensino, formuladores de políticas e empresas que buscam apoiar o desenvolvimento de futuros profissionais de tecnologia.
                </p>
                <p>
                    A pesquisa se concentra em duas dimensões interconectadas de dificuldades:
                    <ol>
                        <h3>Meio Acadêmico:</h3>
                        <li>Engajamento e Retenção: Identificar fatores que levam à evasão ou ao baixo desempenho (por exemplo, a complexidade de certas disciplinas como matemática e programação, a qualidade da infraestrutura de laboratórios, a metodologia de ensino).</li>
                        <li>Recursos de Estudo: Avaliar o acesso a materiais de qualidade, plataformas de e-learning e mentoria especializada.</li>
                        <li>Equilíbrio entre Teoria e Prática: Entender as dificuldades na aplicação do conhecimento teórico em projetos práticos e estágios.</li>
                    </ol>  
                    <ol>
                        <h3>Meio Socioeconômico:</h3>
                        <li> Carga Horária e Trabalho: Avaliar a necessidade de conciliar estudos e trabalho, e como isso impacta o tempo e a energia dedicados à formação.</li>   
                        <li>   Acesso à Tecnologia: Mensurar a disparidade no acesso a hardware e software de ponta, além de conectividade de internet de alta velocidade, que são essenciais para a área.</li>
                        <li>Suporte Financeiro: Investigar a dependência de bolsas, auxílios e a pressão financeira que pode influenciar as escolhas acadêmicas e o foco nos estudos.</li>
                    </ol>    
                </p>
                <p>
                    <h2>Relevância e Impacto Esperado</h2>
                    Os dados coletados por meio desta aplicação fornecerão ** insights valiosos** para: <br>
                    Instituições de Ensino: Ajustar currículos, oferecer programas de apoio mais direcionados (aulas de reforço, tutoria, etc.) e investir em infraestrutura que atenda às necessidades reais dos alunos. <br>
                    Setor Público: Informar a criação de políticas públicas mais eficazes, como programas de bolsas de estudo ampliados, incentivos fiscais para a compra de equipamentos e melhoria da conectividade em áreas de baixa renda. <br>
                    Empresas de Tecnologia: Entender melhor o perfil dos futuros talentos e desenvolver programas de trainee ou estágio mais inclusivos e de suporte. <br>
                    Em última análise, esta pesquisa busca transformar as dificuldades identificadas em oportunidades de melhoria, contribuindo para a formação de uma nova geração de profissionais de tecnologia mais bem preparados, engajados e com chances equitativas de sucesso.
                </p>
                </div>
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