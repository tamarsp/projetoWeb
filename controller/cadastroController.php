<?php
require_once __DIR__ . '/../model/cadastroModel.php';//inclue o arquivo cadastroModel que contém a classe responsável por interagir com o banco de dados.
//DIR - representa o diretorio atual

session_start();//inicia a sessão php. Permite usar variavel$_session para armazenar mensagens temporarias.

class cadastroController {//declaração de uma classse

    public function cadastrar() {//define a função principal que faz o cadastro de um novo usuario
        /**coleta os dados enviados pelo formulário html via metodo post. */
        $nome = $_POST['Nome'] ?? '';
        $sobrenome = $_POST['Sobrenome'] ?? '';
        $email = $_POST['email'] ?? '';
        $senha = $_POST['Senha'] ?? '';
        $confirmarSenha = $_POST['Senha_confirmacao'] ?? '';
//?? ''- garante que se o campo não existir, a variável receba uma string vazia, evitando erros.
        /**verifica se algum campo esta vazio.
         * Se estiver, guarda uma mensagem de erro na sessão e redireciona o usuário de volta para a página de cadastro.
         * exit() é usado para interromper o script logo após o redirecionamento.
         */
        if (empty($nome) || empty($sobrenome) || empty($email) || empty($senha) || empty($confirmarSenha)) {
        $_SESSION['erro'] = "Preencha todos os campos!";
        header("Location: ../persistence/cadastro.php");
        exit();
    }
        //Confere se as duas senhas são iguais. Se não forem, mostra o erro e volta para cadastro
        
        if ($senha !== $confirmarSenha) {
            $_SESSION['erro'] = "As senhas não coincidem!";
            header("Location: ../persistence/cadastro.php");
            exit();
        }  
        /**password_hash()-Gerar uma senha criptografada */   
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

        //cria um objeto da classeModel. Chama o metodo cadastrar() deste model, passando os dados dos usuarios. O metodo provavelmente insere no banco de dados os dados do usuario e retorna o id do usuario
        $cadastroModel = new cadastroModel();
        $id = $cadastroModel->cadastrar($nome, $sobrenome, $email, $senhaHash);

        //Se id for verdadeiro, mostra mensagem sucesso e encaminha redireciona para o inicio, senão aparece mensagem de erro e volta no cadastro
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
    
}//Verifica se o arquivo foi acessado via metodo post, se for cria uma istancia do controlador e executa o metodo cadastrar.

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $controller = new cadastroController();
    $controller->cadastrar();
}
?>
