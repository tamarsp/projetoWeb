<?php
require_once __DIR__ . '/xampp/htdocs/projetoWeb/model/pesquisa1Model.php';//inclue o arquivo pesquisa-1Model que contém a classe responsável por interagir com o banco de dados.
//DIR - representa o diretorio atual
session_start();//inicia a sessão php. Permite usar variavel$_session para armazenar mensagens temporarias.

class pesquisa1Controller {

    public function salvarPesquisa(){
        $idade = $_POST['idade'] ?? ''; 
        $genero = $_POST['genero'] ?? '';
        $autodeclaracao = $_POST['autodeclaracao'] ?? '';
        $escola = $_POST['escola'] ?? '';
        $trabalho = $_POST['trabalho'] ?? '';
        $fator_escolha = $_POST['fator_escolha'] ?? '';
        $oportunidade = $_POST['oportunidade'] ?? '';
        $dificuldade = $_POST['dificuldade'] ?? '';
        $apoio = $_POST['apoio'] ?? '';

        if(empty($idade) || empty($genero) || empty($autodeclaracao) || empty($escola) || empty($trabalho) || empty($fator_escolha) || empty($oportunidade) || empty($dificuldade) || empty($apoio)) {
            $_SESSION['erro'] = "Preencha todos os campos!";
            header("Location: ../persistence/pesquisa-1.php");
            exit();
        }
         $pesquisa1Model = new pesquisa1Model();

        
        $resultado = $pesquisa1Model->salvarPesquisa(
            $idade, $genero, $autodeclaracao, $escola, 
            $trabalho, $fator_escolha, $oportunidade, 
            $dificuldade, $apoio);
    }
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $controller = new pesquisa1Controller();
    $controller->salvarPesquisa();
}
