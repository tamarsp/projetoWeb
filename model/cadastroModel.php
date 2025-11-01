<?php
require_once __DIR__ . '/../persistence/Conexao.php';
class cadastroModel{//cria classe cadastroModel
    private $con; //declaração de uma variavel privada, pasra guardar a conexão pdo com o banco

    public function __construct(){//contruct (construtor) chama o metodo estatico
        $this->con = Conexao::getInstance()->getConnection();//(getInstance()) é usado para evitar criar várias conexões desnecessárias
    }

    public function cadastrar($nome, $sobrenome, $email, $senha){//recebe os dados do usuarioenviados pelo controller

        $senhaHash = password_hash($senha, PASSWORD_BCRYPT); //Cria um hash seguro da senha antes de salvar. O PASSWORD_BCRYPT é um algoritmo forte e seguro.
        $sql = "INSERT INTO usuarios (Nome, Sobrenome, email, Senha) VALUES (:Nome, :Sobrenome, :email, :Senha)";//monta a instrução sql de inserção na tabela usuarios
         //Os dois-pontos (:) indicam placeholders
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam(':Nome', $nome);
        $stmt->bindParam(':Sobrenome', $sobrenome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':Senha', $senha);
        $stmt->execute();
       
        //executa a query e retorna o id
        if ($stmt->execute()) {
            return $this->con->lastInsertId();
        } else {
            return false;
        }
    }

    //verifica se email existe. Cria uma consulta sql
    public function emailExiste($email) {
        $sql = "SELECT id FROM usuarios WHERE email = :email LIMIT 1";
        //
        try {//Prepara a query e insere o valor do e-mail no placeholder.
            $stmt = $this->con->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            
            // Retorna true se a contagem de linhas for maior que zero
            return $stmt->rowCount() > 0;
        } catch (\PDOException $e) {
            // Em caso de erro de consulta, você pode logar e retornar true para ser mais seguro
            return true; 
        }
    }
}
?>  