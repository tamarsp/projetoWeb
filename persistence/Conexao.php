<?php
session_start();
class Conexao {//classe conexão
    /**Atributos privados */
    private static $instance = null;//Armazena a única instância da classe (Singleton).
    private $connection;

    private $host = 'localhost';
    private $dbName = 'projetoWeb';
    private $user = 'root';
    private $password = 'Senha20@';

    private function __construct(){//A variável $dns (ou DSN - Data Source Name) contém as informações necessárias para o PDO se conectar ao banco:
        $dns = "mysql:host={$this->host};dbname={$this->dbName};charset=utf8mb4";
        $options = [//opçoes de configuração do pdo
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];
        //tentando se conectar
        /**O código tenta criar uma nova conexão PDO com o banco de dados.Se der certo, a conexão é guardada em $this->connection. Se der erro (senha errada, banco inexistente, etc.), o catch captura a exceção e mostra uma mensagem de erro */
        try{
            $this->connection = new PDO($dns, $this->user, $this->password, $options);
            }catch (PDOException $e){
                throw new \PDOException('Erro de conexão: ' . $e->getMessage());
            }
    }
    public static function getInstance(){//metodo singleton
        /**getInstance() é o método que garante que só exista uma instância da classe. Se ainda não existe (self::$instance == null), ele cria uma nova. */
        if(self::$instance == null){
            self::$instance = new Conexao();/**O PHP verifica se já existe uma instância da classe Conexao.

Se não existir:

Cria uma nova conexão PDO com os dados do MySQL. Retorna essa única conexão para quem chamou. Todos os models do sistema passam a usar a mesma conexão ativa. */
        }
        return self::$instance;
    }//metodo para obter conexao
    public function getConnection(){
        return $this->connection;//
    }
}
?>