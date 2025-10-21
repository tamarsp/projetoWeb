<?php
require_once __DIR__ . '/../model/cadastroModel.php';

session_start();

class cadastroController {

    public function cadastrar() {
        $nome = $_POST['Nome'] ?? '';
        $sobrenome = $_POST['Sobrenome'] ?? '';
        $email = $_POST['email'] ?? '';
        $senha = $_POST['Senha'] ?? '';
        $confirmarSenha = $_POST['Senha_confirmacao'] ?? '';

        if (empty($nome) || empty($sobrenome) || empty($email) || empty($senha) || empty($confirmarSenha)) {
        $_SESSION['erro'] = "Preencha todos os campos!";
        header("Location: ../persistence/cadastro.php");
        exit();
    }

        
        if ($senha !== $confirmarSenha) {
            $_SESSION['erro'] = "As senhas não coincidem!";
            header("Location: ../persistence/cadastro.php");
            exit();
        }     
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

        $cadastroModel = new cadastroModel();
        $id = $cadastroModel->cadastrar($nome, $sobrenome, $email, $senhaHash);

        if ($id) {
            $_SESSION['sucesso'] = "Cadastro realizado com sucesso!";
            header("Location: ../persistence/inicio.php");
            exit();
        } else {
            $_SESSION['erro'] = "Erro ao cadastrar. Tente novamente.";
            header("Location: ../persistence/cadastro.php");
            exit();
        }
        
    }
    
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $controller = new cadastroController();
    $controller->cadastrar();
}
?>
