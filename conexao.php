<?php
$servidor = "localhost";    
$usuario = "root";
$senha = "Senha20@";
$banco = "projeto_web";
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

if (!$conexao) {
    die("Conexão falhou: " . mysqli_connect_error());
} 
?>