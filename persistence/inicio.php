<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assents/css/inicio.css">
</head>

<body>

    <head>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div>
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <img src="" alt="">
                        <a href="/persistence/inicio.html"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="relatorio.html">Relatório</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pesquisa-1.php">Pesquisa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sair.php">Sair</a>
                    </li>
                </ul>
            </div>
        </nav>
    </head>
    <main>
        <div class="container mt-4 mb-4 p-4 rounded-3 bg-light shadow" style="max-width: 800px;">
            <h1>Bem-vindo <?php echo isset($_SESSION['usuario']) ? $_SESSION['usuario'] : ''; ?></h1>
            <h2>Pesquisa socioeconômica</h2>
            <p>Esta pesquisa tem como intuito coletar dados sobre a situação dos alunos da UniRuy.</p><br>
            <p>Sobre a pesquisa:</p>
            <ul>
                <li>coleta de informaçoes basicas</li>
                <li>coleta em relação a faculdade</li>
                <li>coleta em relação ao financeiro</li>
            </ul>
            <h3>Escolha uma pesquisa</h3>
            <ol>
                <li><a href="/persistence/pesquisa-1.php">Primeira Pesquisa</a></li>
           
            </ol>

            <p>No momento, esta é a única pesquisa disponível.</p>
        
        </div>

    </main>
</body>

</html>