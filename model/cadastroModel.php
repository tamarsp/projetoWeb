<?php
require_once __DIR__ . '/../persistence/Conexao.php';
class cadastroModel{
    private $con;

    public function __construct(){
        $this->con = Conexao::getInstance()->getConnection();
    }

    public function cadastrar($nome, $sobrenome, $email, $senha){

        $senhaHash = password_hash($senha, PASSWORD_BCRYPT);
        $sql = "INSERT INTO usuarios (Nome, Sobrenome, email, Senha) VALUES (:Nome, :Sobrenome, :email, :Senha)";
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam(':Nome', $nome);
        $stmt->bindParam(':Sobrenome', $sobrenome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':Senha', $senha);
        $stmt->execute();

        if ($stmt->execute()) {
            return $this->con->lastInsertId();
        } else {
            return false;
        }
    }
}
?>  