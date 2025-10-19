<?php
require_once '/xampp/htdocs/projetoWeb/model/loginModel.php';
session_start();

class loginController{
    public function login(){
        $email = $_POST['email']??'';
        $senha = $_POST['senha']??'';

        $loginModel = new loginModel();
        $user = $loginModel->autenticar($email, $senha);

        if($user){
            $_SESSION['user_email'] = $user['email'];
            header('Location: ../persistence/inicio.html');
            exit();
        } else {
            $_SESSION['error'] = 'Email ou senha inválidos.';
            header('Location: ../persistence/login.php');
            exit();
        }
       
    }
}
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $controller = new loginController();
    $controller->login();
}