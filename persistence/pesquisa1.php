<?php
session_start();
//require_once __DIR__ . './../configuracao/conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa</title>
    <link rel="icon" href="/assents/images/lupa.ico" type="image/x-icon">
    <link rel="stylesheet" href="../assents/css/pesquisa.css">
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
        <div class="container-main">
            <main>
                <h1>Pesquisa</h1>
                <form action="" method="post" class="pesquisa-form">
                    <div class="container-label inputs">
                        <label for="desafiadorConteudo" class="container-label">Em uma escala de 1 a 5, o quão desafiador você considera o conteúdo programático (aulas, matérias, projetos) ser em relação ao seu conhecimento prévio? (1=Fácil, 5=Muito Difícil) </label><br>
                        <input type="radio" class="input" id="desafiadorConteudo1" name="desafiadorConteudo" value="1" required>1
                        <input type="radio" class="input" id="desafiadorConteudo2" name="desafiadorConteudo" value="2">2
                        <input type="radio" class="input" id="desafiadorConteudo3" name="desafiadorConteudo" value="3">3
                        <input type="radio" class="input" id="desafiadorConteudo4" name="desafiadorConteudo" value="4">4
                        <input type="radio" class="input" id="desafiadorConteudo5" name="desafiadorConteudo" value="5">5 <br>

                        <label for="frequenciaDesmotivado" class="container-label">Com que frequência você se sente desmotivado ou considera desistir do curso devido à dificuldade ou ao método de ensino? (1=Nunca, 5=Sempre)</label><br>
                        <input type="radio" class="input" id="frequenciaDesmotivado1" name="frequenciaDesmotivado" value="1">1
                        <input type="radio" class="input" id="frequenciaDesmotivado2" name="frequenciaDesmotivado" value="2">2
                        <input type="radio" class="input" id="frequenciaDesmotivado3" name="frequenciaDesmotivado" value="3">3
                        <input type="radio" class="input" id="frequenciaDesmotivado4" name="frequenciaDesmotivado" value="4">4
                        <input type="radio" class="input" id="frequenciaDesmotivado5" name="frequenciaDesmotivado" value="5">5 <br>

                        <label for="recursoFaltaQualidade" class="container-label">Qual recurso você sente mais falta ou considera de qualidade insuficiente na sua instituição para o aprendizado prático? (Ex: Laboratórios, computadores, software licenciado, infraestrutura de rede, etc.)</label><br>
                        <input type="text" id="recursoFaltaQualidade" name="recursoFaltaQualidade" placeholder="Digite aqui" class="input"><br>

                        <label for="aprendizadoNaPratica" class="container-label">Você consegue aplicar efetivamente o que aprende em sala de aula (teoria) em projetos práticos ou em atividades profissionais? (1=Quase nunca, 5=Sempre)</label><br>

                        <input type="radio" class="input" id="aprendizadoNaPratica1" name="aprendizadoNaPratica" value="1">1
                        <input type="radio" class="input" id="aprendizadoNaPratica2" name="aprendizadoNaPratica" value="2">2
                        <input type="radio" class="input" id="aprendizadoNaPratica3" name="aprendizadoNaPratica" value="3">3
                        <input type="radio" class="input" id="aprendizadoNaPratica4" name="aprendizadoNaPratica" value="4">4
                        <input type="radio" class="input" id="aprendizadoNaPratica5" name="aprendizadoNaPratica" value="5">5 <br>

                        <label for="motivoReprovacao" class="container-label">Caso tenha reprovado em alguma disciplina, qual foi o principal motivo? </label><br>
                        <input type="text" id="motivoReprovacao" name="motivoReprovacao" placeholder="Digite aqui" class="input" ><br>

                        <label for="trabalhaEnquantoEstuda" class="container-label">Você trabalha (remunerado ou não) enquanto estuda? Em caso afirmativo, quantas horas por semana, em média, você dedica ao trabalho?</label><br>
                        <input type="text" id="trabalhaEnquantoEstuda" name="trabalhaEnquantoEstuda" placeholder="Digite aqui" class="input"><br>

                        <label for="orcamentoSuficiente" class="container-label">O seu orçamento mensal é suficiente para cobrir despesas básicas (moradia, alimentação, transporte) e custos específicos do curso (material, hardware, livros, etc.)? (1=Muito Insuficiente, 5=Totalmente Suficiente)</label><br>
                        <input type="radio" class="input" id="orcamentoInsuficiente1" name="orcamentoSuficiente" value="1">1
                        <input type="radio" class="input" id="orcamentoSuficiente2" name="orcamentoSuficiente" value="2">2
                        <input type="radio" class="input" id="orcamentoSuficiente3" name="orcamentoSuficiente" value="3">3
                        <input type="radio" class="input" id="orcamentoSuficiente4" name="orcamentoSuficiente" value="4">4
                        <input type="radio" class="input" id="orcamentoSuficiente5" name="orcamentoSuficiente" value="5">5 <br>
                        
                        <label for="obstaculoFinanceiro" class="container-label">Qual é o principal obstáculo financeiro que o impede de se dedicar 100% aos estudos?</label><br>
                        <input type="text" id="obstaculoFinanceiro" name="obstaculoFinanceiro" placeholder="Digite aqui" class="input"><br>

                        <label for="TemPc" class="container-label">Você possui acesso a um computador pessoal (notebook/desktop) com configurações adequadas e internet de alta velocidade disponíveis a qualquer momento para realizar seus estudos? (Sim/Não)</label><br>
                        <input type="radio" class="input" id="TemPcSim" name="TemPc" value="Sim">Sim
                        <input type="radio" class="input" id="TemPcNao" name="TemPc" value="Não">Não <br>

                        <label for="auxilioSeManter" class="container-label">Qual é o seu nível de dependência de auxílios (governamentais, da faculdade ou familiares) para se manter no curso? (1=Não dependo, 5=Dependência total para continuar)</label><br>
                        <input type="radio" class="input" id="auxilioSeManter1" name="auxilioSeManter" value="1">1
                        <input type="radio" class="input" id="auxilioSeManter2" name="auxilioSeManter" value="2">2
                        <input type="radio" class="input" id="auxilioSeManter3" name="auxilioSeManter" value="3">3
                        <input type="radio" class="input" id="auxilioSeManter4" name="auxilioSeManter" value="4">4
                        <input type="radio" class="input" id="auxilioSeManter5" name="auxilioSeManter" value="5">5 <br>
                        <input type="submit" value="Enviar" class="btn-cadastro">
                    </div>
                </form>
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