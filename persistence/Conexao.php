<?php
class Conexao {
    private static $instance = null;
    private $connection;

    private $host = 'localhost';
    private $dbName = 'projetoWeb';
    private $user = 'root';
    private $password = 'Senha20@';

    private function __construct(){
        $dns = "mysql:host={$this->host};dbname={$this->dbName};charset=utf8mb4";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];
        try{
            $this->connection = new PDO($dns, $this->user, $this->password, $options);
            }catch (PDOException $e){
                throw new \PDOException('Erro de conexão: ' . $e->getMessage());
            }
    }
    public static function getInstance(){
        if(self::$instance == null){
            self::$instance = new Conexao();
        }
        return self::$instance;
    }
    public function getConnection(){
        return $this->connection;
    }
}
?>