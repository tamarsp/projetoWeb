<?php
session_start();
if (isset($_SESSION['erro'])) {
    echo '<span style="color:red;">' . $_SESSION['erro'] . '</span>';
    unset($_SESSION['erro']);
}
if (isset($_SESSION['sucesso'])) {
    echo '<span style="color:green;">' . $_SESSION['sucesso'] . '</span>';
    unset($_SESSION['sucesso']);
}
?>
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
        <!--Inicio cadastro-->
        <div class="container">
            <div class="row centered-form">
                <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Cadastro</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" action="../controller/cadastroController.php" method="post">
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="Nome" id="Nome"
                                                class="form-control input-sm floatlabel" placeholder="Nome" required>
                                                <?php if (isset($_GET['error']) && $_GET['error'] == 'nome') {
                                                    echo '<span style="color:red;">Nome inválido</span>';
                                                } ?>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="Sobrenome" id="Sobrenome"
                                                class="form-control input-sm" placeholder="Sobrenome" required>
                                                <?php if (isset($_GET['error']) && $_GET['error'] == 'sobrenome') {
                                                    echo '<span style="color:red;">Sobrenome inválido</span>';
                                                } ?>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control input-sm"
                                        placeholder="Endereço de Email" required>
                                        <?php if (isset($_GET['error']) && $_GET['error'] == 'email') {
                                            echo '<span style="color:red;">Email inválido</span>';
                                        } ?>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="password" name="Senha" id="Senha"
                                                class="form-control input-sm" placeholder="Senha" required>
                                                <?php if (isset($_GET['error']) && $_GET['error'] == 'senha') {
                                                    echo '<span style="color:red;">Senha inválida</span>';
                                                } ?>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="password" name="Senha_confirmacao"
                                                id="Senha_confirmacao" class="form-control input-sm"
                                                placeholder="Confirme a Senha" required>
                                                <?php if (isset($_GET['error']) && $_GET['error'] == 'senha_confirmacao') {
                                                    echo '<span style="color:red;">As senhas não coincidem</span>';
                                                } ?>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <input type="submit" value="Cadastrar" class="btn btn-info btn-block col-md-6 ">
                                <input type="hidden" name="error" value="<?php echo isset($_GET['error']) ? $_GET['error'] : ''; ?>">
                                <?php
                                if (isset($_GET['success']) && $_GET['success'] == '1') {
                                    echo '<span style="color:green;">Cadastro realizado com sucesso!</span>';
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Fim do cadastro-->
    </main>
    <footer>
        
    </footer>
</body>

</html>