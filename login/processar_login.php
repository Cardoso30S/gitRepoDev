<?php
session_start();
// Credenciais válidas
$usuarioValido = "alunosenai";
$senhaValida = "senha123";
$criptografada = base64_encode($senhaValida);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Verifica se as credenciais são válidas
    if ($username === $usuarioValido && $password === $senhaValida) {
        // Define uma variável de sessão para manter o estado de login
        $_SESSION["username"] = $username;

        // Redireciona para a página de boas-vindas
        header("Location: bem_vindo.php");
        exit();
    } else {
        echo "Credenciais inválidas. Por favor, tente novamente.";
        header("Location: index.php");
    }
}
?>