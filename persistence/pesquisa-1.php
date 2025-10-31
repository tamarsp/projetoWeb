<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</head>

<body>

    <head>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div>
                <ul class="nav justify-content-center">
                    <img src="" alt="">
                    <li class="nav-item">
                        <a class="nav-link" href="/persistence/relatorio.html">Relatório</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/persistence/pesquisa-1.html">Primeira Pesquisa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/persistence/pesquisa-2.html">Segunda Pesquisa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/persistence/contato.php">Contato</a>
                    </li>
                </ul>
            </div>
        </nav>
    </head>
    <main>
        <h1>Primeira pesquisa</h1>
        <!--Inicio da pesquisa -->
        <form action="" method="post" class="row row-cols-lg-auto g-3 align-items-center ">
            <div>
                <label for="" class="">
                    <div class="form-radio mb-3">
                    <p>Idade</p>
                    <input type="radio" name="idade" value="18-25"> 18-25
                    <input type="radio" name="idade" value="26-35"> 26-35
                    <input type="radio" name="idade" value="36-45"> 36-45
                    <input type="radio" name="idade" value="46-55"> 46-55
                    <input type="radio" name="idade" value="56+"> 56+
                    </div>
                    <div class="mb-3">
                    <p>Gênero</p>
                    <select name="genero" id="genero" class="">
                        <option value="masculino">Masculino</option>
                        <option value="feminino">Feminino</option>
                        <option value="outro">Outro</option>
                    </select>
                    </div>
                    <div class="mb-3">
                    <p>Como se autodeclara?</p>
                    <select name="autodeclaracao" id="autodeclaracao">
                        <option value="branco">Branco</option>
                        <option value="preto">Preto</option>
                        <option value="pardo">Pardo</option>
                        <option value="indigena">Indígena</option>
                        <option value="amarelo">Amarelo</option>
                    </select>
                    </div>
                    <div class="mb-3">
                        <p>Onde concluiu a maior parte do ensino médio?</p>
                        <input type="radio" name="escola" value="Publica">Escola Publica 
                        <input type="radio" name="escola" value="Particular">Escola Particular
                    </div>
                    <div class="mb-3">
                        <p>Qual a sua situação em relação ao trabalho?</p>
                        <input type="radio" name="Trabalho" value="nao_Trabalha">Não trabalha
                        <input type="radio" name="Trabalho" value="Tr">Esta trabalhando                        
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p>Qual o fator que mais influenciou a sua escolha pelo curso de tecnologia?</p>
                        <input type="radio" name="fator_escolha" value="empregabilidade">Alta empregabilidade e perspetivas salariais elevadas (motivação económica)
                        <input type="radio" name="fator_escolha" value="interesse">Forte interesse e paixão pela tecnologia (motivação pessoal)
                        <input type="radio" name="fator_escolha" value="mudancaCarreira">Necessidade de mudar de carreira/progressão na carreira atual
                        <input type="radio" name="fator_escolha" value="facilidadeAcesso">Facilidade de acesso ao curso (proximidade, nota de corte)
                    </div>
                    <div>
                        <p>O curso de tecnologia representa uma oportunidade de melhorar significativamente a sua condição socioeconómica e a da sua família?</p>
                        <input type="radio" nome="Oportunidade" value="sim_certeza">Sim, com certeza
                        <input type="radio" nome="Oportunidade" value="provavelmente_sim">Provavelmente sim
                        <input type="radio" nome="Oportunidade" value="nao_certeza">Não tenho certeza
                        <input type="radio" nome="Oportunidade" value="nao_provavelmente">Não, provavelmente não
                    </div>
                    <div>
                        <p>Qual foi a maior dificuldade de natureza socioeconómica que enfrentou (ou enfrenta) para se manter no curso?</p>
                        <input type="radio" nome="dificuldade" value="custo_curso">Custos do curso (propinas, mensalidades)
                        <input type="radio" nome="dificuldade" value="transporteMaterial">Custos de transporte e material
                        <input type="radio" nome="dificuldade" value="faltaTempo">Necessidade de trabalhar para sustentar a família/os estudos (falta de tempo)
                        <input type="radio" nome="dificuldade" value="internetEquipamentos">Falta de equipamentos ou acesso à internet de qualidade
                        <input type="radio" nome="dificuldade" value="nenhuma">Não enfrentei grandes dificuldades desta natureza
                    </div>
                    <div>
                        <p>Beneficia (ou beneficiou) de algum programa de apoio/assistência estudantil (bolsas de estudo, auxílio financeiro, auxílio-alimentação)?</p>
                        <input type="radio" nome="apoio" value="sim_bolsagov">Sim, bolsa/apoio do governo/estado
                        <input type="radio" nome="apoio" value="sim_bolsafacul">Sim, bolsa/apoio da própria instituição
                        <input type="radio" nome="apoio" value="nao_masQueria">Não, mas gostaria/precisava
                        <input type="radio" nome="apoio" value="nao">Não
                    </div>
                </label>
                <div>
                    <button class="" type="submit">Enviar</button>
                </div>
            </div>
        </form>
    </main>
</body>

</html>