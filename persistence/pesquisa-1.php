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
        <h1>Pesquisa</h1>
        <!--Inicio da pesquisa -->
        <form action="" method="post" class="form-control container align-items-center ">
            <div>
                <label for="" class="row ">
                    <div class="form-radio mb-3 col lg-3">
                    <p>Informe sua idade</p>
                    <input class="form-check-input mb-3"  type="radio" name="idade" value="18-25"> 18-25 <br>
                    <input class="form-check-input mb-3"  type="radio" name="idade" value="26-35"> 26-35<br>
                    <input class="form-check-input mb-3"  type="radio" name="idade" value="36-45"> 36-45<br>
                    <input class="form-check-input mb-3"  type="radio" name="idade" value="46-55"> 46-55<br>
                    <input class="form-check-input mb-3"  type="radio" name="idade" value="56+"> 56+<br>
                    </div>
                    <div class="mb-3">
                    <p>Informe seu gênero</p>
                    <select name="genero" id="genero" class="">
                        <option class=".form-check row row-cols-auto g-2" value="masculino">Masculino</option>
                        <option class=".form-check row row-cols-auto g-2" value="feminino">Feminino</option>
                        <option class=".form-check row row-cols-auto g-2" value="outro">Outro</option>
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
                        <input type="radio" name="escola" value="Publica">Escola Publica <br>
                        <input type="radio" name="escola" value="Particular">Escola Particular<br>
                    </div>
                    <div class="mb-3">
                        <p>Qual a sua situação em relação ao trabalho?</p>
                        <input type="radio" name="Trabalho" value="nao_Trabalha">Não trabalha<br>
                        <input type="radio" name="Trabalho" value="Tr">Esta trabalhando   <br>                     
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div class="mb-3 ">
                        <p>Qual o fator que mais influenciou a sua escolha pelo curso de tecnologia?</p>
                        <input type="radio" name="fator_escolha" value="empregabilidade">Alta empregabilidade e perspetivas salariais elevadas (motivação económica)<br>
                        <input type="radio" name="fator_escolha" value="interesse">Forte interesse e paixão pela tecnologia (motivação pessoal)<br>
                        <input type="radio" name="fator_escolha" value="mudancaCarreira">Necessidade de mudar de carreira/progressão na carreira atual<br>
                        <input type="radio" name="fator_escolha" value="facilidadeAcesso">Facilidade de acesso ao curso (proximidade, nota de corte)<br>
                    </div>
                    <div class="mb-3 ">
                        <p>O curso de tecnologia representa uma oportunidade de melhorar significativamente a sua condição socioeconómica e a da sua família?</p>
                        <input type="radio" name="Oportunidade" value="sim_certeza">Sim, com certeza<br>
                        <input type="radio" name="Oportunidade" value="provavelmente_sim">Provavelmente sim<br>
                        <input type="radio" name="Oportunidade" value="nao_certeza">Não tenho certeza<br>
                        <input type="radio" name="Oportunidade" value="nao_provavelmente">Não, provavelmente não<br>
                    </div>
                    <div class="mb-3 ">
                        <p>Qual foi a maior dificuldade de natureza socioeconómica que enfrentou (ou enfrenta) para se manter no curso?</p>
                        <input type="radio" name="dificuldade" value="custo_curso">Custos do curso (propinas, mensalidades)<br>
                        <input type="radio" name="dificuldade" value="transporteMaterial">Custos de transporte e material<br>
                        <input type="radio" name="dificuldade" value="faltaTempo">Necessidade de trabalhar para sustentar a família/os estudos (falta de tempo)<br>
                        <input type="radio" name="dificuldade" value="internetEquipamentos">Falta de equipamentos ou acesso à internet de qualidade<br>
                        <input type="radio" name="dificuldade" value="nenhuma">Não enfrentei grandes dificuldades desta natureza<br>
                    </div>
                    <div class="mb-3 ">
                        <p>Beneficia (ou beneficiou) de algum programa de apoio/assistência estudantil (bolsas de estudo, auxílio financeiro, auxílio-alimentação)?</p>
                        <input type="radio" name="apoio" value="sim_bolsagov">Sim, bolsa/apoio do governo/estado<br>
                        <input type="radio" name="apoio" value="sim_bolsafacul">Sim, bolsa/apoio da própria instituição<br>
                        <input type="radio" name="apoio" value="nao_masQueria">Não, mas gostaria/precisava<br>
                        <input type="radio" name="apoio" value="nao">Não<br>
                    </div>
                </label>
                <div>
                    <button class="btn btn-primary" type="submit">Enviar</button>
                </div>
            </div>
        </form>
    </main>
</body>

</html>