<?php
require_once '../persistence/Conexao.php';

class contatoModel{
    private $conexao;

    //construtor
    public function __construct(){
        $this->conexao = Conexao::getInstance()->getConnection();

    }

    public function salvarMensagem($nome, $email, $mensagem){
        try{
            $sql = "INSERT INTO contatos (nome, email, mensagem) VALUES (:nome, :email, :mensagem)";
           
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':mensagem', $mensagem);
            return $stmt->execute();

        }catch(PDOException $e){
            echo "Erro ao salvar a mensagem. Tente denovo: " . $e->getMessage();
            return false;
        }
    }
}