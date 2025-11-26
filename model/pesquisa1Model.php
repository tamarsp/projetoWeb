<?php
require_once __DIR__ . '/../persistence/Conexao.php';
session_start();

class pesquisa1Model {
    private $con;

    public function __construct() {
        $this->con = Conexao::getInstance()->getConnection();
    }

    public function salvarPesquisa($idade, $genero, $autodeclaracao, $escola, 
            $trabalho, $fator_escolha, $oportunidade, 
            $dificuldade, $apoio) {
        $sql = "INSERT INTO pesquisa1 (idade, genero, autodeclaracao, escola, trabalho, 
                fator_escolha, oportunidade, dificuldade, apoio) 
                VALUES (:idade, :genero, :autodeclaracao, :escola, :trabalho, 
                :fator_escolha, :oportunidade, :dificuldade, :apoio)";
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam(':idade', $idade); 
        $stmt->bindParam(':genero', $genero);
        $stmt->bindParam(':autodeclaracao', $autodeclaracao);
        $stmt->bindParam(':escola', $escola);
        $stmt->bindParam(':trabalho', $trabalho);
        $stmt->bindParam(':fator_escolha', $fator_escolha);
        $stmt->bindParam(':oportunidade', $oportunidade);
        $stmt->bindParam(':dificuldade', $dificuldade);
        $stmt->bindParam(':apoio', $apoio);

        if ($stmt->execute()) {
            return $this->con->lastInsertId(); // retorna ID inserido
        } else {
            return false;
        }
    }
}