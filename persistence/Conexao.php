<?php
class Conexao {
    private static $instance;
    private $conexao;

    private function __construct() {
        $localhost = 'localhost';
        $dbname = 'projetoWeb';
        $username = 'root';
        $password = '';

        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        try {
            $this->conexao = new PDO("mysql:host=$localhost;dbname=$dbname;charset=utf8", $username, $password);
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Erro na conexão: " . $e->getMessage();
            exit;
        }
}

    public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new Conexao();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->conexao;
    }
}