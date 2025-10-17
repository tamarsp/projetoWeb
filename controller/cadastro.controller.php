<?php
$cadastro = $_POST['Nome'];
$sobrenome = $_POST['Sobrenome'];
$email = $_POST['email'];
$senha = $_POST['Senha'];
$senha_confirmacao = $_POST['Senha_confirmacao'];

if($senha === $senha_confirmacao){
    include_once '../conexao.php';
}