
<?php
session_start();
require_once '../model/contatoModel.php';

class contatoController{
    
    public function enviarMenssagem(){

        $nome = $_POST['nome']??'';
        $email = $_POST['email']??'';
        $mensagem = $_POST['mensagem']??'';

        $contatoModel = new contatoModel();
        $user = $contatoModel->salvarMensagem($nome, $email, $mensagem);

        if($user){
           $_SESSION['sucesso'] = "Mensagem enviada com sucesso!";
             header("Location: ../persistence/contato.php");
            exit();
        }else{
            $_SESSION['erro'] = "Erro ao enviar a mensagem. Tente novamente.";
            header("Location: ../persistence/contato.php");
            exit();
        }       

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $controller = new contatoController();
        $controller->enviarMensagem(); // Chama o método
        exit();
    }
    
}
}