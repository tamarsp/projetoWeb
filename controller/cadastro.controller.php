<?php
$cadastro = $_POST['Nome'];
$sobrenome = $_POST['Sobrenome'];
$email = $_POST['email'];
$senha = $_POST['Senha'];
$senha_confirmation = $_POST['Senha_confirmation'];
    
if ($senha === $senha_confirmation) {
    // Cadastrar o usuário
} else {
    // Senhas não conferem
}