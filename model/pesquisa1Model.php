<?php
require_once __DIR__ . '/../persistence/Conexao.php';
session_start();

class pesquisa1Model {
    private $con;

    public function __construct() {
        $this->con = Conexao::getInstance()->getConnection();
    }

    public function salvarPesquisa($idade, $genero, $frequencia, $satisfacao, $melhoria, $comentarios) {
        $sql = "INSERT INTO pesquisa1 (idade, genero, frequencia, satisfacao, melhoria, comentarios) 
                VALUES (:idade, :genero, :frequencia, :satisfacao, :melhoria, :comentarios)";
        
        $stmt = $this->con->prepare($sql);

        $stmt->bindParam(':idade', $idade);
        $stmt->bindParam(':genero', $genero);
        $stmt->bindParam(':frequencia', $frequencia);
        $stmt->bindParam(':satisfacao', $satisfacao);
        $stmt->bindParam(':melhoria', $melhoria);
        $stmt->bindParam(':comentarios', $comentarios);

        if ($stmt->execute()) {
            return $this->con->lastInsertId(); // retorna ID inserido
        } else {
            return false;
        }
    }
}
