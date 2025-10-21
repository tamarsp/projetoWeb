<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <!--Inicio do menu-->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div>
                <ul class="nav justify-content-center">
                    <img src="" alt="">
                    <li class="nav-item">
                        <a class="nav-link" href="/persistence/index.html">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/persistence/Informacao.html">Informações</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/persistence/contato.php">Contato</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!--Fim do menu-->
    </header>
    <main>
        <!-- Inicio do contato -->
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="well well-sm">
                        <form class="form-horizontal" action="/controller/contatoController.php" method="post">
                            <fieldset> <!--<fieldset> é usado para agrupar elementos relacionados dentro de um formulário HTML, criando visualmente uma "caixa" ou "seção"-->
                                <legend class="text-center">Entre em contato</legend>

                                <!-- Nome-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="name">Nome</label>
                                    <div class="col-md-9">
                                        <input id="name" name="name" type="text" placeholder="Seu nome"
                                            class="form-control">
                                    </div>
                                </div>

                                <!-- Email-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="email">Seu E-mail</label>
                                    <div class="col-md-9">
                                        <input id="email" name="email" type="text" placeholder="Seu email"
                                            class="form-control">
                                    </div>
                                </div>

                                <!-- Mensagem -->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="message">Sua mensagem</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" id="message" name="message"
                                            placeholder="Por favor, insira sua mensagem aqui..." rows="5"></textarea>
                                    </div>
                                </div>
                                <br>
                                <!-- Botão -->
                                <div class="form-group">
                                    <div class="col-md-12 text-right">
                                        <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fim do contato -->
    </main>
    <footer>

    </footer>
</body>

</html>