<?php
session_start();
require_once '../model/contatoModel.php';

class ContatoController {
    
    public function enviarMensagem() {
        $nome = $_POST['nome'] ?? '';
        $email = $_POST['email'] ?? '';
        $mensagem = $_POST['mensagem'] ?? '';

        $contatoModel = new ContatoModel();
        $sucesso = $contatoModel->salvarMensagem($nome, $email, $mensagem);

        if ($sucesso) {
            $_SESSION['sucesso'] = "Mensagem enviada com sucesso!";
        } else {
            $_SESSION['erro'] = "Erro ao enviar a mensagem. Tente novamente.";
        }

        header("Location: ../persistence/contato.php");
        exit();
    }
}

// ✅ Fora da classe!
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller = new ContatoController();
    $controller->enviarMensagem();
}
