<?php
require_once(__DIR__ . '/../persistence/Conexao.php');
class loginModel{
    private $con;

    public function __construct(){
        $this->con = Conexao::getInstance()->getConnection();
    }

    public function autenticar($email, $senha){
        $sql = "SELECT * FROM usuarios WHERE email = :email";
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}