<?php
$cadastro = $_POST['Nome'];
$sobrenome = $_POST['Sobrenome'];
$email = $_POST['email'];
$senha = $_POST['Senha'];
$senha_confirmation = $_POST['Senha_confirmation'];
    
if ($senha === $senha_confirmation) {
    // Cadastrar o usuário
    include_once '../conexao.php';
    $sql = "INSERT INTO usuarios (Nome, Sobrenome, email, Senha) VALUES ('$cadastro', '$sobrenome', '$email', '$senha')";
    if (mysqli_query($conn, $sql)) {
        // Cadastro bem-sucedido
        echo "Usuário cadastrado com sucesso!";
        header("Location: ../persistence/cadastro.html?success=1");
    } else {
        // Erro ao cadastrar usuário
        header("Location: ../persistence/inicio.html?error=cadastro_failed");
    }
    mysqli_close($conn);
} else {
    // Senhas não coincidem
    header("Location: ../persistence/cadastro.html?error=senha_confirmation");
}   
