<?php
include_once '../conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $resultado = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        session_start();
        $_SESSION["usuario"] = $email;
        header("Location: ../persistence/inicio.html");
        exit();
    } else {
        $erro = "Email ou senha inválidos.";
    }
}
?>