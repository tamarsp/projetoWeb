<?php
$login = $_POST['Nome'];
$senha = $_POST['Senha'];

//exemplo sem banco de dados teste
//mudar quando incluir o banco de dados
if($login == "adm" && $senha == "123456"){
    session_start();
    $_SESSION['nome'] = $login;
    header("Location:\persistence\index.html");
    exit();
}else{
    echo "Usuário ou senha inválidos";
}