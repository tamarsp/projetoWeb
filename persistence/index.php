<?php
session_start();
if(isset($_SESSION['usuario'])){
    header('Location: inicio.html');
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="../bootstrap-5.3.8-dist/css/bootstrap.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assents/css/index.css">
</head>

<body>

    <div class="preloader" id="preloader">
        <div class="loader" id="loader"></div>
    </div>

    <header>
        <!--Inicio do menu-->
        <nav class="navbar navbar-expand-lg bg-body-wyden container-fluid">
            <div style="justify-content:space-between;">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link" style="color:aliceblue" href="Informacao.html">Informações</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color:aliceblue" href="cadastro.php">Cadastro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color:aliceblue" href="contato.php">Contato</a>
                    </li>                    
                    <li class="nav-item">
                        <a class="nav-link" style="color:aliceblue" href="inicio.html"><img alt="logo wyden" src="../model/Wyden.svg" style="justify-content:flex-end; margin-right: 15px;"></a>
                    </li>
                                        
                </ul>
            </div>
        </nav>
        <!--Fim do menu-->
    </header>
    <main>
        
        <!--Inicio login-->
        <div id="login">
            <h1 class="text-center pt-5">Bem-vindo <?php echo isset($_SESSION['usuario']) ? $_SESSION['usuario'] : ''; ?></h1>
            <div class="container mt-5 mb-5 p-4 rounded-3 bg-light shadow" style="max-width: 600px;">
                <div id="login-row" class="row justify-content-center align-items-center h-100 ">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-md-12">
                            <?php
                            if(isset($_SESSION['erro'])){
                                echo '<div class="alert alert-danger text-center" role="alert">'.$_SESSION['erro'].'</div>';
                                unset($_SESSION['erro']);
                                if(isset($_SESSION['sucesso'])){
                                    echo '<div class="alert alert-success text-center" role="alert">'.$_SESSION['sucesso'].'</div>';
                                    unset($_SESSION['sucesso']);
                                }
                            }
                            ?>
                            <form id="login-form" class="form " action="../controller/loginController.php" method="post">
                                <h3 class="text-center text-info">Login</h3>
                                <div class="form-group">
                                    <label for="Email" class="text-info ">Email:</label><br>
                                    <input type="text" name="email" id="Email" class="form-control" required>
                                    <span class="text-danger">
                                </div>
                                <div class="form-group">
                                    <label for="Senha" class="text-info">Senha:</label><br>
                                    <input type="password" name="senha" id="Senha" class="form-control" required >
                                    <span class="text-danger">
                                </div>
                                <div id="register-link" class="text-right">
                                    <button type="submit" class="btn btn-info">Login</button>
                                    <a href="cadastro.php" class="text-info">Cadastrar-se</a>
                                </div>
                             
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!--Fim do login-->         
    </main>
    <footer>

    </footer>
    <script src="../assents/js/preloader.js"></script>
</body>

</html>
